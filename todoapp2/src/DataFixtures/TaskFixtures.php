<?php

namespace App\DataFixtures;

use App\Entity\Task;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class TaskFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $task = new Task();
        $task->setTitle('Task 1');
        $task->setDescription('Description 1');
        $task->setIsCompleted(false);
        $task->setCreatedAt(2024);

        //Add data to pivot table
        $task->setUsers($this->getReference('user_1'));
        $manager->persist($task);

        $task2 = new Task();
        $task2->setTitle('Task 2');
        $task2->setDescription('Description 2');
        $task2->setIsCompleted(false);
        $task2->setCreatedAt(2024);

        $task2->setUsers($this->getReference('user_2'));
        $manager->persist($task2);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UserFixtures::class
        ];
    }
}