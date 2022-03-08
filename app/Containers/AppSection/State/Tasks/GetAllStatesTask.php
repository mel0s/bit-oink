<?php

namespace App\Containers\AppSection\State\Tasks;

use App\Containers\AppSection\State\Data\Repositories\StateRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllStatesTask extends Task
{
    protected StateRepository $repository;

    public function __construct(StateRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
