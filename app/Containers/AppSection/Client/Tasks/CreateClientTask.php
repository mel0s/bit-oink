<?php

namespace App\Containers\AppSection\Client\Tasks;

use App\Containers\AppSection\Client\Data\Repositories\ClientRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateClientTask extends Task
{
    protected ClientRepository $repository;

    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        } catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
