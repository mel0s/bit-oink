<?php

namespace App\Containers\AppSection\Bank\Tasks;

use App\Containers\AppSection\Bank\Data\Repositories\BankRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;


class CreateBanksTask extends Task
{
    protected BankRepository $repository;

    public function __construct(BankRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            foreach ($data as &$value) {
                $this->repository->create($value);
            }
            return $this->repository->paginate();
        } catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
