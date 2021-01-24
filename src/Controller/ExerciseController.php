<?php

namespace App\Controller;

use App\Entity\Exercise;
use App\Form\ExerciseFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExerciseController extends AbstractController
{
    /**
     * @Route("/exercise/new", name="exercise")
     */
    public function new(EntityManagerInterface $em, Request $request): Response
    {
        $form = $this->createForm(ExerciseFormType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $exercise = (new Exercise())
                ->setName($form->getData()['name']);
            $em->persist($exercise);
            $em->flush($exercise);
        }

        return $this->render('exercise/new.html.twig', [
            'exerciseForm' => $form->createView(),
        ]);
    }
}
