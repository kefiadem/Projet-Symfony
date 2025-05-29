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
    #[Route('/products/{id}', name: 'id_product')]
    public function getProduct(MenProductsRepository $repository,int $id): Response
    {
        $products = $repository->findBy(['id' => $id]);
        return $this->render('product/index.html.twig', [
            'products' => $products,
        ]);
    }
    #[Route('/products/add/{category}', name: 'add_men_product')]
    public function add(MenProductsRepository $repository,String $category): Response
    {
        $products = $repository->findBy(['category' => $category]);
        return $this->render('product/index.html.twig', [
            'products' => $products,
            'category' => $category,
        ]);
    }

}
