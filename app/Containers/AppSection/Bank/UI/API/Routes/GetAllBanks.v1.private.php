<?php

/**
 * @apiGroup           Bank
 * @apiName            getAllBanks
 *
 * @api                {GET} /v1/banks Obtener los bancos
 * @apiDescription     Obtiene todos los bancos
 *
 * @apiVersion         1.0.0
 * @apiPermission      Usuario autenticado
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": [
        {
            "object": "Bank",
            "id": "NxOpZowo9GmjKqdR",
            "code": "bn",
            "description": "Banorte",
            "business_name": "El banco fuerte de mexico xD",
            "created_at": "2022-03-04T22:00:19.000000Z",
            "updated_at": "2022-03-04T22:00:19.000000Z",
            "readable_created_at": "50 seconds ago",
            "readable_updated_at": "50 seconds ago",
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

use App\Containers\AppSection\Bank\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('banks', [Controller::class, 'getAllBanks'])
    ->name('api_bank_get_all_banks')
    ->middleware(['auth:api']);
