<?php

namespace App\Containers\Country\Country\Tasks;

use App\Containers\Country\Country\Data\Repositories\CountryRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateCountriesTask extends Task
{
    protected CountryRepository $repository;

    public function __construct(CountryRepository $repository)
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
