<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalinaBocaController extends AbstractController
{
    #[Route('/catalina/boca', name: 'app_catalina_boca')]
    public function index(): Response
    {
       return $this->render('catalina_boca/index.html.twig', [
      'controller_name' => 'CatalinaBocaController',
      'author' => 'Catalina Boca',
      'description' => 'Microsoft Dynamics NAV Software Developer',
      'knowledges' => [
        ['name' => 'C/AL', 'experience' => '1 year'],
        ['name' => 'AL', 'experience' => '1 year'],
        ['name' => 'Java', 'experience' => '4 years'],
        ['name' => 'C++', 'experience' => '4 years'],
        ['name' => 'MySql', 'experience' => '4 years'],
      ],
      'education' => [
        ['level' => 'Master', 'institution' => 'Universitatea 1 Decembrie 1918 Alba Iulia','profile' => 'Programare Avansata si Baze de date','durata' => '2 ani'],
        ['level' => 'Licenta', 'institution' => 'Universitatea 1 Decembrie 1918 Alba Iulia','profile' => 'Informatica','durata'=>'3 ani'],
        ['level' => 'Liceu', 'institution' => 'Colegiul National Horea Closca si Crisan Alba Iulia','profile' => 'Matematica-Informatica','durata'=>'4 ani'],
      ]
    ]);
    }
}
