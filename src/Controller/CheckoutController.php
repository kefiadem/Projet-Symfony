<?php

namespace App\Controller;

use App\Entity\Orders;
use App\Form\OrderForm;
use App\Entity\OrderItem;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Repository\CartRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;  // <-- Add this


final class CheckoutController extends AbstractController
{
    #[Route('/checkout', name: 'checkout')]
    public function checkout(
        Request $request,
        EntityManagerInterface $em,
        CartRepository $cartRepository
    ): Response {
        $user = $this->getUser();

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $cart = $cartRepository->findOneByUser($user);
        $cartItems=$cart->getCartItems();

        if (!$cartItems) {
            $this->addFlash('warning', 'Your cart is empty.');
            return $this->redirectToRoute('cart_index');
        }

        $order = new Orders();
        $order->setBuyerEmail($user->getEmail());
        $totalPrice = 0;
        foreach ($cartItems as $cartItem) {
            $totalPrice += $cartItem->getProduct()->getPrice() * $cartItem->getQuantity();
        }
        $order->setTotalPrice($totalPrice);
        $form = $this->createForm(OrderForm::class, $order);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Save order details
            $em->persist($order);

            // Create OrderItems from CartItems
            foreach ($cartItems as $cartItem) {
                $orderItem = new \App\Entity\OrderItem();
                $orderItem->setOrderRef($order);
                $orderItem->setProductName($cartItem->getProduct()->getName());
                $orderItem->setQuantity($cartItem->getQuantity());
                $orderItem->setProductPrice($cartItem->getProduct()->getPrice());

                $em->persist($orderItem);
            }

            // Remove items from cart (clear cart)
            foreach ($cartItems as $cartItem) {
                $em->remove($cartItem);
            }

            $em->flush();

            $this->addFlash('success', 'Order placed successfully!');

            return $this->redirectToRoute('app_home');
        }

        return $this->render('checkout/index.html.twig', [
            'orderForm' => $form->createView(),
            'cartItems' => $cartItems,
            'totalPrice' => $totalPrice,
        ]);
    }
}

