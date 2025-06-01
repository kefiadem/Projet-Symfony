<?php

namespace App\Controller;

use App\Entity\Orders;
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
    public function panel(ManagerRegistry $doctrine, EntityManagerInterface $entityManager): Response
    {
        try {
            // Get all orders and count them using PHP's count() function
            $allOrders = $entityManager->getRepository(Orders::class)->findAll();
            $orderCount = count($allOrders);
            
            // Get the most recent orders (limit to 10)
            // We'll sort the orders manually to ensure compatibility
            $recentOrders = $allOrders;
            usort($recentOrders, function($a, $b) {
                return $b->getId() <=> $a->getId(); // Sort by ID descending
            });
            
            // Take only the first 10 orders
            $orders = array_slice($recentOrders, 0, 10);
            
            return $this->render('admin/dashboard.html.twig', [
                'controller_name' => 'AdminController',
                'order_count' => $orderCount,
                'orders' => $orders,
            ]);
        } catch (\Exception $e) {
            // Log the error
            error_log('Error in AdminController: ' . $e->getMessage());
            
            // Return a fallback view with error information
            return $this->render('admin/dashboard.html.twig', [
                'controller_name' => 'AdminController',
                'order_count' => 0,
                'orders' => [],
                'error' => $e->getMessage()
            ]);
        }
    }
    
    #[Route('/updateproduct/{id?}', name: '_update_product')]
    public function addProduct(): Response
    {
        // Your existing code for updating products
        return $this->render('admin/updateproduct.html.twig', [
            // Your existing variables
        ]);
    }
}
