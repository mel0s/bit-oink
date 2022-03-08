<?php

namespace App\Containers\AppSection\Bank\Tasks;

use App\Containers\AppSection\Bank\Data\Repositories\BankRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllBanksTask extends Task
{
    protected BankRepository $repository;

    public function __construct(BankRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
