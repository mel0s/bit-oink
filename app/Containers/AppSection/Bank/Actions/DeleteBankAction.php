<?php

namespace App\Containers\AppSection\Bank\Actions;

use App\Containers\AppSection\Bank\Tasks\DeleteBankTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteBankAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteBankTask::class)->run($request->id);
    }
}
