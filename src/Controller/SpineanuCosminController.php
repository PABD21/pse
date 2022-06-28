<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SpineanuCosminController extends AbstractController
{
    #[Route('/spineanu-cosmin')]
    public function index(): Response
    {
        return $this->render('spineanu_cosmin/index.html.twig', [
            'studentName' =>'Spineanu Cosmin',
            'tagLine' => 'Follow your Vision. Be excellent to Yourself and Others',
            'skills' => [
                [ 'name'=>'Problem Solving Skills' ],
                [ 'name'=>'Critical Thinking' ],
                [ 'name'=>'Flexibility' ],
                [ 'name'=>'Communication Skills' ],
                [ 'name'=>'Teamwork' ],
                [ 'name'=>'Organization Skills' ],
                [ 'name'=>'Empathy' ],
                [ 'name'=>'Emotional Intelligence' ]
            ],
            'hobbies' => [
                ['name' => 'Listening to podcasts', 'icon'=>'fa-headphones'],
                ['name' => 'Football', 'icon'=>'fa-futbol'],
                ['name' => 'Traveling', 'icon'=>'fa-suitcase'],
                ['name' => 'Music', 'icon'=>'fa-music']
            ],
            'education' => [
                [
                    'schoolName'=>'Universitatea „1 Decembrie 1918” din Alba Iulia',
                    'description'=>'Facultatea de Ştiinţe Exacte şi Inginereşti, Programare avansată şi baze de date',
                    'startYear'=>'2020',
                    'endYear'=>'2022'
                ],
                [
                    'schoolName'=>'The Nicolae Titulescu University of Bucharest',
                    'description'=>'Bachelor’s Degree, Law',
                    'startYear'=>'2009',
                    'endYear'=>'2013'
                ],
                [
                    'schoolName'=>'Colegiul National Tudor Vladimirescu Targu-Jiu',
                    'description'=>'Baccalaureate diploma, Biology chemistry',
                    'startYear'=>'2006',
                    'endYear'=>'2009'
                ],
                [
                    'schoolName'=>'Scoala Generala Vievod Litovoi Targu-Jiu',
                    'description'=>'',
                    'startYear'=>'2001',
                    'endYear'=>'2006'
                ]
            ]
                    
        ]);
    }
}
