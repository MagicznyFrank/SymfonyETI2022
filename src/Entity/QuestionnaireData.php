<?php

namespace App\Entity;

use App\Repository\QuestionnaireDataRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QuestionnaireDataRepository::class)
 */
class QuestionnaireData
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Username;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Question;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Answer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->Username;
    }

    public function setUsername(string $Username): self
    {
        $this->Username = $Username;

        return $this;
    }

    public function getQuestion(): ?string
    {
        return $this->Question;
    }

    public function setQuestion(string $Question): self
    {
        $this->Question = $Question;

        return $this;
    }

    public function getAnswer(): ?string
    {
        return $this->Answer;
    }

    public function setAnswer(string $Answer): self
    {
        $this->Answer = $Answer;

        return $this;
    }
}
