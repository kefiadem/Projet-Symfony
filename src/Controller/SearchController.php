<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\MenProducts;
use Doctrine\ORM\EntityManagerInterface;


class SearchController extends AbstractController
{
    #[Route('/search', name: 'product_search')]
    public function search(Request $request, EntityManagerInterface $em): Response
    {
        $category   = $request->query->get('category')?? 'all';
        $orderBy    = $request->query->get('order', 'price'); // default order by price
        $direction  = strtoupper($request->query->get('direction', 'ASC')); // ASC or DESC
        $keywords   = trim($request->query->get('keywords'));
        $minRating  = $request->query->get('minRating');
        $minPrice   = $request->query->get('minPrice');
        $maxPrice   = $request->query->get('maxPrice');

        $qb = $em->getRepository(MenProducts::class)->createQueryBuilder('p');

        // Filtering
        if ($category) {
            $qb->andWhere('p.category = :category')
                ->setParameter('category', $category);
        }

        if ($keywords) {
            $qb->andWhere('p.name LIKE :kw OR p.description LIKE :kw')
                ->setParameter('kw', '%' . $keywords . '%');
        }

        if ($minRating) {
            $qb->andWhere('p.review >= :minRating')
                ->setParameter('minRating', $minRating);
        }

        if ($minPrice) {
            $qb->andWhere('p.price >= :minPrice')
                ->setParameter('minPrice', $minPrice);
        }

        if ($maxPrice) {
            $qb->andWhere('p.price <= :maxPrice')
                ->setParameter('maxPrice', $maxPrice);
        }

        // Ordering
        $allowedOrderFields = ['price', 'review', 'ReleaseDate', 'name'];
        if (!in_array($orderBy, $allowedOrderFields)) {
            $orderBy = 'price';
        }
        $qb->orderBy('p.' . $orderBy, $direction === 'DESC' ? 'DESC' : 'ASC');

        $products = $qb->getQuery()->getResult();

        return $this->render('search/index.html.twig', [
            'products' => $products,
            'category' => $category,
            'orderBy'  => $orderBy,
            'direction'=> $direction,
            'keywords' => $keywords,
            'minRating'=> $minRating,
            'minPrice' => $minPrice,
            'maxPrice' => $maxPrice,
            'categories'=>['forhim','forher','accessories'],
        ]);
    }
}
