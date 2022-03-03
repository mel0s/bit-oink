<?php

namespace App\Containers\Provider\Provider\Actions;

use App\Containers\Provider\Provider\Tasks\DeleteProviderTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteProviderAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteProviderTask::class)->run($request->id);
    }
}
