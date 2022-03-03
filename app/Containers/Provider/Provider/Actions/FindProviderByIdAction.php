<?php

namespace App\Containers\Provider\Provider\Actions;

use App\Containers\Provider\Provider\Models\Provider;
use App\Containers\Provider\Provider\Tasks\FindProviderByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindProviderByIdAction extends Action
{
    public function run(Request $request): Provider
    {
        return app(FindProviderByIdTask::class)->run($request->id);
    }
}
