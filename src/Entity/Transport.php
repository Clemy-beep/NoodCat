<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Truck;
use App\Entity\Cashier;

/**
 * @ORM\Entity
 * @ORM\Table(name="transport")
 */
class Transport
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id_transport;
    /**
     * @ORM\Column(type="string")
     */
    private string $transport_type;
    /**
     * @ORM\OneToOne(targetEntity="Cashier", mappedBy="transport")
     * @ORM\JoinColumn(name="cashier_id", referencedColumnName="id", nullable=true)
     */
    private Cashier $cashier;
    /**
     * @ORM\OneToOne(targetEntity="Truck", mappedBy="transport")
     * @ORM\JoinColumn(name="truck_id", referencedColumnName="id_truck", nullable=true)
     */
    private Truck $truck;
    /**
     * @ORM\Column(type="datetime")
     */
    private DateTime $DateTime;
    /**
     * @ORM\Column(type="integer")
     */
    private int $Cost;


    public function __construct(int $transport_type, Cashier $cashier, Truck $truck, DateTime $DateTime, int $Cost)
    {
        $this->transport_type = $transport_type;
        $this->cashier = $cashier;
        $this->truck = $truck;
        $this->DateTime = $DateTime;
        $this->Cost = $Cost;
    }
    /**
     * Get the value of id_transport
     *
     * @return int
     */
    public function getIdTransport(): int
    {
        return $this->id_transport;
    }

    /**
     * Set the value of id_transport
     *
     * @param int $id_transport
     *
     * @return self
     */
    public function setIdTransport(int $id_transport): self
    {
        $this->id_transport = $id_transport;

        return $this;
    }

     /**
     * Get the value of cashier
     *
     * @return string
     */
    public function getTransportType(): string
    {
        return $this->transport_type;
    }

    /**
     * Set the value of cashier
     *
     * @param Cashier $cashier
     *
     * @return self
     */
    public function setTransportType(string $transport_type): self
    {
        $this->transport_type = $transport_type;

        return $this;
    }

    /**
     * Get the value of cashier
     *
     * @return Cashier
     */
    public function getCashier(): Cashier
    {
        return $this->cashier;
    }

    /**
     * Set the value of cashier
     *
     * @param Cashier $cashier
     *
     * @return self
     */
    public function setCashier(Cashier $cashier): self
    {
        $this->cashier = $cashier;

        return $this;
    }
     /**
     * Get the value of cashier
     *
     * @return Cashier
     */
    public function getTruck(): Truck
    {
        return $this->truck;
    }

    /**
     * Set the value of cashier
     *
     * @param Cashier $cashier
     *
     * @return self
     */
    public function setTruck(Truck $truck): self
    {
        $this->truck = $truck;

        return $this;
    }
    /**
     * Get the value of DateTime
     *
     * @return DateTime
     */
    public function getDateTime(): DateTime
    {
        return $this->DateTime;
    }

    /**
     * Set the value of DateTime
     *
     * @param DateTime $DateTime
     *
     * @return self
     */
    public function setDateTime(DateTime $DateTime): self
    {
        $this->DateTime = $DateTime;

        return $this;
    }

    /**
     * Get the value of Cost
     *
     * @return int
     */
    public function getCost(): int
    {
        return $this->Cost;
    }

    /**
     * Set the value of Cost
     *
     * @param int $Cost
     *
     * @return self
     */
    public function setCost(int $Cost): self
    {
        $this->Cost = $Cost;

        return $this;
    }
}
