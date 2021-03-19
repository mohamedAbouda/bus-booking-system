<?php

namespace Database\Seeders;

use App\Models\Trip;
use Carbon\Carbon;
use Illuminate\Database\Seeder;


class TripsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trips = [
            [
                'name' => 'Cairo-Asyut trip',
                'start_date' => Carbon::now(),
                'start_time' => '18:20:25',
                'bus_id' => 1,
                'first_station_id' => 1,
                'last_station_id' => 5,
            ],
        ];

        foreach ($trips as $trip) {
            Trip::updateOrCreate([
                'name' => $trip['name'],
                'start_date' => $trip['start_date'],
                'start_time' => $trip['start_time'],
                'bus_id' => $trip['bus_id'],
                'first_station_id' => $trip['first_station_id'],
                'last_station_id' => $trip['last_station_id'],
            ], $trip);
        }
    }
}
