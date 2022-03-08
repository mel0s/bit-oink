<?php

namespace App\Containers\AppSection\Bank\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class BankRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'code' => '=',
        'description' => 'like',
        'business_name' => 'like',
    ];
}
