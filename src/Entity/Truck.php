<?php 
namespace App\Entity;

Use Doctrine\ORM\Mapping as ORM;


class Truck {
/**
 * @ORM\Id
 * @ORM\GeneratedValue
 * @ORM\Column(type="integer")
 */
    private int $id_truck;
/**
 
 * @ORM\Column(type="String")
 */
    private String $CompanyName;

    /**
     * Get the value of id_truck
     *
     * @return int
     */
    public function getIdTruck(): int
    {
        return $this->id_truck;
    }

    /**
     * Set the value of id_truck
     *
     * @param int $id_truck
     *
     * @return self
     */
    public function setIdTruck(int $id_truck): self
    {
        $this->id_truck = $id_truck;

        return $this;
    }

    /**
     * Get the value of CompanyName
     *
     * @return String
     */
    public function getCompanyName(): String
    {
        return $this->CompanyName;
    }

    /**
     * Set the value of CompanyName
     *
     * @param String $CompanyName
     *
     * @return self
     */
    public function setCompanyName(String $CompanyName): self
    {
        $this->CompanyName = $CompanyName;

        return $this;
    }
}