<?php

namespace App\Containers\Bank\Bank\UI\API\Controllers;

use App\Containers\Bank\Bank\UI\API\Requests\CreateBankRequest;
use App\Containers\Bank\Bank\UI\API\Requests\CreateBanksRequest;
use App\Containers\Bank\Bank\UI\API\Requests\DeleteBankRequest;
use App\Containers\Bank\Bank\UI\API\Requests\GetAllBanksRequest;
use App\Containers\Bank\Bank\UI\API\Requests\FindBankByIdRequest;
use App\Containers\Bank\Bank\UI\API\Requests\UpdateBankRequest;
use App\Containers\Bank\Bank\UI\API\Transformers\BankTransformer;
use App\Containers\Bank\Bank\Actions\CreateBankAction;
use App\Containers\Bank\Bank\Actions\CreateBanksAction;
use App\Containers\Bank\Bank\Actions\FindBankByIdAction;
use App\Containers\Bank\Bank\Actions\GetAllBanksAction;
use App\Containers\Bank\Bank\Actions\UpdateBankAction;
use App\Containers\Bank\Bank\Actions\DeleteBankAction;
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
