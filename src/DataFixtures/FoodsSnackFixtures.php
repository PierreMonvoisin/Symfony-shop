<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\FoodsSnack;

class FoodsSnackFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++){
            $foodsSnack = new FoodsSnack();

            $foodsSnack->setTitle("Snack n°$i")
                        ->setDescription("Ceci est la description numéro $i du même article.")
                        ->setPrice(rand(4,20))
                        ->setImage("http://placehold.it/300x300");

            $manager->persist($foodsSnack);
        }
        $manager->flush();
    }
}
