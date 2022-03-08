<?php

namespace App\Containers\AppSection\Bank\UI\API\Controllers;

use App\Containers\AppSection\Bank\UI\API\Requests\CreateBankRequest;
use App\Containers\AppSection\Bank\UI\API\Requests\CreateBanksRequest;
use App\Containers\AppSection\Bank\UI\API\Requests\DeleteBankRequest;
use App\Containers\AppSection\Bank\UI\API\Requests\GetAllBanksRequest;
use App\Containers\AppSection\Bank\UI\API\Requests\FindBankByIdRequest;
use App\Containers\AppSection\Bank\UI\API\Requests\UpdateBankRequest;
use App\Containers\AppSection\Bank\UI\API\Transformers\BankTransformer;
use App\Containers\AppSection\Bank\Actions\CreateBankAction;
use App\Containers\AppSection\Bank\Actions\CreateBanksAction;
use App\Containers\AppSection\Bank\Actions\FindBankByIdAction;
use App\Containers\AppSection\Bank\Actions\GetAllBanksAction;
use App\Containers\AppSection\Bank\Actions\UpdateBankAction;
use App\Containers\AppSection\Bank\Actions\DeleteBankAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createBank(CreateBankRequest $request): JsonResponse
    {
        $bank = app(CreateBankAction::class)->run($request);
        return $this->created($this->transform($bank, BankTransformer::class));
    }

    public function createBanks(CreateBanksRequest $request): array
    {
        $banks = app(CreateBanksAction::class)->run($request);
        return $this->transform($banks, BankTransformer::class);
    }

    public function findBankById(FindBankByIdRequest $request): array
    {
        $bank = app(FindBankByIdAction::class)->run($request);
        return $this->transform($bank, BankTransformer::class);
    }

    public function getAllBanks(GetAllBanksRequest $request): array
    {
        $banks = app(GetAllBanksAction::class)->run($request);
        return $this->transform($banks, BankTransformer::class);
    }

    public function updateBank(UpdateBankRequest $request): array
    {
        $bank = app(UpdateBankAction::class)->run($request);
        return $this->transform($bank, BankTransformer::class);
    }

    public function deleteBank(DeleteBankRequest $request): JsonResponse
    {
        app(DeleteBankAction::class)->run($request);
        return $this->noContent();
    }
}
