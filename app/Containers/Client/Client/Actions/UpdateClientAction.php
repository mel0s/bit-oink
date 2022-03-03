<?php

namespace App\Containers\Client\Client\Actions;

use App\Containers\Client\Client\Models\Client;
use App\Containers\Client\Client\Tasks\UpdateClientTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateClientAction extends Action
{
    public function run(Request $request): Client
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

        return app(UpdateClientTask::class)->run($request->id, $data);
    }
}
