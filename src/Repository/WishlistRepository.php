<?php

// src/Repository/WishlistRepository.php

namespace App\Repository;

use App\Entity\MenProducts;
use App\Entity\Product;
use App\Entity\User;
use App\Entity\Wishlist;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class WishlistRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Wishlist::class);
    }

    public function findUserWishlist(User $user)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.user = :user')
            ->setParameter('user', $user)
            ->leftJoin('w.product', 'p')
            ->addSelect('p')
            ->orderBy('w.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function isProductInWishlist(User $user, MenProducts $product): bool
    {
        $result = $this->createQueryBuilder('w')
            ->select('count(w.id)')
            ->andWhere('w.user = :user')
            ->andWhere('w.product = :product')
            ->setParameter('user', $user)
            ->setParameter('product', $product)
            ->getQuery()
            ->getSingleScalarResult();

        return $result > 0;
    }
}