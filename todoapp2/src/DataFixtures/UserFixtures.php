<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setUsername('Pepe');
        $user->setPassword('1234');
        $user->setEmail('pepe@email.com');
        $manager->persist($user);

        $user2 = new User();
        $user2->setUsername('Paco');
        $user2->setPassword('1234');
        $user2->setEmail('paco@email.com');
        $manager->persist($user2);

        $this->addReference('user_1', $user);
        $this->addReference('user_2', $user2);

        $manager->flush();

    }
}