<?php

namespace App\Model;

readonly class BookCategoryList
{
    /**
     * @param BookCategoryItem[] $books
     */
    public function __construct(private array $books)
    {
    }

    /**
     * @return BookCategoryItem[]
     */
    public function getBooks(): array
    {
        return $this->books;
    }
}