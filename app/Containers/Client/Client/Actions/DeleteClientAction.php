<?php

namespace App\Containers\Client\Client\Actions;

use App\Containers\Client\Client\Tasks\DeleteClientTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteClientAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteClientTask::class)->run($request->id);
    }
}
