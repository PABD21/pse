<?php
// src/Controller/MunteanAlinController.php
namespace App\Controller;

use DateTime;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MunteanAlinController extends AbstractController
{
    #[Route('/MunteanAlin')]

    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('MunteanAlin/alin.html.twig', [
            'owner' => 'Muntean Alin',
            'age' => $this->getAge(),
        ]);
    } 
    private function getAge(): int
        {
            $now = new DateTime("now");
            $dob = new DateTime("1998-07-19 00:00:00");
            return $dob->diff($now)->y;
        }
}
