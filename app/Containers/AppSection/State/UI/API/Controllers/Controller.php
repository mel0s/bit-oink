<?php

namespace App\Containers\AppSection\State\UI\API\Controllers;

use App\Containers\AppSection\State\UI\API\Requests\CreateStateRequest;
use App\Containers\AppSection\State\UI\API\Requests\CreateStatesRequest;
use App\Containers\AppSection\State\UI\API\Requests\DeleteStateRequest;
use App\Containers\AppSection\State\UI\API\Requests\GetAllStatesRequest;
use App\Containers\AppSection\State\UI\API\Requests\FindStateByIdRequest;
use App\Containers\AppSection\State\UI\API\Requests\UpdateStateRequest;
use App\Containers\AppSection\State\UI\API\Transformers\StateTransformer;
use App\Containers\AppSection\State\Actions\CreateStateAction;
use App\Containers\AppSection\State\Actions\CreateStatesAction;
use App\Containers\AppSection\State\Actions\FindStateByIdAction;
use App\Containers\AppSection\State\Actions\GetAllStatesAction;
use App\Containers\AppSection\State\Actions\UpdateStateAction;
use App\Containers\AppSection\State\Actions\DeleteStateAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createState(CreateStateRequest $request): JsonResponse
    {
        $state = app(CreateStateAction::class)->run($request);
        return $this->created($this->transform($state, StateTransformer::class));
    }

    public function createStates(CreateStatesRequest $request): array
    {
        $country = app(CreateStatesAction::class)->run($request);
        return $this->transform($country, StateTransformer::class);
    }

    public function findStateById(FindStateByIdRequest $request): array
    {
        $state = app(FindStateByIdAction::class)->run($request);
        return $this->transform($state, StateTransformer::class);
    }

    public function getAllStates(GetAllStatesRequest $request): array
    {
        $states = app(GetAllStatesAction::class)->run($request);
        return $this->transform($states, StateTransformer::class);
    }

    public function updateState(UpdateStateRequest $request): array
    {
        $state = app(UpdateStateAction::class)->run($request);
        return $this->transform($state, StateTransformer::class);
    }

    public function deleteState(DeleteStateRequest $request): JsonResponse
    {
        app(DeleteStateAction::class)->run($request);
        return $this->noContent();
    }
}
