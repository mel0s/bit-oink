<?php

namespace App\Containers\AppSection\Client\UI\API\Transformers;

use App\Containers\AppSection\Client\Models\Client;
use App\Ship\Parents\Transformers\Transformer;

class ClientTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [];

    /**
     * @var  array
     */
    protected $availableIncludes = [];

    public function transform(Client $client): array
    {
        $response = [
            'object' => $client->getResourceKey(),
            'id' => $client->getHashedKey(),
            'type' => $client->type,
            'rfc' => $client->rfc,
            'curp' => $client->curp,
            'country' => $client->country,
            'city' => $client->city,
            'municipality' => $client->municipality,
            'state' => $client->state,
            'suburb' => $client->suburb,
            'street' => $client->street,
            'no_ext' => $client->no_ext,
            'no_int' => $client->no_int,
            'phone_1' => $client->phone_1,
            'phone_2' => $client->phone_2,
            'web' => $client->web,
            'email' => $client->email,
            'regime' => $client->regime,
            'created_at' => $client->created_at,
            'updated_at' => $client->updated_at,
            'readable_created_at' => $client->created_at->diffForHumans(),
            'readable_updated_at' => $client->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $client->id,
            // 'deleted_at' => $client->deleted_at,
        ], $response);
    }
}
