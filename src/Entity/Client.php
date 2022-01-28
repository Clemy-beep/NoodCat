<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Person;

/**
 * @ORM\Entity
 */
class Client extends Person{
    
    public function __construct(string $nom, string $prenom, string $email, string $pwd)
    {
        parent::__construct($nom,$prenom,$email,$pwd);
    }
}