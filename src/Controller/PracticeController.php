<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PracticeController extends AbstractController
{
    /**
     * @Route("/practice", name="practice")
     */
    public function index(): Response
    {
        return $this->render('practice/index.html.twig', [
            'controller_name' => 'PracticeController',
        ]);
    }
}