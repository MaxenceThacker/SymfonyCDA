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
    * @ORM\Column(name="SupplierID", type="integrer")
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
    * @ORM\Column(name="CategoryID", type="integrer")
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
    * @ORM\Column(name="QuantityPerUnit", type="string", length=20)
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

    /**
    * @ORM\Column(name="UnitsInStock", type="smallint", nullable=false)
    */
    private $unitsInStock;

    public function getUnitsInStock(): ?int
    {
        return $this->unitsInStock;
    }
    
    public function setUnitsInStock(int $unitsInStock): self
    {
        $this->unitsInStock = $unitsInStock;
        return $this;
    }

    /**
    * @ORM\Column(name="UnitsOnOrder", type="smallint", nullable=false)
    */
    private $unitsOnOrder;

    public function getUnitsOnOrder(): ?int
    {
        return $this->unitsOnOrder;
    }
    
    public function setUnitsOnOrder(int $unitsOnOrder): self
    {
        $this->unitsOnOrder = $unitsOnOrder;
        return $this;
    }

    /**
    * @ORM\Column(name="ReorderLevel", type="smallint", nullable=false)
    */
    private $reorderLevel;

    public function getReorderLevel(): ?int
    {
        return $this->reorderLevel;
    }
    
    public function setReorderLevel(int $reorderLevel): self
    {
        $this->reorderLevel = $reorderLevel;
        return $this;
    }

    /**
    * @ORM\Column(name="Discontinued", type="boolean", nullable=false)
    */
    private $discontinued;

    public function getDiscontinued(): ?bool
    {
        return $this->discontinued;
    }
    
    public function setDiscontinued(bool $discontinued): self
    {
        $this->discontinued = $discontinued;
        return $this;
    }
}
