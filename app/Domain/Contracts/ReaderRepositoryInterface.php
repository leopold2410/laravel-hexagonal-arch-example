<?php

namespace App\Domain\Contracts;

use App\Domain\Entities\Reader;
use App\Domain\Entities\ReaderList;

interface ReaderRepositoryInterface
{
    public function all(): ReaderList;

    public function create(Reader $data): bool;

    public function update(Reader $data, $id): bool;

    /**
     * @param $id
     * @return bool
     */
    public function delete($id):bool;

    public function get($id):Reader;

    public function find($id):?Reader;
}
