<?php

namespace App\Containers\AppSection\Company\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class CompanyRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        "ttpe" => 'like',
        "rfc" => '=',
        "curp" => '=',
        "country" => 'like',
        "code_postal" => '=',
        "city" => '=',
        "municipality" => 'like',
        "state" => 'like',
        "suburb" => 'like',
        "street" => 'like',
        "no_ext" => '=',
        "no_int" => '=',
        "phone_1" => '=',
        "phone_2" => '=',
        "web" => 'like',
        "email" => '=',
        "regime" => '='
    ];
}
