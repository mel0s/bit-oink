<?php

namespace App\Containers\AppSection\Bank\Tasks;

use App\Containers\AppSection\Bank\Data\Repositories\BankRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateBankTask extends Task
{
    protected BankRepository $repository;

    public function __construct(BankRepository $repository)
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
