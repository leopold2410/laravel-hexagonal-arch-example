<?php

namespace App\Domain\Entities;
use App\Domain\ValueObjects\Money;

final class Book {
    public int $id;
    public string $title;
    public string $author;
    public string $publisher;
    public string $year;
    public string $isbn;
    public bool $isBorrowed;
    public Money $price;

    public function __construct(int $id, string $title, string $author, string $publisher, string $year, string $isbn, bool $isBorrowed, Money $price)
    {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->year = $year;
        $this->isbn = $isbn;
        $this->isBorrowed = $isBorrowed;
        $this->price = $price;
    }

    public function isLendable(): bool
    {
        return !$this->isBorrowed;
    }

}
