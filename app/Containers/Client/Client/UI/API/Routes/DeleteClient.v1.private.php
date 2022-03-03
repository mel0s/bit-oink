<?php

/**
 * @apiGroup           Client
 * @apiName            deleteClient
 *
 * @api                {DELETE} /v1/clients/:id Eliminar cliente
 * @apiDescription     Eliminar un registro cliente
 *
 * @apiVersion         1.0.0
 * @apiPermission      Usuario autenticado
 *
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 204 No Content
 */

use App\Containers\Client\Client\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::delete('clients/{id}', [Controller::class, 'deleteClient'])
  ->name('api_client_delete_client')
  ->middleware(['auth:api']);
