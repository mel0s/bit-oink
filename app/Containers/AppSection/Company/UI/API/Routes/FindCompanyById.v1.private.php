<?php

/**
 * @apiGroup           Company
 * @apiName            findCompanyById
 *
 * @api                {GET} /v1/companies/:id Obtener empresa
 * @apiDescription     Obtiene una empresa por su id
 *
 * @apiVersion         1.0.0
 * @apiPermission      Usuario autenticado
 *
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": {
        "object": "Company",
        "id": "XbPW7awNkzl83LD6",
        "tipo": "1",
        "rfc": "sama1202191",
        "curp": "3",
        "country": "4",
        "city": "6",
        "municipality": "7",
        "state": "8",
        "suburb": "9",
        "street": "1",
        "no_ext": 2,
        "no_int": 3,
        "phone_1": 4,
        "phone_2": 5,
        "web": "6",
        "email": "7",
        "regime": "8",
        "created_at": "2022-03-02T21:16:06.000000Z",
        "updated_at": "2022-03-02T21:19:40.000000Z",
        "readable_created_at": "53 minutes ago",
        "readable_updated_at": "49 minutes ago",
        "real_id": 2
    },
    "meta": {
        "include": [],
        "custom": []
    }
}
 */

use App\Containers\AppSection\Company\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('companies/{id}', [Controller::class, 'findCompanyById'])
    ->name('api_company_find_company_by_id')
    ->middleware(['auth:api']);
