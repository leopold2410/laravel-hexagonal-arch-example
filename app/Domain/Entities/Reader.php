<?php

namespace App\Domain\Entities;

use App\Domain\ValueObjects\Address;

class Reader
{
    public int $id;

    public string $name;
    public Address $address;
    public string $email;

    public BookList $booksForLend;

    public function __construct(int $id, Address $address) {
        $this->id = $id;
        $this->address = $address;
        $this->booksForLend = new BookList();
    }

    public function lend(Book $book): void {
        $this->booksForLend->add($book);
    }
}
