<?php

namespace Database\Seeders;

use App\Models\TripRoute;
use Illuminate\Database\Seeder;


class TripRouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $routes = [
            [
                'trip_id' => 1,
                'station_id' => 1,
                'index' => 0
            ],
            [
                'trip_id' => 1,
                'station_id' => 3,
                'index' => 1
            ],
            [
                'trip_id' => 1,
                'station_id' => 4,
                'index' => 2
            ],
            [
                'trip_id' => 1,
                'station_id' => 5,
                'index' => 3
            ],
        ];

        foreach ($routes as $route) {
            TripRoute::updateOrCreate([
                'trip_id' => $route['trip_id'],
                'station_id' => $route['station_id'],
                'index' => $route['index'],
            ], $route);
        }
    }
}
