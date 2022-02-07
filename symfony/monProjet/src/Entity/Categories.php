<?php

namespace App\Entity;

use App\Repository\CategoriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoriesRepository::class)
 */
class Categories
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\OneToMany(targetEntity=Produits::class, mappedBy="LibelleCategorie")
     */
    private $IdProduit;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $LibelleCategorie;

    public function __construct()
    {
        $this->IdProduit = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Produits[]
     */
    public function getIdProduit(): Collection
    {
        return $this->IdProduit;
    }

    public function addIdProduit(Produits $idProduit): self
    {
        if (!$this->IdProduit->contains($idProduit)) {
            $this->IdProduit[] = $idProduit;
            $idProduit->setLibelleCategorie($this);
        }

        return $this;
    }

    public function removeIdProduit(Produits $idProduit): self
    {
        if ($this->IdProduit->removeElement($idProduit)) {
            // set the owning side to null (unless already changed)
            if ($idProduit->getLibelleCategorie() === $this) {
                $idProduit->setLibelleCategorie(null);
            }
        }

        return $this;
    }
    
    public function getLibelleCategorie(): ?string
    {
        return $this->LibelleCategorie;
    }

    public function setLibelleCategorie(string $LibelleCategorie): self
    {
        $this->LibelleCategorie = $LibelleCategorie;

        return $this;
    } 

    public function __toString()
    {
        return $this->getLibelleCategorie();
    }

}
