<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Contracts\BookRepositoryInterface;
use App\Domain\Entities\Book;
use App\Domain\Entities\BookList;
use App\Models\Infrastructure\BookDTO;

class BookRepository implements BookRepositoryInterface
{

    public function all(): BookList
    {
        $bookDTOs = BookDTO::all();
        return $this->createBookListFromDTOs($bookDTOs);
    }

    public function create(Book $data): bool
    {
        $bookDTO = $this->createBookDTOFromBook($data);
        $bookDTO->save();
        return true;
    }

    public function update(Book $data, $id): bool
    {
        // TODO: Implement update() method.
        $bookDTO = BookDTO::query()->find($id);
        $bookDTO->fill($this->getBookAsArray($data));
        $bookDTO->save();
        return true;
    }

    /**
     * @inheritDoc
     */
    public function delete($id): bool
    {
        // TODO: Implement delete() method.
        $bookDTO = BookDTO::query()->find($id);
        $bookDTO->delete();
        return true;
    }

    public function get($id): Book
    {
        // TODO: Implement find() method.
        $bookDTO = BookDTO::query()->findOrFail($id)->first();
        return $this->createBookFromBookDTO($bookDTO);
    }

    private function createBookListFromDTOs(\Illuminate\Database\Eloquent\Collection $bookDTOs) : BookList
    {

        $bookList = new BookList();
        foreach ($bookDTOs as $bookDTO) {
            $book = $this->createBookFromBookDTO($bookDTO);
            $bookList->add($book);
        }
        return $bookList;
    }

    private function createBookDTOFromBook(Book $data):BookDTO
    {
        return new BookDTO($this->getBookAsArray($data));
    }

    private function createBookFromBookDTO(BookDTO $bookDTO) : Book
    {
        return new Book($bookDTO->id, $bookDTO->title,$bookDTO->author, $bookDTO->publisher, $bookDTO->publisher_year, $bookDTO->isbn, $bookDTO->isBorrowed);
    }

    public function find($id): ?Book
    {
        $bookDTO = BookDTO::query()->find($id)->first();
        if (empty($bookDTO)) {
            return null;
        }
        return $this->createBookFromBookDTO($bookDTO);
    }

    private function getBookAsArray(Book $book): array
    {
        return [
            'id' => $book->id,
            'title' => $book->title,
            'author' => $book->author,
            'publisher' => $book->publisher,
            'publisher_year' => $book->year,
            'isbn' => $book->isbn,
            'is_borrowed' => $book->isBorrowed,
        ];
    }
}
