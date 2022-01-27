<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity 
* 
*/
class Cat
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $cat_id;

    
    /**
     * @ORM\Id
     * @ORM\Column(name="puce", type="integer", length="15")
     */
    private int $puce;

    
    /**
     * @ORM\Id
     * @ORM\Column(name="name", type="string")
     */
    private string $name;


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
     * Get the value of puce
     */
    public function getPuce()
    {
        return $this->puce;
    }



    /**
     * Set the value of puce
     *
     * @return  self
     */
    public function setPuce($puce)
    {
        $this->puce = $puce;

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



    public function __construct(int $cat_id, string $name, int $puce)
    {
        $this->cat_id = $cat_id;
        $this->name = $name;
        $this->puce = $puce;
    }
}
