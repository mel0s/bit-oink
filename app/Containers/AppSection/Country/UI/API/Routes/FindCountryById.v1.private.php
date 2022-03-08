<?php

/**
 * @apiGroup           Country
 * @apiName            findCountryById
 *
 * @api                {GET} /v1/countries/:id Obtener un pais
 * @apiDescription     Obtiene el registro de un pais
 *
 * @apiVersion         1.0.0
 * @apiPermission      Usuario autenticado 
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": {
        "object": "Country",
        "id": "NxOpZowo9GmjKqdR",
        "code": "mx",
        "description": "Mexico",
        "coin": "peso",
        "created_at": "2022-03-03T22:52:34.000000Z",
        "updated_at": "2022-03-03T22:52:34.000000Z",
        "readable_created_at": "57 seconds ago",
        "readable_updated_at": "57 seconds ago",
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

Route::get('countries/{id}', [Controller::class, 'findCountryById'])
    ->name('api_country_find_country_by_id')
    ->middleware(['auth:api']);
