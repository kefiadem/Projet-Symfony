<?php

namespace App\Controller;

use App\Repository\MenProductsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

final class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(MenProductsRepository $productRepository, Request $request): Response
    {
        if($request->query->has('order')){
            $order=$request->query->get('order');
        }
        else{
            $order='review';
        }
        $categories = ['forhim', 'forher', 'accessories'];
        $productsbuilder = [];

        foreach ($categories as $category) {
            $productsbuilder[$category] = $productRepository->createQueryBuilder('p')
                ->where('p.category = :category')
                ->setParameter('category', $category)
                ->orderBy('p.'.$order, 'DESC')
                ->setMaxResults(4)
                ->getQuery()
                ->getResult();
        }
        $Products = array_merge(...array_values($productsbuilder));
       // dd($Products);
        return $this->render('home/index.html.twig', [
            'products' => $Products,
        ]);
    }

}
