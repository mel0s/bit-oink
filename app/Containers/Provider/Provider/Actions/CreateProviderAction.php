<?php

namespace App\Containers\Provider\Provider\Actions;

use App\Containers\Provider\Provider\Models\Provider;
use App\Containers\Provider\Provider\Tasks\CreateProviderTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateProviderAction extends Action
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

        return app(CreateProviderTask::class)->run($data);
    }
}
