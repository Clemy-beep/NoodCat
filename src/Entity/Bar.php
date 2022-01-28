<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\BarTable;
use App\Entity\Cat;

/**
 * @ORM\Entity
 */
class Bar
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private  int $id;
    /**
     * @ORM\Column(type="string")
     */
    private string $name;
    /**
     * @ORM\OneToMany(targetEntity="Cat", mappedBy="bar")
     * @ORM\JoinColumn(name="cat_id", referencedColumnName="cat_id")
     */
    private $cats;
    /**
     * @ORM\OneToMany(targetEntity="BarTable",mappedBy="bar")
     * @ORM\JoinColumn(name="table_id", referencedColumnName="table_id")
     */
    private $tables;


    public function __construct($n, $ca, $t)
    {
        $this->name = $n;
        $this->cats = $ca;
        $this->tables = $t;
    }

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of cats
     *
     * @return Collection
     */
    public function getCats(): Collection
    {
        return $this->cats;
    }

    /**
     * Set the value of cats
     *
     * @param Collection $cats
     *
     * @return self
     */
    public function setCats(Collection $cats): self
    {
        $this->cats = $cats;

        return $this;
    }

    /**
     * Get the value of tables
     *
     * @return Collection
     */
    public function getTables(): Collection
    {
        return $this->tables;
    }

    /**
     * Set the value of tables
     *
     * @param Collection $tables
     *
     * @return self
     */
    public function setTables(Collection $tables): self
    {
        $this->tables = $tables;

        return $this;
    }
}
