<?php

namespace App\Containers\AppSection\Bank\Actions;

use App\Containers\AppSection\Bank\Models\Bank;
use App\Containers\AppSection\Bank\Tasks\FindBankByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindBankByIdAction extends Action
{
    public function run(Request $request): Bank
    {
        return app(FindBankByIdTask::class)->run($request->id);
    }
}
