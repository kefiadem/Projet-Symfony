<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

final class MailController extends AbstractController
{
    #[Route('/mail', name: 'app_mail')]
    public function index(): Response
    {
        return $this->render('mail/index.html.twig', [
            'controller_name' => 'MailController',
        ]);
    }
     #[Route('/send-mail', name: 'send_mail')]
    public function sendMail(MailerInterface $mailer): Response
    {
        $email = (new Email())
            ->from('abdelkaderammar99@gmail.com') // sender (use same as Mailjet sender)
            ->to('salimammar99@gmail.com') // your Gmail address
            ->subject('Symfony + Mailjet Test')
            ->text('This is a test email from Symfony using Mailjet SMTP.');

        $mailer->send($email);

        return new Response('Email sent successfully!');
    }
}
