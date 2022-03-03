<?php

/**
 * @apiGroup           Company
 * @apiName            deleteCompany
 *
 * @api                {DELETE} /v1/companies/:id Eliminar empresa
 * @apiDescription     Elimina una empresa especifica.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Usuario autenticado
 * 
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 204 No Content
 */

use App\Containers\Company\Company\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::delete('companies/{id}', [Controller::class, 'deleteCompany'])
  ->name('api_company_delete_company')
  ->middleware(['auth:api']);
