<?php

namespace App\Containers\AppSection\Client\Tasks;

use App\Containers\AppSection\Client\Data\Repositories\ClientRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindClientByIdTask extends Task
{
    protected ClientRepository $repository;

    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        } catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
