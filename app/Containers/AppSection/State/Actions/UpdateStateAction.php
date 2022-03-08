<?php

namespace App\Containers\AppSection\State\Actions;

use App\Containers\AppSection\State\Models\State;
use App\Containers\AppSection\State\Tasks\UpdateStateTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateStateAction extends Action
{
    public function run(Request $request): State
    {
        $data = $request->sanitizeInput([
            'country_id',
            'code',
            'description'
        ]);

        return app(UpdateStateTask::class)->run($request->id, $data);
    }
}
