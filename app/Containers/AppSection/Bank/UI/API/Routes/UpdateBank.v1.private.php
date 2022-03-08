<?php

/**
 * @apiGroup           Bank
 * @apiName            updateBank
 *
 * @api                {PATCH} /v1/banks/:id Actualizar banco
 * @apiDescription     Actualizar registros bancos
 *
 * @apiVersion         1.0.0
 * @apiPermission      Usuario autenticado
 *
 * @apiParam           {String}  [code] Codigo de banco
 * @apiParam           {String}  [description] Nombre del banco
 * @apiParam           {String}  [business_name] Razon social del banco
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": {
        "object": "Bank",
        "id": "NxOpZowo9GmjKqdR",
        "code": "bbva",
        "description": "Banorte",
        "business_name": "El banco fuerte de mexico xD",
        "created_at": "2022-03-04T22:00:19.000000Z",
        "updated_at": "2022-03-04T22:03:01.000000Z",
        "readable_created_at": "2 minutes ago",
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

Route::patch('banks/{id}', [Controller::class, 'updateBank'])
    ->name('api_bank_update_bank')
    ->middleware(['auth:api']);
