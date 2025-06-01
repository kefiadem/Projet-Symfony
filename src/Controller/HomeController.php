<?php

namespace App\Controller;

use App\Repository\MenProductsRepository;
use App\Repository\ReviewsRepository; // <-- Add this
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Reviews;

final class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(
        MenProductsRepository $productRepository,
        ReviewsRepository $reviewsRepository, // <-- Add this
        Request $request
    ): Response {
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

        // Fetch all reviews (or limit as needed)
        $reviews = $reviewsRepository->findAll();

        return $this->render('home/index.html.twig', [
            'products' => $Products,
            'reviews' => $reviews, // <-- Pass to template
        ]);
    }
    #[Route('/add-review', name: 'add_review', methods: ['POST'])]
    public function addReview(Request $request, EntityManagerInterface $em): RedirectResponse
    {
        $text = $request->request->get('email');

        if ($text && trim($text) !== '') {
            $review = new Reviews();
            $review->setText($text);
            $user=$this->getUser();
            $review->setUser($user);
            $em->persist($review);
            $em->flush();

            $this->addFlash('success', 'Thank you for your review!');
        } else {
            $this->addFlash('danger', 'Please enter your review.');
        }

        return $this->redirectToRoute('app_home');
    }
}
