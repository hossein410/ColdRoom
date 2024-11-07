<?php

namespace App\Actions;

use App\Models\ColdRoomData;
use Illuminate\View\View;
use Lorisleiva\Actions\Concerns\AsAction;

class ShowColdRoomDataAction
{
    use AsAction;

    public function handle(): View
    {
        $data = ColdRoomData::all();

        return view('data', compact('data'));
    }
}
