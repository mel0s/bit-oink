<?php

/**
 * @apiGroup           Provider
 * @apiName            updateProvider
 *
 * @api                {PATCH} /v1/providers/:id Actualizar proveedor
 * @apiDescription     Actualiza un registro proveedor
 *
 * @apiVersion         1.0.0
 * @apiPermission      Usuario autenticado
 *
 * @apiParam           {String}  [type]
 * @apiParam           {String}  [rfc]
 * @apiParam           {String}  [curp]
 * @apiParam           {String}  [country]
 * @apiParam           {String}  [code_postal]
 * @apiParam           {String}  [city]
 * @apiParam           {String}  [municipality]
 * @apiParam           {String}  [state]
 * @apiParam           {String}  [suburb]
 * @apiParam           {String}  [street]
 * @apiParam           {String}  [no_ext]
 * @apiParam           {String}  [no_int]
 * @apiParam           {String}  [phone_1]
 * @apiParam           {String}  [phone_2]
 * @apiParam           {String}  [web]
 * @apiParam           {String}  [email]
 * @apiParam           {String}  [regime]
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": {
        "object": "Provider",
        "id": "XbPW7awNkzl83LD6",
        "type": "1",
        "rfc": "sama1202191",
        "curp": "3",
        "country": "4",
        "city": "6",
        "municipality": "7",
        "state": "8",
        "suburb": "9",
        "street": "1",
        "no_ext": 2,
        "no_int": 3,
        "phone_1": 4,
        "phone_2": 5,
        "web": "6",
        "email": "7",
        "regime": "8",
        "created_at": "2022-03-03T01:02:13.000000Z",
        "updated_at": "2022-03-03T01:02:22.000000Z",
        "readable_created_at": "9 seconds ago",
        "readable_updated_at": "1 second ago",
        "real_id": 2
    },
    "meta": {
        "include": [],
        "custom": []
    }
}
 */

use App\Containers\AppSection\Provider\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::patch('providers/{id}', [Controller::class, 'updateProvider'])
    ->name('api_provider_update_provider')
    ->middleware(['auth:api']);
