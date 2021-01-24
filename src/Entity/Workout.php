<?php

namespace App\Entity;

use App\Repository\WorkoutRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WorkoutRepository::class)
 */
class Workout
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $exercise_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $performed_at;

    /**
     * @ORM\Column(type="integer")
     */
    private $sets;

    /**
     * @ORM\Column(type="integer")
     */
    private $reps;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $note;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExerciseId(): ?int
    {
        return $this->exercise_id;
    }

    public function setExerciseId(int $exercise_id): self
    {
        $this->exercise_id = $exercise_id;

        return $this;
    }

    public function getPerformedAt(): ?\DateTimeInterface
    {
        return $this->performed_at;
    }

    public function setPerformedAt(\DateTimeInterface $performed_at): self
    {
        $this->performed_at = $performed_at;

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

    public function getReps(): ?int
    {
        return $this->reps;
    }

    public function setReps(int $reps): self
    {
        $this->reps = $reps;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }
}
