<?php

/**
 * @apiGroup           State
 * @apiName            updateState
 *
 * @api                {PATCH} /v1/states/:id Actualizar un estado
 * @apiDescription     Actualiza un registro estado
 *
 * @apiVersion         1.0.0
 * @apiPermission      Usuario autenticado
 *
 * @apiParam           {String}  [code]  Identificador del estado
 * @apiParam           {String}  [description]  Nombre del estado
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": {
        "object": "State",
        "id": "XbPW7awNkzl83LD6",
        "country_id": 1,
        "code": "tlx",
        "description": "Tlaxcala",
        "created_at": "2022-03-08T19:37:45.000000Z",
        "updated_at": "2022-03-08T19:42:01.000000Z",
        "readable_created_at": "4 minutes ago",
        "readable_updated_at": "1 second ago",
        "real_id": 2
    },
    "meta": {
        "include": [],
        "custom": []
    }
}
 */

use App\Containers\AppSection\State\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::patch('states/{id}/{country_id}', [Controller::class, 'updateState'])
  ->name('api_state_update_state')
  ->middleware(['auth:api']);
