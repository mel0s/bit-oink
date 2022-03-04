<?php

namespace App\Containers\Bank\Bank\Actions;

use App\Containers\Bank\Bank\Models\Bank;
use App\Containers\Bank\Bank\Tasks\CreateBankTask;
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
