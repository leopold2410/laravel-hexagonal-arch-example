<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Entities\ReaderList;
use App\Domain\Contracts\ReaderRepositoryInterface;
use App\Domain\Entities\Reader;

class ReaderRepository implements ReaderRepositoryInterface
{

    public function all(): ReaderList
    {
        // TODO: Implement all() method.
    }

    public function create(Reader $data): bool
    {
        // TODO: Implement create() method.
    }

    public function update(Reader $data, $id): bool
    {
        // TODO: Implement update() method.
    }

    /**
     * @inheritDoc
     */
    public function delete($id): bool
    {
        // TODO: Implement delete() method.
    }

    public function get($id): Reader
    {
        // TODO: Implement get() method.
    }

    public function find($id): ?Reader
    {
        // TODO: Implement find() method.
    }
}
