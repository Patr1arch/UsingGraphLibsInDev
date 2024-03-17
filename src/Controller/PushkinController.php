<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PushkinController extends AbstractController
{
    #[Route('/pushkin', name: 'app_pushkin')]
    public function index(): Response
    {
        return $this->render('pushkin/index.html.twig', [
            'controller_name' => 'PushkinController',
        ]);
    }
}
