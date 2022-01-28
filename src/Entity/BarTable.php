<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class BarTable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $bar_table_id;
     /**
     * @ORM\Column(type="integer")
     */
    private int $pad_id;
     /**
     * @ORM\Column(type="integer")
     */
    private int $num_places;

    public function __construct(int $p, int $n)
    {
        $this->pad_id = $p;
        $this->num_places = $n;
    }

    /**
     * Get the value of bar_table_id
     *
     * @return int
     */
    public function getBarTableId(): int
    {
        return $this->bar_table_id;
    }

    /**
     * Set the value of bar_table_id
     *
     * @param int $bar_table_id
     *
     * @return self
     */
    public function setBarTableId(int $bar_table_id): self
    {
        $this->bar_table_id = $bar_table_id;

        return $this;
    }

    /**
     * Get the value of pad_id
     *
     * @return int
     */
    public function getPadId(): int
    {
        return $this->pad_id;
    }

    /**
     * Set the value of pad_id
     *
     * @param int $pad_id
     *
     * @return self
     */
    public function setPadId(int $pad_id): self
    {
        $this->pad_id = $pad_id;

        return $this;
    }

    /**
     * Get the value of num_places
     *
     * @return int
     */
    public function getNumPlaces(): int
    {
        return $this->num_places;
    }

    /**
     * Set the value of num_places
     *
     * @param int $num_places
     *
     * @return self
     */
    public function setNumPlaces(int $num_places): self
    {
        $this->num_places = $num_places;

        return $this;
    }
}
