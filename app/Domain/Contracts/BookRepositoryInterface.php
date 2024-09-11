<?php

namespace App\Domain\Contracts;

use App\Domain\Entities\BookList;
use App\Domain\Entities\Book;

interface BookRepositoryInterface
{
    public function all(): BookList;

    public function create(Book $data): bool;

    public function update(Book $data, $id): bool;

    /**
     * @param $id
     * @return bool
     */
    public function delete($id):bool;

    public function get($id):Book;

    public function find($id):?Book;
}
