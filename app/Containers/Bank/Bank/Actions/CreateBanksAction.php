<?php

namespace App\Containers\Bank\Bank\Actions;

use App\Containers\Bank\Bank\Models\Bank;
use App\Containers\Bank\Bank\Tasks\CreateBanksTask;
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
