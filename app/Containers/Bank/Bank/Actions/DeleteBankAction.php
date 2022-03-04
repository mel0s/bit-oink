<?php

namespace App\Containers\Bank\Bank\Actions;

use App\Containers\Bank\Bank\Tasks\DeleteBankTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteBankAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteBankTask::class)->run($request->id);
    }
}
