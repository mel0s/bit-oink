<?php

namespace App\Containers\Bank\Bank\Tasks;

use App\Containers\Bank\Bank\Data\Repositories\BankRepository;
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
