<?php

namespace App\Entity;

use App\Repository\ProduitsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitsRepository::class)
 */
class Produits
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $LibelleProduit;

    /**
     * @ORM\Column(type="integer")
     */
    private $PrixProduit;

    /**
     * @ORM\ManyToOne(targetEntity=Categories::class, inversedBy="IdProduit")
     */
    private $IdCategorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleProduit(): ?string
    {
        return $this->LibelleProduit;
    }

    public function setLibelleProduit(string $LibelleProduit): self
    {
        $this->LibelleProduit = $LibelleProduit;

        return $this;
    }

    public function getPrixProduit(): ?int
    {
        return $this->PrixProduit;
    }

    public function setPrixProduit(int $PrixProduit): self
    {
        $this->PrixProduit = $PrixProduit;

        return $this;
    }

    public function getIdCategorie(): ?Categories
    {
        return $this->IdCategorie;
    }

    public function setIdCategorie(?Categories $IdCategorie): self
    {
        $this->IdCategorie = $IdCategorie;

        return $this;
    }

    public function __toString()
    {
        return $this->getLibelleProduit();
    }

}
