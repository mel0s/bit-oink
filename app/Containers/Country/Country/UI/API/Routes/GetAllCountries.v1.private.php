<?php

/**
 * @apiGroup           Country
 * @apiName            getAllCountries
 *
 * @api                {GET} /v1/countries Obtener todos los paises
 * @apiDescription     Obtiene todos los paises
 *
 * @apiVersion         1.0.0
 * @apiPermission      Usuario autenticado
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": [
        {
            "object": "Country",
            "id": "NxOpZowo9GmjKqdR",
            "code": "mx",
            "description": "Mexico",
            "coin": "peso",
            "created_at": "2022-03-03T22:52:34.000000Z",
            "updated_at": "2022-03-03T22:52:34.000000Z",
            "readable_created_at": "1 minute ago",
            "readable_updated_at": "1 minute ago",
            "real_id": 1
        }
    ],
    "meta": {
        "include": [],
        "custom": [],
        "pagination": {
            "total": 1,
            "count": 1,
            "per_page": 10,
            "current_page": 1,
            "total_pages": 1,
            "links": {}
        }
    }
}
 */

use App\Containers\Country\Country\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('countries', [Controller::class, 'getAllCountries'])
  ->name('api_country_get_all_countries')
  ->middleware(['auth:api']);
