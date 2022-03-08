<?php

namespace App\Containers\AppSection\Bank\Actions;

use App\Containers\AppSection\Bank\Models\Bank;
use App\Containers\AppSection\Bank\Tasks\CreateBanksTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateBanksAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'dato'
        ]);

        $data =  json_decode($data['dato'], true);

        return app(CreateBanksTask::class)->run($data);
    }
}
