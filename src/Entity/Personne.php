<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class Personne
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(name="nom",type="string", length="100")
     */
    private string $nom;

    /**
     * @ORM\Column(name="prenom",type="string", length="100")
     */
    private string $premon;

    /**
     * @ORM\Column(name="email", type="string",length="100")
     */
    private string $email;

    /**
     * @ORM\Column(name="password", type="string", lenght="100")
     */
    private string $pwd;

    public function __construct(int $id, string $nom, string $prenom, string $email, string $pwd)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->pwd = password_hash($pwd, PASSWORD_DEFAULT);
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
     * Get the value of nom
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of premon
     *
     * @return string
     */
    public function getPremon(): string
    {
        return $this->premon;
    }

    /**
     * Set the value of premon
     *
     * @param string $premon
     *
     * @return self
     */
    public function setPremon(string $premon): self
    {
        $this->premon = $premon;

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
