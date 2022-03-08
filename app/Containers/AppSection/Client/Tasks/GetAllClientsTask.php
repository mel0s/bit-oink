<?php

namespace App\Containers\AppSection\Client\Tasks;

use App\Containers\AppSection\Client\Data\Repositories\ClientRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllClientsTask extends Task
{
    protected ClientRepository $repository;

    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
