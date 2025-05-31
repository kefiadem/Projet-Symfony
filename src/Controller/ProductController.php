<?php

namespace App\Controller;

use App\Entity\MenProducts;
use App\Repository\MenProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductController extends AbstractController
{
    #[Route('/products/{category}', name: 'products')]
    public function forhim(MenProductsRepository $repository,String $category, Request $request): Response
    {
        if($request->query->has('order')){
            $order=$request->query->get('order');
        }
        else{
            $order='review';
        }
        $products = $repository->createQueryBuilder('p')
            ->where('p.category = :category')
            ->setParameter('category', $category)
            ->orderBy('p.'.$order, 'DESC')
            ->getQuery()
            ->getResult();

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
