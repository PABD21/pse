<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AmaliaBakoController extends AbstractController
{
    #[Route('/amaliabako', name: 'app_amaliabako')]
    public function index(): Response
    {
        return $this->render('AmaliaBako/index.html.twig', [
            'controller_name' => 'AmaliaBakoController',
        ]);
    }
}
