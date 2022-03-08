<?php

namespace App\Containers\AppSection\Company\Models;

use App\Ship\Parents\Models\Model;

class Company extends Model
{
    protected $fillable = [
        "type",
        "rfc",
        "curp",
        "country",
        "code_postal",
        "city",
        "municipality",
        "state",
        "suburb",
        "street",
        "no_ext",
        "no_int",
        "phone_1",
        "phone_2",
        "web",
        "email",
        "regime"

    ];

    protected $attributes = [];

    protected $hidden = [];

    protected $casts = [];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Company';
}
