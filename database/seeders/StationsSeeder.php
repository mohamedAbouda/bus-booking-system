<?php

namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Seeder;


class StationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stations = [
            [
                'name' => 'Cairo Station',
                'city_id' => 1,
            ],
            [
                'name' => 'Giza Station',
                'city_id' => 2,
            ],
            [
                'name' => 'AlFayyum Station',
                'city_id' => 3,
            ],
            [
                'name' => 'AlMinya Station',
                'city_id' => 4,
            ],
            [
                'name' => 'Asyut Station',
                'city_id' => 5,
            ],
        ];

        foreach ($stations as $station) {
            Station::updateOrCreate([
                'name' => $station['name'],
                'city_id' => $station['city_id']
            ], $station);
        }
    }
}
