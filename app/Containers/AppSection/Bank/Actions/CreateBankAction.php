<?php

namespace App\Containers\AppSection\Bank\Actions;

use App\Containers\AppSection\Bank\Models\Bank;
use App\Containers\AppSection\Bank\Tasks\CreateBankTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateBankAction extends Action
{
    public function run(Request $request): Bank
    {
        $data = $request->sanitizeInput([
            'code',
            'description',
            'business_name'
        ]);

        return app(CreateBankTask::class)->run($data);
    }
}
