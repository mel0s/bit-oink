<?php

/**
 * @apiGroup           Bank
 * @apiName            findBankById
 *
 * @api                {GET} /v1/banks/:id Obtener un banco 
 * @apiDescription     Obtiene un registro banco
 *
 * @apiVersion         1.0.0
 * @apiPermission      Usuario autenticado 
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": {
        "object": "Bank",
        "id": "NxOpZowo9GmjKqdR",
        "code": "bn",
        "description": "Banorte",
        "business_name": "El banco fuerte de mexico xD",
        "created_at": "2022-03-04T22:00:19.000000Z",
        "updated_at": "2022-03-04T22:00:19.000000Z",
        "readable_created_at": "1 minute ago",
        "readable_updated_at": "1 minute ago",
        "real_id": 1
    },
    "meta": {
        "include": [],
        "custom": []
    }
}
 */

use App\Containers\AppSection\Bank\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('banks/{id}', [Controller::class, 'findBankById'])
    ->name('api_bank_find_bank_by_id')
    ->middleware(['auth:api']);
