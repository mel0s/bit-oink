<?php

namespace App\Containers\AppSection\Provider\Actions;

use App\Containers\AppSection\Provider\Models\Provider;
use App\Containers\AppSection\Provider\Tasks\UpdateProviderTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateProviderAction extends Action
{
    public function run(Request $request): Provider
    {
        $data = $request->sanitizeInput([
            "type",
            "rfc",
            "curp",
            "country",
            "code_postal",
            "city",
            "municipality",
            "state",
            "suburb",
            "street",
            "no_ext",
            "no_int",
            "phone_1",
            "phone_2",
            "web",
            "email",
            "regime"
        ]);

        return app(UpdateProviderTask::class)->run($request->id, $data);
    }
}
