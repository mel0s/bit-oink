<?php

namespace App\Containers\AppSection\Provider\Tasks;

use App\Containers\AppSection\Provider\Data\Repositories\ProviderRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateProviderTask extends Task
{
    protected ProviderRepository $repository;

    public function __construct(ProviderRepository $repository)
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
