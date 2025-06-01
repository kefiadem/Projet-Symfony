<?php

namespace App\Entity;

use App\Repository\OrderItemRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderItemRepository::class)]
class OrderItem
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $ProductName = null;

    #[ORM\Column]
    private ?int $ProductPrice = null;

    #[ORM\ManyToOne(inversedBy: 'orderItems')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Orders $OrderRef = null;

    public function getProductName(): ?string
    {
        return $this->ProductName;
    }

    public function setProductName(string $ProductName): static
    {
        $this->ProductName = $ProductName;

        return $this;
    }

    public function getProductPrice(): ?int
    {
        return $this->ProductPrice;
    }

    public function setProductPrice(int $ProductPrice): static
    {
        $this->ProductPrice = $ProductPrice;

        return $this;
    }

    public function getOrderRef(): ?Orders
    {
        return $this->OrderRef;
    }

    public function setOrderRef(?Orders $OrderRef): static
    {
        $this->OrderRef = $OrderRef;

        return $this;
    }


}
