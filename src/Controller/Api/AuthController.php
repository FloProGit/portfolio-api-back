<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AuthController extends AbstractController
{
    #[Route('/login', name: 'api_login', methods: ['POST'])]
    public function login(): JsonResponse
    {
        // Cette méthode n'est jamais exécutée directement.
        // Symfony intercepte la requête via le firewall json_login
        // défini dans security.yaml avant d'arriver ici.
        // Elle existe uniquement pour définir la route.
        throw new \LogicException('This should never be reached.');
    }
}
