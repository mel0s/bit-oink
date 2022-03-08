<?php

/**
 * @apiGroup           Provider
 * @apiName            deleteProvider
 *
 * @api                {DELETE} /v1/providers/:id Eliminar proveedor
 * @apiDescription     Elimina un registro proveedor
 *
 * @apiVersion         1.0.0
 * @apiPermission      Usuario autenticado
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 204 No Content
 */

use App\Containers\AppSection\Provider\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::delete('providers/{id}', [Controller::class, 'deleteProvider'])
  ->name('api_provider_delete_provider')
  ->middleware(['auth:api']);
