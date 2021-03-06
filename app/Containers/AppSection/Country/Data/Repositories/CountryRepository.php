<?php

namespace App\Containers\AppSection\Country\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class CountryRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'code' => '=',
        'description' => 'like',
        'coin' => '=',
        // ...
    ];
}
