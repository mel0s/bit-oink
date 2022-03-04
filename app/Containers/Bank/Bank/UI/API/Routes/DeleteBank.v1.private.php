<?php

/**
 * @apiGroup           Bank
 * @apiName            deleteBank
 *
 * @api                {DELETE} /v1/banks/:id Eliminar banco
 * @apiDescription     Eliminar un registro banco
 *
 * @apiVersion         1.0.0
 * @apiPermission      Usuario autenticado
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 204 No Content
 */

use App\Containers\Bank\Bank\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::delete('banks/{id}', [Controller::class, 'deleteBank'])
  ->name('api_bank_delete_bank')
  ->middleware(['auth:api']);
