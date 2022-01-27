<?php

namespace App\Entity;

use App\Entity\Cat;
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
    private int $picture_id;

    /**
     * @ORM\OneToOne(targetEntity="Cat", mappedBy="picture")
     */
    private Cat $cat;

    /**
     * @ORM\Column(type="integer")
     */
    private int $num_place;


    public function __construct(Cat $cat)
    {
        $this->cat = $cat;
    }
    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->picture_id;
    }



    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($picture_id)
    {
        $this->picture_id = $picture_id;

        return $this;
    }



    /**
     * Get the value of cat_id
     */
    public function getCat()
    {
        return $this->cat;
    }



    /**
     * Set the value of cat_id
     *
     * @return  self
     */
    public function setCat(Cat $cat)
    {
        $this->cat = $cat;

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
}
