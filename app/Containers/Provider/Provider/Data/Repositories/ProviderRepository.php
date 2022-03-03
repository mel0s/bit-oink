<?php

namespace App\Containers\Provider\Provider\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class ProviderRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
