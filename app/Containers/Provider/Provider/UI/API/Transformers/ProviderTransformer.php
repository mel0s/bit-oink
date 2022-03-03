<?php

namespace App\Containers\Provider\Provider\UI\API\Transformers;

use App\Containers\Provider\Provider\Models\Provider;
use App\Ship\Parents\Transformers\Transformer;

class ProviderTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [];

    /**
     * @var  array
     */
    protected $availableIncludes = [];

    public function transform(Provider $provider): array
    {
        $response = [
            'object' => $provider->getResourceKey(),
            'id' => $provider->getHashedKey(),
            'type' => $provider->type,
            'rfc' => $provider->rfc,
            'curp' => $provider->curp,
            'country' => $provider->country,
            'city' => $provider->city,
            'municipality' => $provider->municipality,
            'state' => $provider->state,
            'suburb' => $provider->suburb,
            'street' => $provider->street,
            'no_ext' => $provider->no_ext,
            'no_int' => $provider->no_int,
            'phone_1' => $provider->phone_1,
            'phone_2' => $provider->phone_2,
            'web' => $provider->web,
            'email' => $provider->email,
            'regime' => $provider->regime,
            'created_at' => $provider->created_at,
            'updated_at' => $provider->updated_at,
            'readable_created_at' => $provider->created_at->diffForHumans(),
            'readable_updated_at' => $provider->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $provider->id,
            // 'deleted_at' => $provider->deleted_at,
        ], $response);
    }
}
