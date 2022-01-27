<?php 
namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

class Transport {
/**
 * @ORM\Id
 * @ORM\GeneratedValue
 * @ORM\Column(type="integer")
 */
private int $id_transport;
/**
 * @ORM\Id
 * @ORM\GeneratedValue
 * @ORM\Column(type="integer")
 */
private int $id_type;
/**
 * @ORM\Id
 * @ORM\GeneratedValue
 * @ORM\Column(type="integer")
 */
private Cashier $cashier;
/**
 * @ORM\Column(type="DateTime")
 */
private DateTime $DateTime;
/**
 * @ORM\Column(type="integer")
 */
private int $Cost;



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
 * Get the value of id_type
 *
 * @return int
 */
public function getIdType(): int
{
return $this->id_type;
}

/**
 * Set the value of id_type
 *
 * @param int $id_type
 *
 * @return self
 */
public function setIdType(int $id_type): self
{
$this->id_type = $id_type;

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