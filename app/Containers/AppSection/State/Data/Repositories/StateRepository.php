<?php

namespace App\Containers\AppSection\State\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class StateRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'country_id' => '=',
        'code' => '=',
        'description' => 'like',
        // ...
    ];
}
