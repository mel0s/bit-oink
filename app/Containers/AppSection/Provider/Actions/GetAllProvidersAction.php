<?php

namespace App\Containers\AppSection\Provider\Actions;

use App\Containers\AppSection\Provider\Tasks\GetAllProvidersTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllProvidersAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllProvidersTask::class)->addRequestCriteria()->run();
    }
}
