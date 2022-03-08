<?php

namespace App\Containers\AppSection\Country\Actions;

use App\Containers\AppSection\Country\Tasks\CreateCountriesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateCountriesAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'dato'
        ]);

        $data =  json_decode($data['dato'], true);

        return app(CreateCountriesTask::class)->run($data);;
    }
}
