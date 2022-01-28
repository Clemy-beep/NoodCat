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
     * @ORM\Column(type="string")
     */
    private string $name;

    /**
     * @ORM\ManyToOne(targetEntity="Cat", inversedBy="cat")
     * @ORM\JoinColumn(name="cat_id", referencedColumnName="cat_id")
     */
    private Cat $cat;


    public function __construct(string $name, Cat $cat)
    {
        $this->name = $name;
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
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

}
