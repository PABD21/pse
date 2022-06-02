<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OtiliaHanchesController extends AbstractController
{
    #[Route('/OtiliaHanches', name: 'app_OtiliaHanches')]
    public function index(): Response
    {
        return $this->render('OtiliaHanches/index.html.twig', [
            'controller_name' => 'OtiliaHanchesController',
        ]);
    }
}
