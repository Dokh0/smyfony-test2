<?php

namespace App\Entity;

use App\Repository\TaskRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TaskRepository::class)]
class Task
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Description = null;

    #[ORM\Column]
    private ?bool $IsCompleted = null;

    #[ORM\Column]
    private ?int $CreatedAt = null;

    #[ORM\ManyToOne(inversedBy: 'tasks')]
    private ?User $users = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function isIsCompleted(): ?bool
    {
        return $this->IsCompleted;
    }

    public function setIsCompleted(bool $IsCompleted): static
    {
        $this->IsCompleted = $IsCompleted;

        return $this;
    }

    public function getCreatedAt(): ?int
    {
        return $this->CreatedAt;
    }

    public function setCreatedAt(int $CreatedAt): static
    {
        $this->CreatedAt = $CreatedAt;

        return $this;
    }

    public function getUsers(): ?User
    {
        return $this->users;
    }

    public function setUsers(?User $users): static
    {
        $this->users = $users;

        return $this;
    }

}
