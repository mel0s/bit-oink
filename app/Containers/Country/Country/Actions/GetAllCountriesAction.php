<?php

namespace App\Containers\Country\Country\Actions;

use App\Containers\Country\Country\Tasks\GetAllCountriesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllCountriesAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllCountriesTask::class)->addRequestCriteria()->run();
    }
}
