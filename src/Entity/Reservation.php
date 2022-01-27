<?php

namespace App\Entity;

use App\Entity\Cat;
use App\Entity\Client;
use App\Entity\BarTable;
use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * @ORM\Entity
 * @ORM\Table(name="reservation")
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;
    /**
     * @ORM\OneToOne(targetEntity="Client")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     */
    private Client $client;
    /**
     * @ORM\OneToOne(targetEntity="Cat")
     * @ORM\JoinColumn(name="cat_id", referencedColumnName="cat_id")
     */
    private Cat $cat;
    /**
     * @ORM\OneToOne(targetEntity="BarTable")
     * @ORM\JoinColumn(name="bar_table_id", referencedColumnName="bar_table_id")
     */
    private BarTable $table;
    /**
     * @ORM\Column(type="datetime", name="reservation_datetime")
     */
    private DateTime $dateTime;

    public function __construct($c, $ca, $t, $d)
    {
        $this->client = $c;
        $this->cat = $ca;
        $this->table = $t;
        $this->dateTime = $d;
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
     * Get the value of client
     *
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * Set the value of client
     *
     * @param Client $client
     *
     * @return self
     */
    public function setClient(Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get the value of cat
     *
     * @return Cat
     */
    public function getCat(): Cat
    {
        return $this->cat;
    }

    /**
     * Set the value of cat
     *
     * @param Cat $cat
     *
     * @return self
     */
    public function setCat(Cat $cat): self
    {
        $this->cat = $cat;

        return $this;
    }

    /**
     * Get the value of table
     *
     * @return Table
     */
    public function getTable(): BarTable
    {
        return $this->table;
    }

    /**
     * Set the value of table
     *
     * @param Table $table
     *
     * @return self
     */
    public function setTable(BarTable $table): self
    {
        $this->table = $table;

        return $this;
    }

    /**
     * Get the value of dateTime
     *
     * @return DateTime
     */
    public function getDateTime(): DateTime
    {
        return $this->dateTime;
    }

    /**
     * Set the value of dateTime
     *
     * @param DateTime $dateTime
     *
     * @return self
     */
    public function setDateTime(DateTime $dateTime): self
    {
        $this->dateTime = $dateTime;

        return $this;
    }
}
