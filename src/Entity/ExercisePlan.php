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
     * @ORM\Column(type="string", length=255)
     */
    private $progressionName;

    /**
     * @ORM\Column(type="integer")
     */
    private $setsFrom;

    /**
     * @ORM\Column(type="integer")
     */
    private $setsTo;

    /**
     * @ORM\Column(type="integer")
     */
    private $RepsFrom;

    /**
     * @ORM\Column(type="integer")
     */
    private $RepsTo;

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

    public function getProgressionName(): ?string
    {
        return $this->progressionName;
    }

    public function setProgressionName(string $progressionName): self
    {
        $this->progressionName = $progressionName;

        return $this;
    }

    public function getSetsFrom(): ?int
    {
        return $this->setsFrom;
    }

    public function setSetsFrom(int $setsFrom): self
    {
        $this->setsFrom = $setsFrom;

        return $this;
    }

    public function getSetsTo(): ?int
    {
        return $this->setsTo;
    }

    public function setSetsTo(int $setsTo): self
    {
        $this->setsTo = $setsTo;

        return $this;
    }

    public function getRepsFrom(): ?int
    {
        return $this->RepsFrom;
    }

    public function setRepsFrom(int $RepsFrom): self
    {
        $this->RepsFrom = $RepsFrom;

        return $this;
    }

    public function getRepsTo(): ?int
    {
        return $this->RepsTo;
    }

    public function setRepsTo(int $RepsTo): self
    {
        $this->RepsTo = $RepsTo;

        return $this;
    }
}
