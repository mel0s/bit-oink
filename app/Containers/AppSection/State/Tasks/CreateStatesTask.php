<?php

namespace App\Containers\AppSection\State\Tasks;

use App\Containers\AppSection\State\Data\Repositories\StateRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateStatesTask extends Task
{
    protected StateRepository $repository;

    public function __construct(StateRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data, $id)
    {

        try {

            foreach ($data as &$value) {
                $value["country_id"] = $id;
                $this->repository->create($value);
            }
            return $this->repository->paginate();
        } catch (Exception $exception) {
            throw new CreateResourceFailedException($exception);
        }
    }
}
