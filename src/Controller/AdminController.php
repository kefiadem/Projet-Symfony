<?php

namespace App\Controller;

use App\Entity\Orders;
use App\Entity\MenProducts;
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
  
}
