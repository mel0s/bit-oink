<?php

namespace App\Containers\AppSection\Bank\Actions;

use App\Containers\AppSection\Bank\Models\Bank;
use App\Containers\AppSection\Bank\Tasks\UpdateBankTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateBankAction extends Action
{
    public function run(Request $request): Bank
    {
        $data = $request->sanitizeInput([
            'code',
            'description',
            'business_name'
        ]);

        return app(UpdateBankTask::class)->run($request->id, $data);
    }
}
