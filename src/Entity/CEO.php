<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class CEO extends Personne{

    public function __construct(int $id, string $nom, string $prenom, string $email, string $pwd)
    {
        parent::__construct($id, $nom,$prenom,$email,$pwd);
    }
}