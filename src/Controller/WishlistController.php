<?php
// src/Controller/WishlistController.php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Wishlist;
use App\Entity\WishlistItem;
use App\Repository\MenProductsRepository;
use App\Repository\ProductRepository;
use App\Repository\WishlistItemRepository;
use App\Repository\WishlistRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class WishlistController extends AbstractController
{
   #[Route('/wishlist/add', name: 'wishlist_add', methods: ['POST'])]
public function add(
    Request $request,
    EntityManagerInterface $em,
    MenProductsRepository $productRepo,
    WishlistRepository $wishlistRepo
): JsonResponse {
    $user = $this->getUser();
    if (!$user) {
        return new JsonResponse(['status' => 'unauthorized'], 401);
    }

    $productId = $request->request->get('productId');
    $product = $productRepo->find($productId);
    if (!$product) {
        return new JsonResponse(['status' => 'product_not_found'], 404);
    }

    // Get or create wishlist
    $wishlist = $wishlistRepo->findOneBy(['user' => $user]);
    if (!$wishlist) {
        $wishlist = new Wishlist();
        $wishlist->setUser($user);
        $em->persist($wishlist);
    }

    // Prevent duplicates
    if ($wishlist->getProducts()->contains($product)) {
        return new JsonResponse(['status' => 'exists']);
    }

    $wishlist->getProducts()->add($product);
    $em->flush();

    return new JsonResponse(['status' => 'added']);
}
}
