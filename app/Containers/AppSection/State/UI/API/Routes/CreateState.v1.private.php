<?php

/**
 * @apiGroup           State
 * @apiName            createState
 *
 * @api                {POST} /v1/states Crear un estado
 * @apiDescription     Crea un registro del tipo estado
 *
 * @apiVersion         1.0.0
 * @apiPermission      Usuario autenticado
 *
 * @apiParam           {String}  country_id - Id del pais a relacionar
 * @apiParam           {String}  code - Identificador del estado
 * @apiParam           {String}  description - Nombre del estado
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 201 Created
{
    "data": {
        "object": "State",
        "id": "NxOpZowo9GmjKqdR",
        "code": "tlx",
        "description": "Tlaxcala",
        "created_at": "2022-03-08T19:16:32.000000Z",
        "updated_at": "2022-03-08T19:16:32.000000Z",
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

use App\Containers\AppSection\State\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::post('states', [Controller::class, 'createState'])
  ->name('api_state_create_state')
  ->middleware(['auth:api']);
