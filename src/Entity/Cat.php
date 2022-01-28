<?php

namespace App\Entity;
use App\Entity\Bar;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\Column(name="puce", type="integer")
     */
    private int $puce;


    /**
     * @ORM\Column(name="name", type="string")
     */
    private string $name;


    /**
     * @ORM\OneToMany(targetEntity="Picture", mappedBy="Cat")
     * @ORM\JoinColumn(name="picture_id", referencedColumnName="picture_id")
     */
    private Collection $pictures;

    /**
     * @ORM\ManyToOne(targetEntity="Bar", inversedBy="Cat")
     * @ORM\JoinColumn(name="bar_id", referencedColumnName="id")
     */
    private Bar $bar;
     /**
     * @ORM\Column(name="status", type="string")
     */
    private string $status;

    public function __construct(string $name, int $puce, bar $bar, string $s)
    {
        $this->name = $name;
        $this->puce = $puce;
        $this->bar = $bar;
        $this->status = $s;
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
    public function setCat_id(string $cat_id)
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
    public function setPuce(int $puce)
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
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of pictures
     */
    public function getPictures()
    {
        return $this->pictures;
    }



    /**
     * Set the value of pictures
     *
     * @return  self
     */
    public function setPictures(array $pictures)
    {
        $this->pictures = $pictures;

        return $this;
    }

    /**
     * Get the value of bar
     *
     * @return Bar
     */
    public function getBar(): Bar
    {
        return $this->bar;
    }

    /**
     * Set the value of bar
     *
     * @param Bar $bar
     *
     * @return self
     */
    public function setBar(Bar $bar): self
    {
        $this->bar = $bar;
        return $this;
    }

    /**
     * Get the value of status
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
