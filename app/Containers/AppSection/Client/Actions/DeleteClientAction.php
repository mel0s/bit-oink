<?php

namespace App\Containers\AppSection\Client\Actions;

use App\Containers\AppSection\Client\Tasks\DeleteClientTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteClientAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteClientTask::class)->run($request->id);
    }
}
