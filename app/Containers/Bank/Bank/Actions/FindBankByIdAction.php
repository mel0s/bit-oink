<?php

namespace App\Containers\Bank\Bank\Actions;

use App\Containers\Bank\Bank\Models\Bank;
use App\Containers\Bank\Bank\Tasks\FindBankByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindBankByIdAction extends Action
{
    public function run(Request $request): Bank
    {
        return app(FindBankByIdTask::class)->run($request->id);
    }
}
