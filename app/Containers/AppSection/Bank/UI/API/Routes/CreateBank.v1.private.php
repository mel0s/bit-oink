<?php

/**
 * @apiGroup           Bank
 * @apiName            createBank
 *
 * @api                {POST} /v1/banks Crear banco
 * @apiDescription     Crea un registro de banco
 *
 * @apiVersion         1.0.0
 * @apiPermission      Usuario autenticado
 *
 * @apiParam           {String}  code Codigo de banco
 * @apiParam           {String}  description Nombre del banco
 * @apiParam           {String}  business_name Razon social del banco
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 201 Created
{
    "data": {
        "object": "Bank",
        "id": "NxOpZowo9GmjKqdR",
        "code": "bn",
        "description": "Banorte",
        "business_name": "El banco fuerte de mexico xD",
        "created_at": "2022-03-04T22:00:19.000000Z",
        "updated_at": "2022-03-04T22:00:19.000000Z",
        "readable_created_at": "1 second ago",
        "readable_updated_at": "1 second ago",
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

Route::post('banks', [Controller::class, 'createBank'])
    ->name('api_bank_create_bank')
    ->middleware(['auth:api']);
