<?php

namespace App\Containers\AppSection\Provider\Actions;

use App\Containers\AppSection\Provider\Tasks\DeleteProviderTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteProviderAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteProviderTask::class)->run($request->id);
    }
}
