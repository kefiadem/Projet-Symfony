<?php
// src/Controller/ProfileController.php
namespace App\Controller;

use App\Entity\User;
use App\Form\ProfileTypeForm;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/profile')]
class ProfileController extends AbstractController
{
    #[Route('/', name: 'app_profile')]
    #[IsGranted('ROLE_USER')]
    public function index(): Response
    {
        $user = $this->getUser();
        return $this->render('profile/index.html.twig', [
            'user' => $user,
        ]);
    }
    #[Route('/edit', name: 'app_profile_edit')]
    #[IsGranted('ROLE_USER')]
    public function edit(
        Request $request, 
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger
    ): Response {
        /** @var User $user */
        $user = $this->getUser();
        $form = $this->createForm(ProfileTypeForm::class, $user);
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Handle image upload - using 'profileImage' field
            $imageFile = $form->get('profileImage')->getData();
            
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('profile_images_directory'),
                        $newFilename
                    );
                    
                    // Delete old image if exists
                    if ($user->getImage()) {
                        $oldImage = $this->getParameter('profile_images_directory').'/'.$user->getImage();
                        if (file_exists($oldImage)) {
                            unlink($oldImage);
                        }
                    }
                    
                    $user->setImage($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'There was a problem uploading your image');
                }
            }

            $entityManager->flush();
            $this->addFlash('success', 'Profile updated successfully!');
            return $this->redirectToRoute('app_profile');
        }

        return $this->render('profile/edit.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }
}