<?php

namespace App\Containers\Client\Client\Actions;

use App\Containers\Client\Client\Models\Client;
use App\Containers\Client\Client\Tasks\FindClientByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindClientByIdAction extends Action
{
    public function run(Request $request): Client
    {
        return app(FindClientByIdTask::class)->run($request->id);
    }
}
