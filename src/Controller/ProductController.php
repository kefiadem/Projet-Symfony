<?php

namespace App\Controller;

use App\Entity\MenProducts;
use App\Repository\MenProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductController extends AbstractController
{
    #[Route('/products/{category}', name: 'men_product')]
    public function forhim(MenProductsRepository $repository,String $category): Response
    {
        $products = $repository->findBy(['category' => $category]);
        return $this->render('product/index.html.twig', [
            'products' => $products,
            'category' => $category,
        ]);
    }
    #[Route('/product/{id}', name: 'id_product')]
    public function getProduct(MenProductsRepository $repository,int $id): Response
    {
        $product = $repository->find($id);
        if (!$product) {
            throw $this->createNotFoundException('Product not found');
        }
        return $this->render('product/single.html.twig', [
            'product' => $product,
        ]);
    }


}
