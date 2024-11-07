<?php

namespace App\Actions;

use App\Models\ColdRoomData;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;

class FetchAndStoreDataAction
{
    /**
     * @throws GuzzleException
     */

    use AsAction;

    public function handle(): JsonResponse
    {
        $client = new Client();

        try {
            $response = $client->get('YOUR_API_URL_HERE');

            if ($response->getStatusCode() !== 200) {
                return response()->json(['error' => 'Failed to fetch data from API'], 500);
            }

            $data = json_decode($response->getBody(), true);

            DB::transaction(function () use ($data) {
                foreach ($data as $item) {
                    ColdRoomData::updateOrCreate(
                        ['SensorId' => $item['id']],
                        [
                            'temp' => $item['temp'],
                            'humidity' => $item['humidity'],
                            'co2' => $item['co2'],
                        ]
                    );
                }
            });

            return response()->json(['message' => 'Data stored successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred: ' . $e->getMessage()], 500);
        }
    }
}
