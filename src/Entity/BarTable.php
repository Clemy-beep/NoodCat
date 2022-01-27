<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity 
 * @ORM\Table(name="bar_table")
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
     * @ORM\Column(name="pad_number", type="integer")
     */
    private int $pad_number;

    /**
     * @ORM\Column(name="nombre places", type="integer")
     */
    private int $num_place;

    public function __construct(int $num_place, int $pad_number)
    {
        $this->num_place = $num_place;
        $this->pad_number = $pad_number;
    }
    /**
     * Get the value of bar_table_id
     */
    public function getBarTableId()
    {
        return $this->bar_table_id;
    }



    /**
     * Set the value of bar_table_id
     *
     * @return  self
     */
    public function setBarTableId($bar_table_id)
    {
        $this->bar_table_id = $bar_table_id;

        return $this;
    }



    /**
     * Get the value of num_place
     */
    public function getNum_place()
    {
        return $this->num_place;
    }



    /**
     * Set the value of num_place
     *
     * @return  self
     */
    public function setNum_place($num_place)
    {
        $this->num_place = $num_place;

        return $this;
    }



    /**
     * Get the value of pad_number
     */
    public function getPad_number()
    {
        return $this->pad_number;
    }



    /**
     * Set the value of pad_number
     *
     * @return  self
     */
    public function setPad_number($pad_number)
    {
        $this->pad_number = $pad_number;

        return $this;
    }
}
