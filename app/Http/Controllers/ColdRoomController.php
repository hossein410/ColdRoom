<?php

namespace App\Http\Controllers;

use App\Models\ColdRoomData;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\JsonResponse;

class ColdRoomController extends Controller
{
    /**
     * @throws GuzzleException
     */
    public function fetchAndStoreData(): JsonResponse
    {
        $client = new Client();
        $response = $client->get('Test.com/api?sensorid=1234&temp=28&humidity=86&nh3=1500');
        $data = json_decode($response->getBody(), true);

        foreach ($data as $item) {
            ColdRoomData::create([
                'temperature' => $item['temperature'],
                'humidity' => $item['humidity'],
                'co2' => $item['co2'],
            ]);
        }

        return response()->json(['message' => 'Data stored successfully']);
    }

    public function showData()
    {
        $data = ColdRoomData::all();

        return view('data', compact('data'));
    }
}
