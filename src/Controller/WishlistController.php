<?php

namespace App\Controller;

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
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

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

        $wishlist = $wishlistRepo->findOneBy(['user' => $user]);
        if (!$wishlist) {
            $wishlist = new Wishlist();
            $wishlist->setUser($user);
            $em->persist($wishlist);
        }

        if ($wishlist->getProducts()->contains($product)) {
            return new JsonResponse(['status' => 'exists']);
        }

        $wishlist->addProduct($product);
        $em->flush();

        return new JsonResponse(['status' => 'added']);
    }

    #[Route('/wishlist', name: 'wishlist_index', methods: ['GET'])]
    public function index(WishlistRepository $wishlistRepo): JsonResponse
    {
        $user = $this->getUser();
        if (!$user) {
            return new JsonResponse([], 401);
        }

        $wishlist = $wishlistRepo->findOneBy(['user' => $user]);
        if (!$wishlist) {
            return new JsonResponse([]);
        }

        $items = [];
        foreach ($wishlist->getProducts() as $product) {
            $items[] = [
                'id' => $product->getId(),
                'name' => $product->getName(),
                'image' => '/uploads/' . $product->getImage() // Adjust path as needed
            ];
        }

        return new JsonResponse($items);
    }

    #[Route('/wishlist/remove/{id}', name: 'wishlist_remove', methods: ['POST'])]
    public function remove(
        int $id,
        Request $request,
        EntityManagerInterface $em,
        WishlistRepository $wishlistRepo,
        MenProductsRepository $productRepo,
        CsrfTokenManagerInterface $csrfTokenManager
    ): JsonResponse {
        $user = $this->getUser();
        if (!$user) {
            return new JsonResponse(['status' => 'unauthorized'], 401);
        }

        $submittedToken = $request->headers->get('X-CSRF-TOKEN');
        if (!$csrfTokenManager->isTokenValid(new \Symfony\Component\Security\Csrf\CsrfToken('wishlist_action', $submittedToken))) {
            return new JsonResponse(['status' => 'invalid_csrf'], 403);
        }

        $product = $productRepo->find($id);
        if (!$product) {
            return new JsonResponse(['status' => 'product_not_found'], 404);
        }

        $wishlist = $wishlistRepo->findOneBy(['user' => $user]);
        if ($wishlist && $wishlist->getProducts()->contains($product)) {
            $wishlist->removeProduct($product);
            $em->flush();
        }

        return new JsonResponse(['status' => 'removed']);
    }
}
