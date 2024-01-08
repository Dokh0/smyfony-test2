<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TasksController extends AbstractController
{
    #[Route('/tasks/', name: 'tasks')]
    public function allTasks(): Response
    {
        $tasks = [
            "task1",
            "task2",
            "task3",
        ];
        return $this->render('tasks/tasks.html.twig', array (
            'tasks' => $tasks,
            'controller_name' => 'TasksController',
        ));
    }

}
