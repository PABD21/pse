<?php

namespace App\Controller;

use DateTime;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MihaiBaciuController extends AbstractController
{
    #[Route('/MihaiBaciu')]
    public function PersonalPage(): Response
    {

        return $this->render('MihaiBaciu/index.html.twig', [
            'owner' => 'Mihai Baciu',
            'job' => 'web developer',
            'age' => $this->getAge(),
            'copyrightInterval' => $this->getCopyrightInterval(),
        ]);

    }
    private function getAge(): int
        {
            $now = new DateTime("now");
            $dob = new DateTime("1986-09-03 00:00:00");
            return $dob->diff($now)->y;
        }
    private function getCopyrightInterval(): string
        {
            $start = 2022;
            $end = date('Y');
            return ($end > $start) ? "$start - $end" : $start;
        }
}
