<?php
namespace App\Controller;

use DateTime;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CapilnasMateiController extends AbstractController
{
    #[Route('/CapilnasMatei')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('CapilnasMatei/index.html.twig', [
            'owner' => 'CapilnasMatei',
            'job' => 'we developer',
            'age' => $this->getAge(),
            'copyrightInterval' => $this->getCopyrightInterval(),
        ]);

    }
    private function getAge(): int
        {
            $now = new DateTime("now");
            $dob = new DateTime("1998-10-22 00:00:00");
            return $dob->diff($now)->y;
        }
    private function getCopyrightInterval(): string
        {
            $start = 2022;
            $end = date('Y');
            return ($end > $start) ? "$start - $end" : $start;
        }
}