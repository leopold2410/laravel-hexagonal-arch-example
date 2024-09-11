<?php

namespace App\Domain\Entities;

class ReaderList
{
    private array $list;

    public function __construct(Reader ...$reader)
    {
        $this->list = $reader;
    }


    public function add(Book $reader): void
    {
        $this->list[] = $reader;
    }


    public function all(): array
    {
        return $this->list;
    }
}
