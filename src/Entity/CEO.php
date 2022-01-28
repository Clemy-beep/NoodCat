<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Person;

/**
 * @ORM\Entity
 */
class CEO extends Person
{
    /**
     * @ORM\OneToMany(targetEntity="Bar", mappedBy="CEO")
     * @ORM\JoinColumn(name="bar_id", referencedColumnName="bar_id", nullable=true)
     */
    private $bars;

    public function __construct(string $nom, string $prenom, string $email, string $pwd)
    {
        parent::__construct($nom, $prenom, $email, $pwd);
    }

    /**
     * Get the value of bars
     */
    public function getBars()
    {
        return $this->bars;
    }

    /**
     * Set the value of bars
     */
    public function setBars($bars): self
    {
        $this->bars = $bars;

        return $this;
    }
}
