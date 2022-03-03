<?php

/**
 * @apiGroup           Country
 * @apiName            deleteCountry
 *
 * @api                {DELETE} /v1/countries/:id Eliminar pais
 * @apiDescription     Elimina un registro del catalogo pais
 *
 * @apiVersion         1.0.0
 * @apiPermission      Usuario autenticado
 *
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 204 No Content
 */

use App\Containers\Country\Country\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::delete('countries/{id}', [Controller::class, 'deleteCountry'])
  ->name('api_country_delete_country')
  ->middleware(['auth:api']);
