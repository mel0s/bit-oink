<?php

namespace App\Containers\Client\Client\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class ClientRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
