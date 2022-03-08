<?php

/**
 * @apiGroup           Bank
 * @apiName            Controller
 *
 * @api                {POST} /v1/banks/json Crear bancos masivos
 * @apiDescription     Crea registros de bancos por medio de un array de json
 *
 * @apiVersion         1.0.0
 * @apiPermission      Usuario autenticado
 *
 * @apiParam           {String}  Array de json parseado en string
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": [
        {
            "object": "Bank",
            "id": "XbPW7awNkzl83LD6",
            "code": "bn",
            "description": "Banorte",
            "business_name": "El banco fuerte de mexico",
            "created_at": "2022-03-04T22:31:49.000000Z",
            "updated_at": "2022-03-04T22:31:49.000000Z",
            "readable_created_at": "38 seconds ago",
            "readable_updated_at": "38 seconds ago",
            "real_id": 2
        },
        {
            "object": "Bank",
            "id": "aYOxlpzRMwrX3gD7",
            "code": "bn",
            "description": "Banorte",
            "business_name": "El banco fuerte de mexico",
            "created_at": "2022-03-04T22:32:27.000000Z",
            "updated_at": "2022-03-04T22:32:27.000000Z",
            "readable_created_at": "1 second ago",
            "readable_updated_at": "1 second ago",
            "real_id": 3
        }
    ],
    "meta": {
        "include": [],
        "custom": [],
        "pagination": {
            "total": 2,
            "count": 2,
            "per_page": 10,
            "current_page": 1,
            "total_pages": 1,
            "links": {}
        }
    }
}
 */

use App\Containers\AppSection\Bank\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::post('banks/json', [Controller::class, 'createBanks'])
    ->name('api_bank_controller')
    ->middleware(['auth:api']);
