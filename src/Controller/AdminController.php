<?php

namespace App\Controller;

use App\Form\ProductsForm;
use App\Entity\MenProducts;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/admin', name: 'app.admin')]
final class AdminController extends AbstractController
{
    #[Route('/updateproduct/{id?}', name: 'update.product')]
    public function addProduct(MenProducts $product=null,ManagerRegistry $doctrine, Request $request, SluggerInterface $slugger,#[Autowire('%kernel.project_dir%/public/assets/uploads/products')] string $brochuresDirectory): Response
    {
        $new=false;
        if (!$product){
            $new = true;
            $product = new MenProducts();
        }
        
        $form = $this->createForm(ProductsForm::class , $product);

        $form->handleRequest($request);

        if($form->isSubmitted()){
            $image = $form->get('image')->getData();

            
            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$image->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $image->move($brochuresDirectory, $newFilename);
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $product->setImage($newFilename);
            }



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



        return $this->render('admin/updateproduct.html.twig', [
            'form' => $form->createView()
        ]);
    }
    }
}
