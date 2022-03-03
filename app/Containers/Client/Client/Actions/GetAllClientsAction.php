<?php

namespace App\Containers\Client\Client\Actions;

use App\Containers\Client\Client\Tasks\GetAllClientsTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllClientsAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllClientsTask::class)->addRequestCriteria()->run();
    }
}
