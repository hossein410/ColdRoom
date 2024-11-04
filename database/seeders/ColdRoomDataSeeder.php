<?php

namespace Database\Seeders;

use App\Models\ColdRoomData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColdRoomDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ColdRoomData::factory()->count(50)->create();
    }
}
