<?php

namespace App\Containers\AppSection\Bank\UI\API\Transformers;

use App\Containers\AppSection\Bank\Models\Bank;
use App\Ship\Parents\Transformers\Transformer;

class BankTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [];

    /**
     * @var  array
     */
    protected $availableIncludes = [];

    public function transform(Bank $bank): array
    {
        $response = [
            'object' => $bank->getResourceKey(),
            'id' => $bank->getHashedKey(),
            'code' => $bank->code,
            'description' => $bank->description,
            'business_name' => $bank->business_name,
            'created_at' => $bank->created_at,
            'updated_at' => $bank->updated_at,
            'readable_created_at' => $bank->created_at->diffForHumans(),
            'readable_updated_at' => $bank->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $bank->id,
            // 'deleted_at' => $bank->deleted_at,
        ], $response);
    }
}
