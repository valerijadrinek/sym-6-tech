<?php

namespace App\DataFixtures;

use App\Entity\VinylMix;
use App\Factory\VinylMixFactory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

use function Zenstruck\Foundry\create_many;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
      
        VinylMixFactory::createMany(12);

        $manager->flush();
    }
}
