<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BibicuDorinController extends AbstractController
{
    #[Route('/bibicudorin', name: 'app_bibicudorin')]
    public function index(): Response
    {
        return $this->render('BibicuDorin/index.html.twig', [
            'controller_name' => 'BibicuDorinController',
        ]);
    }
}
