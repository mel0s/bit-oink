<?php

/**
 * @apiGroup           Client
 * @apiName            findClientById
 *
 * @api                {GET} /v1/clients/:id Obtener cliente
 * @apiDescription     Obtiene un registro cliente
 *
 * @apiVersion         1.0.0
 * @apiPermission      Usuario Autenticado
 *
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": {
        "object": "Client",
        "id": "XbPW7awNkzl83LD6",
        "type": "1",
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
        "web": 6,
        "email": "7",
        "regime": "8",
        "created_at": "2022-03-03T01:03:21.000000Z",
        "updated_at": "2022-03-03T01:03:21.000000Z",
        "readable_created_at": "20 seconds ago",
        "readable_updated_at": "20 seconds ago",
        "real_id": 2
    },
    "meta": {
        "include": [],
        "custom": []
    }
}
 */

use App\Containers\Client\Client\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('clients/{id}', [Controller::class, 'findClientById'])
  ->name('api_client_find_client_by_id')
  ->middleware(['auth:api']);
