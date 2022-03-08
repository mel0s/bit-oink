<?php

namespace App\Containers\AppSection\State\Actions;

use App\Containers\AppSection\State\Tasks\CreateStatesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateStatesAction extends Action
{
    public function run(Request $request)
    {

        $data = $request->sanitizeInput([
            'dato',
        ]);



        $data =  json_decode($data['dato'], true);

        return app(CreateStatesTask::class)->run($data, $request->country_id);
    }
}
