<?php

namespace App\Containers\AppSection\Provider\Tasks;

use App\Containers\AppSection\Provider\Data\Repositories\ProviderRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteProviderTask extends Task
{
    protected ProviderRepository $repository;

    public function __construct(ProviderRepository $repository)
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
