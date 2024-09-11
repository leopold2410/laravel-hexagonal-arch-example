<?php

namespace App\Domain\Services;

use App\Domain\Contracts\BookRepositoryInterface;
use App\Domain\Contracts\ReaderRepositoryInterface;
use App\Domain\Entities\Reader;
use App\Infrastructure\Repositories\BookRepository;
use App\Domain\Entities\Book;
use App\Infrastructure\Repositories\ReaderRepository;

class LibraryService
{
    private BookRepositoryInterface $bookRepository;
    private ReaderRepositoryInterface $readerRepository;

    public function __construct(BookRepository $bookRepository, ReaderRepository $readerRepository){
        $this->bookRepository = $bookRepository;
        $this->readerRepository = $readerRepository;
    }

    public function lendBookToReader(Book $book, Reader $reader): void
    {
        if ($book->isLendable()) {
            $reader->lend($book);
        }
    }

    public function findBook($id): Book
    {
        return $this->bookRepository->find($id);
    }

}
