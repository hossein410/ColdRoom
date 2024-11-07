<?php

namespace App\Http\Controllers;

use App\Actions\FetchAndStoreDataAction;
use App\Actions\ShowColdRoomDataAction;
use App\Actions\StoreColdRoomDataAction;
use App\Http\Requests\StoreColdRoomRequest;
use App\Models\ColdRoomData;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\JsonResponse;

class ColdRoomController extends Controller
{

    public function fetchAndStoreData(): JsonResponse
    {
        return FetchAndStoreDataAction::run();
    }


    public function showData()
    {
        return ShowColdRoomDataAction::run();
    }


    public function store(StoreColdRoomRequest $request): JsonResponse
    {
        $validatedData = $request->validated();

        return StoreColdRoomDataAction::run($validatedData);
    }
}
