<?php

namespace App\Actions;

use App\Models\ColdRoomData;
use Illuminate\Http\JsonResponse;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreColdRoomDataAction
{
    use AsAction;

    public function handle(array $data): JsonResponse
    {
        ColdRoomData::create($data);

        return response()->json(['message' => 'Data saved successfully!'], 201);
    }
}

