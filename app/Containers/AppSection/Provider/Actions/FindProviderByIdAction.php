<?php

namespace App\Containers\AppSection\Provider\Actions;

use App\Containers\AppSection\Provider\Models\Provider;
use App\Containers\AppSection\Provider\Tasks\FindProviderByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindProviderByIdAction extends Action
{
    public function run(Request $request): Provider
    {
        return app(FindProviderByIdTask::class)->run($request->id);
    }
}
