<?php

namespace App\Controller;

use App\Entity\Workout;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PracticeController extends AbstractController
{
    /**
     * @Route("/practice", name="practice")
     */
    public function index(EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');


        $workouts = $em
            ->getRepository(Workout::class)
            ->findByUser($this->getUser()->getId());

        return $this->render('practice/index.html.twig', [
            'workouts' => $workouts,
        ]);
    }
}
