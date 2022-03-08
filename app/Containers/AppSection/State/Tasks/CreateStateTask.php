<?php

namespace App\Containers\AppSection\State\Tasks;

use App\Containers\AppSection\State\Data\Repositories\StateRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateStateTask extends Task
{
    protected StateRepository $repository;

    public function __construct(StateRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
