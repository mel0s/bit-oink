<?php

namespace App\Containers\Country\Country\UI\API\Controllers;

use App\Containers\Country\Country\UI\API\Requests\CreateCountryRequest;
use App\Containers\Country\Country\UI\API\Requests\CreateCountriesRequest;
use App\Containers\Country\Country\UI\API\Requests\DeleteCountryRequest;
use App\Containers\Country\Country\UI\API\Requests\GetAllCountriesRequest;
use App\Containers\Country\Country\UI\API\Requests\FindCountryByIdRequest;
use App\Containers\Country\Country\UI\API\Requests\UpdateCountryRequest;
use App\Containers\Country\Country\UI\API\Transformers\CountryTransformer;


use App\Containers\Country\Country\Actions\CreateCountryAction;
use App\Containers\Country\Country\Actions\CreateCountriesAction;
use App\Containers\Country\Country\Actions\FindCountryByIdAction;
use App\Containers\Country\Country\Actions\GetAllCountriesAction;
use App\Containers\Country\Country\Actions\UpdateCountryAction;
use App\Containers\Country\Country\Actions\DeleteCountryAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createCountry(CreateCountryRequest $request): JsonResponse
    {
        $country = app(CreateCountryAction::class)->run($request);
        return $this->created($this->transform($country, CountryTransformer::class));
    }

    public function createCountries(CreateCountriesRequest $request): array
    {
        $country = app(CreateCountriesAction::class)->run($request);
        return $this->transform($country, CountryTransformer::class);
    }

    public function findCountryById(FindCountryByIdRequest $request): array
    {
        $country = app(FindCountryByIdAction::class)->run($request);
        return $this->transform($country, CountryTransformer::class);
    }

    public function getAllCountries(GetAllCountriesRequest $request): array
    {
        $countries = app(GetAllCountriesAction::class)->run($request);

        return $this->transform($countries, CountryTransformer::class);
    }

    public function updateCountry(UpdateCountryRequest $request): array
    {
        $country = app(UpdateCountryAction::class)->run($request);
        return $this->transform($country, CountryTransformer::class);
    }

    public function deleteCountry(DeleteCountryRequest $request): JsonResponse
    {
        app(DeleteCountryAction::class)->run($request);
        return $this->noContent();
    }
}
