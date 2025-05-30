<?php

namespace App\Controller;

use App\Form\ProductsForm;
use App\Entity\MenProducts;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

#[Route('/admin', name: 'app_admin')]
final class AdminController extends AbstractController
{
    #[Route('/addproduct', name: 'app_admin')]
    public function addProduct(ManagerRegistry $doctrine, Request $request): Response
    {
        $product = new MenProducts();
        
        $form = $this->createForm(ProductsForm::class , $product);

        $form->handleRequest($request);

        if($form->isSubmitted()){
            $entityManager = $doctrine->getManager();
            $entityManager->persist($product);
            $entityManager->flush();
            $this->addFlash('success', $product->getName().' (ID: '.$product->getId().') added successfully!');
            return $this->redirectToRoute("/");
        }
        else{



        return $this->render('admin/addproduct.html.twig', [
            'form' => $form->createView()
        ]);
    }
    }
}
