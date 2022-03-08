<?php

namespace App\Containers\AppSection\Client\Tasks;

use App\Containers\AppSection\Client\Data\Repositories\ClientRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateClientTask extends Task
{
    protected ClientRepository $repository;

    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        } catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
