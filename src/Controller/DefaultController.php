<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'author' => 'GessyBoy',
            'repository_url' => 'https://github.com/GessyBoy/Symfony-Wild',
            'controller_name' => 'DefaultController',
        ]);
    }
}
