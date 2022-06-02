<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VassRichardDanielController extends AbstractController
{
  #[Route('/VassRichardDaniel')]
  public function show(): Response
  {
      return $this->render('VassRichardDaniel/index.html.twig', [
        'name' => 'Vass Richard-Daniel',
        'books' => [
          ['name' => 'Black-box thinking'],
          ['name' => 'Elon Musk and the Quest for a Fantastic Future'],
          ['name' => 'The Wisdom of Psychopaths'],
        ]
      ]);
    }
}
