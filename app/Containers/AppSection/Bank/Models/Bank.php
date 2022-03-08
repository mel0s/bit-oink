<?php

namespace App\Containers\AppSection\Bank\Models;

use App\Ship\Parents\Models\Model;

class Bank extends Model
{
    protected $fillable = [
        'code',
        'description',
        'business_name'
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
    protected string $resourceKey = 'Bank';
}
