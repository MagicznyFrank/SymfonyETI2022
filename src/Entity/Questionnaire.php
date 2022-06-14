<?php

namespace App\Entity;

use App\Repository\QuestionnaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QuestionnaireRepository::class)
 */
class Questionnaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Question;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     *
     */
    private $AnswerA;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $Answer2;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $Answer3;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getAnswerA(): ?string
    {
        return $this->AnswerA;
    }

    public function setAnswerA(string $AnswerA): self
    {
        $this->AnswerA = $AnswerA;

        return $this;
    }

    public function getAnswer2(): ?string
    {
        return $this->Answer2;
    }

    public function setAnswer2(string $Answer2): self
    {
        $this->Answer2 = $Answer2;

        return $this;
    }

    public function getAnswer3(): ?string
    {
        return $this->Answer3;
    }

    public function setAnswer3(string $Answer3): self
    {
        $this->Answer3 = $Answer3;

        return $this;
    }
}
