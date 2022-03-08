<?php

/**
 * @apiGroup           State
 * @apiName            findStateById
 *
 * @api                {GET} /v1/states/:id Obtener un estado
 * @apiDescription     Obtener un registro estado
 *
 * @apiVersion         1.0.0
 * @apiPermission      Usuario autenticado
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": {
        "object": "State",
        "id": "NxOpZowo9GmjKqdR",
        "code": "tlx",
        "description": "Tlaxcala",
        "created_at": "2022-03-08T19:16:32.000000Z",
        "updated_at": "2022-03-08T19:16:32.000000Z",
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

use App\Containers\AppSection\State\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('states/{id}', [Controller::class, 'findStateById'])
  ->name('api_state_find_state_by_id')
  ->middleware(['auth:api']);
