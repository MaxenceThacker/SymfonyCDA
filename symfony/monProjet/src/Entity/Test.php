<?php

namespace App\Entity;

use App\Repository\TestRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TestRepository::class)
 */
class Test
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $DecimalTest;

    /**
     * @ORM\Column(type="smallint")
     */
    private $SmallIntTest;

    /**
     * @ORM\Column(type="boolean")
     */
    private $BitTest;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDecimalTest(): ?string
    {
        return $this->DecimalTest;
    }

    public function setDecimalTest(string $DecimalTest): self
    {
        $this->DecimalTest = $DecimalTest;

        return $this;
    }

    public function getSmallIntTest(): ?int
    {
        return $this->SmallIntTest;
    }

    public function setSmallIntTest(int $SmallIntTest): self
    {
        $this->SmallIntTest = $SmallIntTest;

        return $this;
    }

    public function getBitTest(): ?bool
    {
        return $this->BitTest;
    }

    public function setBitTest(bool $BitTest): self
    {
        $this->BitTest = $BitTest;

        return $this;
    }
}
