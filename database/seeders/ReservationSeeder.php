<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservation;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reservation::create([
            'name' => 'jani',
            'email' => 'janko11@gmail.com',
            'reservation_time' => '2025-12-23 20:21:45',
            'guests' => 2,
            'note' => 'patyizgatunk',
        ]);
        Reservation::factory()->count(10)->create();
    }
}
