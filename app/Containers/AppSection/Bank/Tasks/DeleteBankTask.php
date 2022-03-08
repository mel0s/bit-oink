<?php

namespace App\Containers\AppSection\Bank\Tasks;

use App\Containers\AppSection\Bank\Data\Repositories\BankRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteBankTask extends Task
{
    protected BankRepository $repository;

    public function __construct(BankRepository $repository)
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
