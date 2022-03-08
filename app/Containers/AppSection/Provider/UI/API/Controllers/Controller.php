<?php

namespace App\Containers\AppSection\Provider\UI\API\Controllers;

use App\Containers\AppSection\Provider\UI\API\Requests\CreateProviderRequest;
use App\Containers\AppSection\Provider\UI\API\Requests\DeleteProviderRequest;
use App\Containers\AppSection\Provider\UI\API\Requests\GetAllProvidersRequest;
use App\Containers\AppSection\Provider\UI\API\Requests\FindProviderByIdRequest;
use App\Containers\AppSection\Provider\UI\API\Requests\UpdateProviderRequest;
use App\Containers\AppSection\Provider\UI\API\Transformers\ProviderTransformer;
use App\Containers\AppSection\Provider\Actions\CreateProviderAction;
use App\Containers\AppSection\Provider\Actions\FindProviderByIdAction;
use App\Containers\AppSection\Provider\Actions\GetAllProvidersAction;
use App\Containers\AppSection\Provider\Actions\UpdateProviderAction;
use App\Containers\AppSection\Provider\Actions\DeleteProviderAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createProvider(CreateProviderRequest $request): JsonResponse
    {
        $provider = app(CreateProviderAction::class)->run($request);
        return $this->created($this->transform($provider, ProviderTransformer::class));
    }

    public function findProviderById(FindProviderByIdRequest $request): array
    {
        $provider = app(FindProviderByIdAction::class)->run($request);
        return $this->transform($provider, ProviderTransformer::class);
    }

    public function getAllProviders(GetAllProvidersRequest $request): array
    {
        $providers = app(GetAllProvidersAction::class)->run($request);
        return $this->transform($providers, ProviderTransformer::class);
    }

    public function updateProvider(UpdateProviderRequest $request): array
    {
        $provider = app(UpdateProviderAction::class)->run($request);
        return $this->transform($provider, ProviderTransformer::class);
    }

    public function deleteProvider(DeleteProviderRequest $request): JsonResponse
    {
        app(DeleteProviderAction::class)->run($request);
        return $this->noContent();
    }
}
