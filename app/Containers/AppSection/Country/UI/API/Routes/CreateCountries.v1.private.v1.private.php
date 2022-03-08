<?php

/**
 * @apiGroup           Country
 * @apiName            Controller
 *
 * @api                {POST} /v1/countries/json Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

use App\Containers\AppSection\Country\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::post('countries/json', [Controller::class, 'createCountries'])
  ->name('api_country_')
  ->middleware(['auth:api']);
