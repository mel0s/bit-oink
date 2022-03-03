<?php

namespace App\Containers\Provider\Provider\Models;

use App\Ship\Parents\Models\Model;

class Provider extends Model
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
    protected string $resourceKey = 'Provider';
}
