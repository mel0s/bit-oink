<?php

namespace App\Containers\AppSection\State\Actions;

use App\Containers\AppSection\State\Tasks\GetAllStatesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllStatesAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllStatesTask::class)->addRequestCriteria()->run();
    }
}
