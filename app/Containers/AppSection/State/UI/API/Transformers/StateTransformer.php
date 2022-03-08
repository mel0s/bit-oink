<?php

namespace App\Containers\AppSection\State\UI\API\Transformers;

use App\Containers\AppSection\State\Models\State;
use App\Ship\Parents\Transformers\Transformer;

class StateTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [];

    /**
     * @var  array
     */
    protected $availableIncludes = [];

    public function transform(State $state): array
    {
        $response = [
            'object' => $state->getResourceKey(),
            'id' => $state->getHashedKey(),
            'country_id' => $state->getHashedKey('country_id'),
            'code' => $state->code,
            'description' => $state->description,
            'created_at' => $state->created_at,
            'updated_at' => $state->updated_at,
            'readable_created_at' => $state->created_at->diffForHumans(),
            'readable_updated_at' => $state->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $state->id,
            // 'deleted_at' => $state->deleted_at,
        ], $response);
    }
}
