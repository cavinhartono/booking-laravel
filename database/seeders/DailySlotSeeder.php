<?php

namespace Database\Seeders;

use App\Models\DailySlot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DailySlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DailySlot::create([
            'name' => '07:00 - 09:00',
            'quota' => 30,
            'is_active' => true,
        ]);

        DailySlot::create([
            'name' => '16:00 - 18:00',
            'quota' => 30,
            'is_active' => true,
        ]);

        DailySlot::create([
            'name' => '19:00 - 21:00',
            'quota' => 30,
            'is_active' => true,
        ]);
    }
}
