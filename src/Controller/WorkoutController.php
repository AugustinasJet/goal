<?php

namespace App\Controller;

use App\Entity\Workout;
use App\Form\WorkoutFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WorkoutController extends AbstractController
{
    /**
     * @Route("/workout", name="workout")
     */
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $form = $this->createForm(WorkoutFormType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $workout = $data->setPerformedAt(new \DateTime());

            $em->persist($workout);
            $em->flush();
        }
        return $this->render('workout/index.html.twig', [
            'workoutForm' => $form->createView(),
        ]);
    }
}
