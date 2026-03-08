<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class Api/ApiAuthController extends AbstractController
{
    #[Route('/api/api/auth', name: 'app_api_api_auth')]
    public function index(): Response
    {
        return $this->render('api/api_auth/index.html.twig', [
            'controller_name' => 'Api/ApiAuthController',
        ]);
    }
}
