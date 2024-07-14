<?php

namespace App\Service;

use App\Entity\BookCategory;
use App\Model\BookCategoryItem;
use App\Model\BookCategoryList;
use App\Repository\BookCategoryRepository;

class BookCategoryService
{
    public function __construct(private BookCategoryRepository $bookCategoryRepository)
    {
    }

    /**
     * @return BookCategoryList
     */
    public function getBookCategories(): BookCategoryList
    {
        $items = $this->bookCategoryRepository->findBy([], ['title' => 'ASC']);
        $categories = array_map(
            fn (BookCategory $bookCategory) => new BookCategoryItem(
                $bookCategory->getId(), $bookCategory->getTitle(), $bookCategory->getSlug()
            ), $items
        );

        return new BookCategoryList($categories);
    }
}