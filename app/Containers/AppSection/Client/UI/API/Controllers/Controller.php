<?php

namespace App\Containers\AppSection\Client\UI\API\Controllers;

use App\Containers\AppSection\Client\UI\API\Requests\CreateClientRequest;
use App\Containers\AppSection\Client\UI\API\Requests\DeleteClientRequest;
use App\Containers\AppSection\Client\UI\API\Requests\GetAllClientsRequest;
use App\Containers\AppSection\Client\UI\API\Requests\FindClientByIdRequest;
use App\Containers\AppSection\Client\UI\API\Requests\UpdateClientRequest;
use App\Containers\AppSection\Client\UI\API\Transformers\ClientTransformer;
use App\Containers\AppSection\Client\Actions\CreateClientAction;
use App\Containers\AppSection\Client\Actions\FindClientByIdAction;
use App\Containers\AppSection\Client\Actions\GetAllClientsAction;
use App\Containers\AppSection\Client\Actions\UpdateClientAction;
use App\Containers\AppSection\Client\Actions\DeleteClientAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createClient(CreateClientRequest $request): JsonResponse
    {
        $client = app(CreateClientAction::class)->run($request);
        return $this->created($this->transform($client, ClientTransformer::class));
    }

    public function findClientById(FindClientByIdRequest $request): array
    {
        $client = app(FindClientByIdAction::class)->run($request);
        return $this->transform($client, ClientTransformer::class);
    }

    public function getAllClients(GetAllClientsRequest $request): array
    {
        $clients = app(GetAllClientsAction::class)->run($request);
        return $this->transform($clients, ClientTransformer::class);
    }

    public function updateClient(UpdateClientRequest $request): array
    {
        $client = app(UpdateClientAction::class)->run($request);
        return $this->transform($client, ClientTransformer::class);
    }

    public function deleteClient(DeleteClientRequest $request): JsonResponse
    {
        app(DeleteClientAction::class)->run($request);
        return $this->noContent();
    }
}
