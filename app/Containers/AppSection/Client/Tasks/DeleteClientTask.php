<?php

namespace App\Containers\AppSection\Client\Tasks;

use App\Containers\AppSection\Client\Data\Repositories\ClientRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteClientTask extends Task
{
    protected ClientRepository $repository;

    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id): ?int
    {
        try {
            return $this->repository->delete($id);
        } catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
