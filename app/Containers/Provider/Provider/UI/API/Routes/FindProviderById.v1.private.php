<?php

/**
 * @apiGroup           Provider
 * @apiName            findProviderById
 *
 * @api                {GET} /v1/providers/:id Obtener proveedor
 * @apiDescription     Obtiene un registro proveedor
 *
 * @apiVersion         1.0.0
 * @apiPermission      Usuario autenticado
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": {
        "object": "Provider",
        "id": "NxOpZowo9GmjKqdR",
        "type": null,
        "rfc": "2",
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
        "created_at": "2022-03-03T00:58:07.000000Z",
        "updated_at": "2022-03-03T00:58:07.000000Z",
        "readable_created_at": "13 seconds ago",
        "readable_updated_at": "13 seconds ago",
        "real_id": 1
    },
    "meta": {
        "include": [],
        "custom": []
    }
}
 */

use App\Containers\Provider\Provider\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('providers/{id}', [Controller::class, 'findProviderById'])
  ->name('api_provider_find_provider_by_id')
  ->middleware(['auth:api']);
