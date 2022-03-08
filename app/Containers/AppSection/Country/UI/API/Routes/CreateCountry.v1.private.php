<?php

/**
 * @apiGroup           Country
 * @apiName            createCountry
 *
 * @api                {POST} /v1/countries Crear pais
 * @apiDescription     Crea un registro pais
 *
 * @apiVersion         1.0.0
 * @apiPermission      Usuario autenticado
 *
 * @apiParam           {String}  code Abreviatura del pais
 * @apiParam           {String}  description Nombre completo del pais
 * @apiParam           {String}  [coin] Nombre de la moneda del pais
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 201 Created
{
    "data": {
        "object": "Country",
        "id": "NxOpZowo9GmjKqdR",
        "code": "mx",
        "description": "Mexico",
        "coin": "peso",
        "created_at": "2022-03-03T22:52:34.000000Z",
        "updated_at": "2022-03-03T22:52:34.000000Z",
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

use App\Containers\AppSection\Country\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::post('countries', [Controller::class, 'createCountry'])
    ->name('api_country_create_country')
    ->middleware(['auth:api']);
