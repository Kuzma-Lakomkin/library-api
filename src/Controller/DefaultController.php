<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/blog', name: 'app_index')]
    public function index(): JsonResponse
    {
        return $this->json([1=> "test"]);
    }

    #[Route('/test', name: 'app_show')]
    public function test(): JsonResponse
    {
        return $this->json([2=> "second"]);
    }
}