<?php

namespace App\Containers\AppSection\State\Actions;

use App\Containers\AppSection\State\Tasks\DeleteStateTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteStateAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteStateTask::class)->run($request->id);
    }
}
