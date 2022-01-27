<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name ="person",uniqueConstraints={@ORM\UniqueConstraint(name="search_idx", columns={"email"})})
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="person_type", type="string")
 * @ORM\DiscriminatorMap({"cashier" = "Cashier", "client" = "Client", "ceo"="CEO"})
 */
abstract class Person
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(name="lastname",type="string")
     */
    private string $lastname;

    /**
     * @ORM\Column(name="firstname",type="string")
     */
    private string $firstname;

    /**
     * @ORM\Column(name="email", type="string")
     */
    private string $email;

    /**
     * @ORM\Column(name="pwd", type="string")
     */
    private string $pwd;

    public function __construct(string $l, string $f, string $email, string $pwd)
    {
        $this->lastname = $l;
        $this->firstname = $f;
        $this->email = $email;
        $this->pwd = $pwd;
    }

    /**
     * Get the value of firstname
     *
     * @return int
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @param string $fistname
     *
     * @return self
     */
    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     *
     * @return int
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * Set the value of id
     *
     * @param string $lastname
     *
     * @return self
     */
    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }
    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }



    /**
     * Get the value of email
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of pwd
     *
     * @return string
     */
    public function getPwd(): string
    {
        return $this->pwd;
    }

    /**
     * Set the value of pwd
     *
     * @param string $pwd
     *
     * @return self
     */
    public function setPwd(string $pwd): self
    {
        $this->pwd = $pwd;

        return $this;
    }
}
