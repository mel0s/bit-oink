<?php

namespace App\Containers\AppSection\State\Actions;

use App\Containers\AppSection\State\Models\State;
use App\Containers\AppSection\State\Tasks\FindStateByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindStateByIdAction extends Action
{
    public function run(Request $request): State
    {
        return app(FindStateByIdTask::class)->run($request->id);
    }
}
