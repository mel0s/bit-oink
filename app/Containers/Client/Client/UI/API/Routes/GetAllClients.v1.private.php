<?php

/**
 * @apiGroup           Client
 * @apiName            getAllClients
 *
 * @api                {GET} /v1/clients Obtener clientes
 * @apiDescription     Obtiene todo los clientes
 *
 * @apiVersion         1.0.0
 * @apiPermission      Usuario autenticado
 *
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": [
        {
            "object": "Client",
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
            "web": 6,
            "email": "7",
            "regime": "8",
            "created_at": "2022-03-03T00:54:56.000000Z",
            "updated_at": "2022-03-03T00:54:56.000000Z",
            "readable_created_at": "7 minutes ago",
            "readable_updated_at": "7 minutes ago",
            "real_id": 1
        }
    ],
    "meta": {
        "include": [],
        "custom": [],
        "pagination": {
            "total": 1,
            "count": 1,
            "per_page": 10,
            "current_page": 1,
            "total_pages": 1,
            "links": {}
        }
    }
}
 */

use App\Containers\Client\Client\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('clients', [Controller::class, 'getAllClients'])
  ->name('api_client_get_all_clients')
  ->middleware(['auth:api']);
