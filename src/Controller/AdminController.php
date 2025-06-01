<?php

namespace App\Controller;

use App\Entity\Orders;
use App\Entity\MenProducts;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Form\ProductsForm;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\String\Slugger\SluggerInterface;
use App\Repository\OrdersRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/admin', name: 'app.admin')]
final class AdminController extends AbstractController
{
    #[Route('/panel', name: '_panel')]
    public function panel(Request $request, EntityManagerInterface $entityManager): Response
    {
        try {
            // Get status filter from query parameter, default to 'all'
            $statusFilter = $request->query->get('status', 'all');
            
            // Get all orders
            $allOrders = $entityManager->getRepository(Orders::class)->findAll();
            
            // Filter orders by status if needed
            $filteredOrders = [];
            foreach ($allOrders as $order) {
                if ($statusFilter === 'all' || $order->getStatus() === $statusFilter) {
                    $filteredOrders[] = $order;
                }
            }
            
            // Count total orders (unfiltered)
            $orderCount = count($allOrders);
            
            // Count orders by status for the status counters
            $pendingCount = 0;
            $deliveringCount = 0;
            $deliveredCount = 0;
            
            foreach ($allOrders as $order) {
                switch ($order->getStatus()) {
                    case 'Pending':
                        $pendingCount++;
                        break;
                    case 'Delivering':
                        $deliveringCount++;
                        break;
                    case 'Delivered':
                        $deliveredCount++;
                        break;
                }
            }
            
            // Sort the filtered orders by ID descending
            usort($filteredOrders, function($a, $b) {
                return $b->getId() <=> $a->getId(); // Sort by ID descending
            });
            
            // Take only the first 10 orders
            $orders = array_slice($filteredOrders, 0, 10);
            
            return $this->render('admin/dashboard.html.twig', [
                'controller_name' => 'AdminController',
                'order_count' => $orderCount,
                'orders' => $orders,
                'current_status' => $statusFilter,
                'pending_count' => $pendingCount,
                'delivering_count' => $deliveringCount,
                'delivered_count' => $deliveredCount
            ]);
        } catch (\Exception $e) {
            // Log the error
            error_log('Error in AdminController: ' . $e->getMessage());
            
            // Return a fallback view with error information
            return $this->render('admin/dashboard.html.twig', [
                'controller_name' => 'AdminController',
                'order_count' => 0,
                'orders' => [],
                'current_status' => 'all',
                'pending_count' => 0,
                'delivering_count' => 0,
                'delivered_count' => 0,
                'error' => $e->getMessage()
            ]);
        }
    }
    
    #[Route('/updateproduct/{id?}', name: '_update_product')]
    public function addProduct(MenProducts $product=null,ManagerRegistry $doctrine, Request $request, SluggerInterface $slugger,#[Autowire('%kernel.project_dir%/public/assets/uploads/products')] string $brochuresDirectory): Response
    {
        $new=false;
        if (!$product){
            $new = true;
            $product = new MenProducts();
        }
        
        $form = $this->createForm(ProductsForm::class , $product);

        $form->handleRequest($request);

        if($form->isSubmitted()){
            $image = $form->get('image')->getData();

            
            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$image->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $image->move($brochuresDirectory, $newFilename);
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $product->setImage($newFilename);
            }



            $entityManager = $doctrine->getManager();
            $entityManager->persist($product);
            $entityManager->flush();
            $msg=$product->getName().' (ID: '.$product->getId().') edited successfully!';
            if ($new){ 
                $msg=$product->getName().' (ID: '.$product->getId().') added successfully!';
            }
            $this->addFlash('success', $msg);
            return $this->redirectToRoute("/admin/panel");
        }
        else{



        return $this->render('admin/updateproduct.html.twig', [
            'form' => $form->createView()
        ]);
        }
        
    }
    #[Route('/products', name: '_list_products')]
    public function listProducts(ManagerRegistry $doctrine): Response
    {
        $products = $doctrine->getRepository(MenProducts::class)->findAll();
        
        return $this->render('admin/products.html.twig', [
            'products' => $products
        ]);
    }
    #[Route('/products/delete/{id}', name: '_delete_product')]
    public function deleteProduct(int $id, EntityManagerInterface $em, Request $request): RedirectResponse
{
    $product = $em->getRepository(MenProducts::class)->find($id);
    
    if (!$product) {
        $this->addFlash('error', 'Product not found');
        return $this->redirectToRoute('app.admin_list_products');
    }

    // CSRF protection
    $submittedToken = $request->request->get('_token');
    if (!$this->isCsrfTokenValid('delete' . $product->getId(), $submittedToken)) {
        $this->addFlash('error', 'Invalid CSRF token');
        return $this->redirectToRoute('app.admin_list_products');
    }

    try {
        $em->remove($product);
        $em->flush();
        $this->addFlash('success', 'Product deleted successfully');
    } catch (\Exception $e) {
        $this->addFlash('error', 'Error deleting product: ' . $e->getMessage());
    }

    return $this->redirectToRoute('app.admin_list_products');
}


    #[Route('/order/view/{id}', name: '_order_view')]
    public function viewOrder($id, EntityManagerInterface $em): Response
{
    $order = $em->getRepository(Orders::class)->find($id);
    
    if (!$order) {
        throw $this->createNotFoundException('Order not found');
    }

    return $this->render('admin/order_view.html.twig', [
        'order' => $order,
        'orderItems' => $order->getOrderItems(), // <- optional, but clear
    ]);
}
    #[Route('/order/status/{id}', name: '_order_status_change')]
    public function changeStatus($id, Request $request, EntityManagerInterface $em): RedirectResponse
{
    $order = $em->getRepository(Orders::class)->find($id);
    if (!$order) {
        throw $this->createNotFoundException('Order not found');
    }

    // Toggle status (example: 'pending' <-> 'completed')
    $oldstatus = $order->getStatus();
    if ($oldstatus === 'Pending') {
        $newStatus = 'Delivering';
    }
    else if ($oldstatus === 'Delivering') {
        $newStatus = 'Delivered';
    }
    else {
        $newStatus = 'Pending';
    }
    $order->setStatus($newStatus);

    $em->persist($order);
    $em->flush();

    return $this->redirectToRoute('app.admin_panel');
}
#[Route('/order/remove/{id}', name: '_order_remove', methods: ['POST'])]
public function removeOrder(int $id, EntityManagerInterface $em, Request $request): RedirectResponse
{
    // CSRF token check for security
    $submittedToken = $request->request->get('_token');
    if (!$this->isCsrfTokenValid('delete-order'.$id, $submittedToken)) {
        $this->addFlash('error', 'Invalid CSRF token.');
        return $this->redirectToRoute('app.admin_panel');
    }

    $order = $em->getRepository(Orders::class)->find($id);
    if (!$order) {
        $this->addFlash('error', 'Order not found.');
        return $this->redirectToRoute('app.admin_panel');
    }

    $em->remove($order);
    $em->flush();

    $this->addFlash('success', 'Order #' . $id . ' removed successfully.');

    return $this->redirectToRoute('app.admin_panel');
}
}
