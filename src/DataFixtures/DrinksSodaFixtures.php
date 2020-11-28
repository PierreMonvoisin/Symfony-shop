<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\DrinksSoda;

class DrinksSodaFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++){
            $drinksSoda = new DrinksSoda();

            $drinksSoda->setTitle("Soda n°$i")
                        ->setDescription("Ceci est la description numéro $i du même article.")
                        ->setPrice(rand(3,20))
                        ->setImage("http://placehold.it/300x300");

            $manager->persist($drinksSoda);
        }
        $manager->flush();
    }
}
