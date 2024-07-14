<?php

namespace App\Controller;

use App\Service\BookCategoryService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

class BookCategoryController extends AbstractController
{
    public function __construct(private readonly BookCategoryService $bookCategoryService,
                                private readonly SerializerInterface $serializer)
    {
    }

    #[Route('/book/category', name: 'app_book_category')]
    public function index(): JsonResponse
    {
        $categories = $this->bookCategoryService->getBookCategories();
        return $this->json($categories);
    }
}
