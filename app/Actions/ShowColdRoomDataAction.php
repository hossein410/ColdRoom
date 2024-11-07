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
        $latestData = ColdRoomData::latest('created_at')
        ->groupBy('sensorId')
        ->get();
        return view('show', compact('latestData'));
    }
}
