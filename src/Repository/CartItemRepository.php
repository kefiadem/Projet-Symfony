<?php

namespace App\Repository;

use App\Entity\Cart;
use App\Entity\CartItem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CartItem>
 */
class CartItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CartItem::class);
    }

    //    /**
    //     * @return CartItem[] Returns an array of CartItem objects
    //     */
        public function findByCart(Cart $cart): array
        {
        return $this->createQueryBuilder('ci')
            ->andWhere('ci.cart = :cart')
            ->setParameter('cart', $cart)
            ->orderBy('ci.id', 'ASC')
            ->getQuery()
            ->getResult();
    }

     public function findOneByCartAndProduct(Cart $cart, int $productId): ?CartItem
         {
        return $this->createQueryBuilder('ci')
            ->andWhere('ci.cart = :cart')
            ->andWhere('ci.product = :productId')
            ->setParameter('cart', $cart)
            ->setParameter('productId', $productId)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
