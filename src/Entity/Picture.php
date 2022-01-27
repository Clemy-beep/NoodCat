<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/** @ORM\Entity 
* 
*/
class Picture
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * 
     */
    private int $cat_id;

    /**
     * @ORM\Column(type="INTEGER")
     */
    private int $num_place;



    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }



    /**
     * Get the value of cat_id
     */
    public function getCat_id()
    {
        return $this->cat_id;
    }



    /**
     * Set the value of cat_id
     *
     * @return  self
     */
    public function setCat_id($cat_id)
    {
        $this->cat_id = $cat_id;

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




    public function __construct(int $picture_id, int $cat_id)
    {
        $this->picture_id = $picture_id;
        $this->cat_id = $cat_id;
    }
}
