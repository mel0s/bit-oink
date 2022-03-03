<?php

/**
 * @apiGroup           Country
 * @apiName            updateCountry
 *
 * @api                {PATCH} /v1/countries/:id Actualizar un pais
 * @apiDescription     Actualiza el registro de un pais
 *
 * @apiVersion         1.0.0
 * @apiPermission      Usuario autenticado
 *
 * @apiParam           {String}  code Abreviacion del pais
 * @apiParam           {String}  description Nombre del pais
 * @apiParam           {String}  [coin] Nombre de la moneda del pais
 * 
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": {
        "object": "Country",
        "id": "NxOpZowo9GmjKqdR",
        "code": "arg",
        "description": "Mexico",
        "coin": "peso",
        "created_at": "2022-03-03T22:52:34.000000Z",
        "updated_at": "2022-03-03T22:58:12.000000Z",
        "readable_created_at": "5 minutes ago",
        "readable_updated_at": "1 second ago",
        "real_id": 1
    },
    "meta": {
        "include": [],
        "custom": []
    }
}
 */

use App\Containers\Country\Country\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::patch('countries/{id}', [Controller::class, 'updateCountry'])
  ->name('api_country_update_country')
  ->middleware(['auth:api']);
