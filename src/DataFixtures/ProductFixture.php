<?php

namespace App\DataFixtures;

use App\Entity\MenProducts;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i <= 14; $i++) {
            $product = new MenProducts();
            $product->setName("Product $i");
            $product->setCategory("forhim");
            $product->setPrice(mt_rand(10, 100));
            $product->setDescription("This is a description for product $i. it's good for you.");
            $product->setTags(['bestseller,  new, popular']);
            $product->setImage('assets/images/product-thumb-' . $i . '.jpg');
            $product->setStock(3);
            $product->setReleaseDate(new \DateTime('2023-10-01'));
            $product->setReview(mt_rand(1, 5)); // Random review rating between 1 and 5
            //$product->setId($i); // Set the ID to match the loop index

            $manager->persist($product);
        }
        $manager->flush();
    }
}
