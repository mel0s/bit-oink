<?php

namespace App\Containers\Company\Company\Actions;

use App\Containers\Company\Company\Models\Company;
use App\Containers\Company\Company\Tasks\UpdateCompanyTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateCompanyAction extends Action
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

        return app(UpdateCompanyTask::class)->run($request->id, $data);
    }
}
