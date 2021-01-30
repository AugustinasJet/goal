<?php

namespace App\Entity;

use App\Repository\ExercisePlanRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExercisePlanRepository::class)
 */
class ExercisePlan
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Plan::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $plan;

    /**
     * @ORM\ManyToOne(targetEntity=Exercise::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $exercise;

    /**
     * @ORM\Column(type="integer")
     */
    private $progressionStep;

    /**
     * @ORM\Column(type="integer")
     */
    private $reps;

    /**
     * @ORM\Column(type="integer")
     */
    private $sets;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $progressionName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlan(): ?Plan
    {
        return $this->plan;
    }

    public function setPlan(?Plan $plan): self
    {
        $this->plan = $plan;

        return $this;
    }

    public function getExercise(): ?Exercise
    {
        return $this->exercise;
    }

    public function setExercise(?Exercise $exercise): self
    {
        $this->exercise = $exercise;

        return $this;
    }

    public function getProgressionStep(): ?int
    {
        return $this->progressionStep;
    }

    public function setProgressionStep(int $progressionStep): self
    {
        $this->progressionStep = $progressionStep;

        return $this;
    }

    public function getReps(): ?int
    {
        return $this->reps;
    }

    public function setReps(int $reps): self
    {
        $this->reps = $reps;

        return $this;
    }

    public function getSets(): ?int
    {
        return $this->sets;
    }

    public function setSets(int $sets): self
    {
        $this->sets = $sets;

        return $this;
    }

    public function getProgressionName(): ?string
    {
        return $this->progressionName;
    }

    public function setProgressionName(string $progressionName): self
    {
        $this->progressionName = $progressionName;

        return $this;
    }
}
