<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity 
* 
*/
class Table
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $table_id;

    /**
     * @ORM\
     * @ORM\Column(name="pad_number", type="integer", length="15")
     */
    private int $pad_number;

    /**
     * @ORM\
     * @ORM\Column(name="nombre places", type="integer", length="1")
     */
    private int $num_place;


    /**
     * Get the value of table_id
     */
    public function getTable_id()
    {
        return $this->table_id;
    }



    /**
     * Set the value of table_id
     *
     * @return  self
     */
    public function setTable_id($table_id)
    {
        $this->table_id = $table_id;

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



    public function __construct(int $table_id, int $num_place, int $pad_number)
    {
        $this->table_id = $table_id;
        $this->num_place = $num_place;
        $this->pad_number = $pad_number;
    }

}
