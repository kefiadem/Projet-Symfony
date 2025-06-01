<?php

namespace App\Entity;

use App\Repository\OrdersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrdersRepository::class)]
class Orders
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $total_price = null;

    #[ORM\Column(length: 255)]
    private ?string $shipping_address = null;

    #[ORM\Column(length: 255)]
    private ?string $buyerEmail = null;

    #[ORM\Column(length: 255)]
    private ?string $buyerPhone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $buyerFullName = null;

    /**
     * @var Collection<int, OrderItem>
     */
    #[ORM\OneToMany(targetEntity: OrderItem::class, mappedBy: 'OrderRef', orphanRemoval: true)]
    private Collection $orderItems;

    #[ORM\Column(length: 255)]
    private ?string $paymentMethod = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    public function __construct()
    {
        $this->orderItems = new ArrayCollection();
    }

    public const PAYMENT_METHODS = [
        'Credit Card' => 'credit_card',
        'PayPal' => 'paypal',
        'Cash on Delivery' => 'cash_on_delivery',
        'Stripe' => 'stripe',
    ];
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTotalPrice(): ?int
    {
        return $this->total_price;
    }

    public function setTotalPrice(?int $total_price): static
    {
        $this->total_price = $total_price;

        return $this;
    }

    public function getShippingAddress(): ?string
    {
        return $this->shipping_address;
    }

    public function setShippingAddress(string $shipping_address): static
    {
        $this->shipping_address = $shipping_address;

        return $this;
    }

    public function getBuyerEmail(): ?string
    {
        return $this->buyerEmail;
    }

    public function setBuyerEmail(string $buyerEmail): static
    {
        $this->buyerEmail = $buyerEmail;

        return $this;
    }

    public function getBuyerPhone(): ?string
    {
        return $this->buyerPhone;
    }

    public function setBuyerPhone(string $buyerPhone): static
    {
        $this->buyerPhone = $buyerPhone;

        return $this;
    }

    public function getBuyerFullName(): ?string
    {
        return $this->buyerFullName;
    }

    public function setBuyerFullName(?string $buyerFullName): static
    {
        $this->buyerFullName = $buyerFullName;

        return $this;
    }

    /**
     * @return Collection<int, OrderItem>
     */
    public function getOrderItems(): Collection
    {
        return $this->orderItems;
    }

    public function addOrderItem(OrderItem $orderItem): static
    {
        if (!$this->orderItems->contains($orderItem)) {
            $this->orderItems->add($orderItem);
            $orderItem->setOrderRef($this);
        }

        return $this;
    }

    public function removeOrderItem(OrderItem $orderItem): static
    {
        if ($this->orderItems->removeElement($orderItem)) {
            // set the owning side to null (unless already changed)
            if ($orderItem->getOrderRef() === $this) {
                $orderItem->setOrderRef(null);
            }
        }

        return $this;
    }

    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(string $paymentMethod): static
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }
}
