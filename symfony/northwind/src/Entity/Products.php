<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="products")
 */
class Products 
{
    /**
     * @ORM\Column(name="ProductId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    public function getId(): ?int 
    { 
        return $this->id;
    }

    /**
    * @ORM\Column(name="ProductName", type="string", length=40, nullable=false)
    */
    private $name;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
    * @ORM\Column(name="SupplierID", type="integrer", nullable=false)
    */
    private $supplierId;

    public function getSupplierId(): ?int
    {
        return $this->$supplierId;
    }
    
    public function setSupplierId(int $supplierId): self
    {
        $this->supplierId = $supplierId;
        return $this;
    }

    /**
    * @ORM\Column(name="CategoryID", type="integrer", nullable=false)
    */
    private $categoryId;

    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }
    
    public function setCategoryId(int $categoryId): self
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
    * @ORM\Column(name="QuantityPerUnit", type="string", length=20, nullable=false)
    */
    private $quantityPerUnit;

    public function getQuantityPerUnit(): ?string
    {
        return $this->quantityPerUnit;
    }
    
    public function setQuantityPerUnit(string $quantityPerUnit): self
    {
        $this->quantityPerUnit = $quantityPerUnit;
        return $this;
    }
    
    /**
    * @ORM\Column(name="UnitPrice", type="decimal", precision=10, scale=2, nullable=false)
    */
    private $unitPrice;

    public function getUnitPrice(): ?string
    {
        return $this->unitPrice;
    }
    
    public function setUnitPrice(string $unitPrice): self
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }
}
