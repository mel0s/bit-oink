<?php

/**
 * @apiGroup           State
 * @apiName            deleteState
 *
 * @api                {DELETE} /v1/states/:id Eliminar un estado
 * @apiDescription     Elimina un registro estadp
 *
 * @apiVersion         1.0.0
 * @apiPermission      Usuario autenticado 
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 204 OK
 */

use App\Containers\AppSection\State\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::delete('states/{id}', [Controller::class, 'deleteState'])
  ->name('api_state_delete_state')
  ->middleware(['auth:api']);
