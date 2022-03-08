<?php

namespace App\Containers\AppSection\State\Models;

use App\Ship\Parents\Models\Model;

class State extends Model
{
    protected $fillable = [
        'country_id',
        'code',
        'description'
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
    protected string $resourceKey = 'State';
}
