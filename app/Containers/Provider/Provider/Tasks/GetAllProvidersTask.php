<?php

namespace App\Containers\Provider\Provider\Tasks;

use App\Containers\Provider\Provider\Data\Repositories\ProviderRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllProvidersTask extends Task
{
    protected ProviderRepository $repository;

    public function __construct(ProviderRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
