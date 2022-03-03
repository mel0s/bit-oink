<?php

namespace App\Containers\Country\Country\Actions;

use App\Containers\Country\Country\Models\Country;
use App\Containers\Country\Country\Tasks\UpdateCountryTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateCountryAction extends Action
{
    public function run(Request $request): Country
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateCountryTask::class)->run($request->id, $data);
    }
}
