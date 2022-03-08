<?php

namespace App\Containers\AppSection\Company\Actions;

use App\Containers\AppSection\Company\Models\Company;
use App\Containers\AppSection\Company\Tasks\CreateCompanyTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateCompanyAction extends Action
{
    public function run(Request $request): Company
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

        return app(CreateCompanyTask::class)->run($data);
    }
}
