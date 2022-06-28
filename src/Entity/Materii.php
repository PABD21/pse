<?php

namespace App\Entity;

use App\Repository\MateriiRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MateriiRepository::class)]
class Materii
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    /**
    * @ORM\materii(type="text", length=100)
    */
    private $materii;

    /**
    * @ORM\note(type="text", length=50)
    */
    private $note;
}
