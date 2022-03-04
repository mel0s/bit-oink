<?php

namespace App\Containers\Country\Country\Actions;

use App\Containers\Country\Country\Models\Country;
use App\Containers\Country\Country\Tasks\CreateCountryTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateCountryAction extends Action
{
    public function run(Request $request): Country
    {
        $data = $request->sanitizeInput([
            'code',
            'description',
            'coin'
        ]);

        var_dump($data);

        return app(CreateCountryTask::class)->run($data);
    }
}
