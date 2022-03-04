<?php

namespace App\Containers\Bank\Bank\Actions;

use App\Containers\Bank\Bank\Tasks\GetAllBanksTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllBanksAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllBanksTask::class)->addRequestCriteria()->run();
    }
}
