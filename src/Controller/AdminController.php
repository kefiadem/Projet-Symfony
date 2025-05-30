<?php

namespace App\Controller;

use App\Form\ProductsForm;
use App\Entity\MenProducts;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

#[Route('/admin', name: 'app.admin')]
final class AdminController extends AbstractController
{
    #[Route('/updateproduct/{id?}', name: 'update.product')]
    public function addProduct(MenProducts $product=null,ManagerRegistry $doctrine, Request $request): Response
    {
        $new=false;
        if (!$product){
            $new = true;
            $product = new MenProducts();
        }
        
        $form = $this->createForm(ProductsForm::class , $product);

        $form->handleRequest($request);

        if($form->isSubmitted()){
            $entityManager = $doctrine->getManager();
            $entityManager->persist($product);
            $entityManager->flush();
            $msg=$product->getName().' (ID: '.$product->getId().') edited successfully!';
            if ($new){ 
                $msg=$product->getName().' (ID: '.$product->getId().') added successfully!';
            }
            $this->addFlash('success', $msg);
            return $this->redirectToRoute("/");
        }
        else{



        return $this->render('admin/addproduct.html.twig', [
            'form' => $form->createView()
        ]);
    }
    }
}
