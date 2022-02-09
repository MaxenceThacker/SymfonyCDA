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
}
