<?php

namespace App\Containers\Company\Company\UI\API\Transformers;

use App\Containers\Company\Company\Models\Company;
use App\Ship\Parents\Transformers\Transformer;

class CompanyTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [];

    /**
     * @var  array
     */
    protected $availableIncludes = [];

    public function transform(Company $company): array
    {
        $response = [
            'object' => $company->getResourceKey(),
            'id' => $company->getHashedKey(),
            'type' => $company->tipo,
            'rfc' => $company->rfc,
            'curp' => $company->curp,
            'country' => $company->country,
            'city' => $company->city,
            'municipality' => $company->municipality,
            'state' => $company->state,
            'suburb' => $company->suburb,
            'street' => $company->street,
            'no_ext' => $company->no_ext,
            'no_int' => $company->no_int,
            'phone_1' => $company->phone_1,
            'phone_2' => $company->phone_2,
            'web' => $company->web,
            'email' => $company->email,
            'regime' => $company->regime,
            'created_at' => $company->created_at,
            'updated_at' => $company->updated_at,
            'readable_created_at' => $company->created_at->diffForHumans(),
            'readable_updated_at' => $company->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $company->id,
            // 'deleted_at' => $company->deleted_at,
        ], $response);
    }
}
