<?php

namespace App\Controller;

use App\Entity\Task;
use App\Repository\TaskRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TasksController extends AbstractController
{

    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/tasks/', name: 'tasks')]
    public function allTasks(): Response
    {
        //find all tasks - SELECT * FROM tasks
        //find() - SELECT * FROM tasks WHERE id = 1
        //findById() - SELECT * FROM tasks ORDER BY id DESC
        //findOneBy() - SELECT * FROM tasks WHERE id = 1 AND title = 'hello' ORDER BY id DESC
        //count() - SELECT COUNT(*) FROM tasks WHERE id = 1
        //getClassName() -  


  /*       $repository = $this->em->getRepository(Task::class);

        $tasks = $repository->findAll();

        //dd = die dump
        dd($tasks); */

        return $this->render('tasks/tasks.html.twig');
    }


}
