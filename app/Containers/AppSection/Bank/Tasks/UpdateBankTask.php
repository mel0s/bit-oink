<?php

namespace App\Containers\AppSection\Bank\Tasks;

use App\Containers\AppSection\Bank\Data\Repositories\BankRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateBankTask extends Task
{
    protected BankRepository $repository;

    public function __construct(BankRepository $repository)
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
