<?php

/**
 * @apiGroup           State
 * @apiName            getAllStates
 *
 * @api                {GET} /v1/states/all/{country_id} Obtener todos los estados de un pais
 * @apiDescription     Obtiene todos los registros estado de un pais
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
            "object": "State",
            "id": "NxOpZowo9GmjKqdR",
            "code": "tlx",
            "description": "Tlaxcala",
            "created_at": "2022-03-08T19:16:32.000000Z",
            "updated_at": "2022-03-08T19:16:32.000000Z",
            "readable_created_at": "6 seconds ago",
            "readable_updated_at": "6 seconds ago",
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

use App\Containers\AppSection\State\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('states/all/{country_id}', [Controller::class, 'getAllStates'])
    ->name('api_state_get_all_states')
    ->middleware(['auth:api']);
