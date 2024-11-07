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
        // بررسی وجود sensorId در داده‌ها
        if (!array_key_exists('sensorId', $data)) {
            return response()->json(['error' => 'sensorId key is missing in data.'], 400);
        }

        // پیدا کردن رکورد موجود با استفاده از sensorId
        $existingRecord = ColdRoomData::where('sensorId', $data['sensorId'])->first();

        if ($existingRecord) {
            // بررسی اینکه آیا هر یک از مقادیر تغییر کرده‌اند
            $isUpdated = false;

            if ($existingRecord->title !== $data['title']) {
                $isUpdated = true;
            }
            if ($existingRecord->temp !== $data['temp']) {
                $isUpdated = true;
            }
            if ($existingRecord->humidity !== $data['humidity']) {
                $isUpdated = true;
            }
            if ($existingRecord->co2 !== $data['co2']) {
                $isUpdated = true;
            }

            // اگر داده‌ها تغییر کرده باشند، یک رکورد جدید اضافه می‌شود
            if ($isUpdated) {
                ColdRoomData::create([
                    'sensorId' => $data['sensorId'],
                    'title' => $data['title'],
                    'temp' => $data['temp'],
                    'humidity' => $data['humidity'],
                    'co2' => $data['co2'],
                ]);

                return response()->json(['message' => 'Data saved successfully!'], 201);
            }

            return response()->json(['message' => 'No changes detected. Data was not saved.'], 200);
        }

        // اگر رکورد موجود نباشد، یک رکورد جدید ایجاد شود
        ColdRoomData::create($data);

        return response()->json(['message' => 'Data saved successfully!'], 201);
    }




}

