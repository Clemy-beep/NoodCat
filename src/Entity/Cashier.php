<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class Cashier extends Personne{
    /**
     * @ORM\Column(name="registration",type="int", length="100")
     */
    private int $registration;

    public function __construct(int $id, string $nom, string $prenom, string $email, string $pwd, int $registration)
    {
        parent::__construct($id, $nom,$prenom,$email,$pwd);
        $this->registration = $registration;
    }

    /**
     * Get the value of registration
     *
     * @return int
     */
    public function getRegistration(): int
    {
        return $this->registration;
    }

    /**
     * Set the value of registration
     *
     * @param int $registration
     *
     * @return self
     */
    public function setRegistration(int $registration): self
    {
        $this->registration = $registration;

        return $this;
    }
}
