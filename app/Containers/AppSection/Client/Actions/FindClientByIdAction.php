<?php

namespace App\Containers\AppSection\Client\Actions;

use App\Containers\AppSection\Client\Models\Client;
use App\Containers\AppSection\Client\Tasks\FindClientByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindClientByIdAction extends Action
{
    public function run(Request $request): Client
    {
        return app(FindClientByIdTask::class)->run($request->id);
    }
}
