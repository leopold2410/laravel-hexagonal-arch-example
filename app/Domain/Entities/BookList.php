<?php

namespace App\Domain\Entities;

use App\Domain\Entities\Book;

final class BookList
{
    /**
     * @var Book[] books
     */
    private array $list;

    /**
     * The constructor.
     *
     * @param Book ...$book The book
     */
    public function __construct(Book ...$book)
    {
        $this->list = $book;
    }

    /**
     * Add book to list.
     *
     * @param Book $book book
     *
     * @return void
     */
    public function add(Book $book): void
    {
        $this->list[] = $book;
    }

    /**
     * Get all books.
     *
     * @return Book[] The users
     */
    public function all(): array
    {
        return $this->list;
    }
}
