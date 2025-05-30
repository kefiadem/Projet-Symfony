<?php

namespace App\Controller;

use App\Entity\Cart;
use App\Entity\CartItem;
use App\Entity\MenProducts;
use App\Repository\CartRepository;
use App\Repository\MenProductsRepository;
use App\Repository\ProductRepository;  // assuming you have this
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/cart')]
final class CartController extends AbstractController
{
    private $entityManager;
    private $cartRepository;
    private $productRepository;

    public function __construct(EntityManagerInterface $entityManager, CartRepository $cartRepository, MenProductsRepository $productRepository)
    {
        $this->entityManager = $entityManager;
        $this->cartRepository = $cartRepository;
        $this->productRepository = $productRepository;
    }

    // View Cart
    #[Route('/', name: 'cart_index', methods: ['GET'])]
    public function index(): Response
    {
        // Get the cart for the current logged in user
        $user = $this->getUser();
        if (!$user) {
            $this->addFlash('error', 'You must be logged in to view the cart.');
            return $this->redirectToRoute('app_login');
        }

        $cart = $this->cartRepository->findOneByUser($user);

        return $this->render('cart/index.html.twig', [
            'cart' => $cart,
        ]);
    }

    // Add item to cart
#[Route('/add/{productId}', name: 'cart_add', methods: ['POST', 'GET'])]
public function addToCart(int $productId, Request $request): Response
{
    $user = $this->getUser();
    if (!$user) {
        $this->addFlash('error', 'You must be logged in to add items to cart.');
        return $this->redirectToRoute('app_login');
    }

    $cart = $this->cartRepository->findOneByUser($user);
    if (!$cart) {
        $cart = new Cart();
        $cart->setUserId($user);
        $cart->setCreationDate(new \DateTime());
        $this->entityManager->persist($cart);
        $this->entityManager->flush();
    }

    $product = $this->productRepository->find($productId);
    if (!$product) {
        $this->addFlash('error', 'Product not found.');
        return $this->redirectToRoute('product_list'); // change to your product listing route
    }

    // Check if item already in cart
    $cartItems = $cart->getCartItems();
    foreach ($cartItems as $item) {
        if ($item->getProduct() === $product) {
            $item->setQuantity($item->getQuantity() + 1);
            $this->entityManager->flush();
            $this->addFlash('cart_added', 'Added another item to your cart.');
            // Redirect back to previous page
            return $this->redirect($request->headers->get('referer') ?? $this->generateUrl('app_home'));
        }
    }

    // If not in cart, add new CartItem
    $cartItem = new CartItem();
    $cartItem->setCart($cart);
    $cartItem->setProduct($product);
    $cartItem->setQuantity(1);
    $this->entityManager->persist($cartItem);
    $this->entityManager->flush();

    $this->addFlash('cart_added', 'Product added to cart.');

    // Redirect back to previous page
    return $this->redirect($request->headers->get('referer') ?? $this->generateUrl('app_home'));
}

    // Remove item from cart
    #[Route('/remove/{cartItemId}', name: 'cart_remove', methods: ['POST'])]
    public function removeFromCart(int $cartItemId): Response
    {
        $cartItem = $this->entityManager->getRepository(CartItem::class)->find($cartItemId);
        if (!$cartItem) {
            $this->addFlash('error', 'Cart item not found.');
            return $this->redirectToRoute('cart_index');
        }

        $this->entityManager->remove($cartItem);
        $this->entityManager->flush();

        $this->addFlash('success', 'Item removed from cart.');
        return $this->redirectToRoute('cart_index');
    }

    
}
