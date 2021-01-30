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
    private $planId;

    /**
     * @ORM\ManyToOne(targetEntity=Exercise::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $exerciseId;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlanId(): ?Plan
    {
        return $this->planId;
    }

    public function setPlanId(?Plan $planId): self
    {
        $this->planId = $planId;

        return $this;
    }

    public function getExerciseId(): ?Exercise
    {
        return $this->exerciseId;
    }

    public function setExerciseId(?Exercise $exerciseId): self
    {
        $this->exerciseId = $exerciseId;

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
}
