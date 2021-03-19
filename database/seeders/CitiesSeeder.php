<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\City;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [
                'name' => 'Cairo',
            ],
            [
                'name' => 'Giza',
            ],
            [
                'name' => 'AlFayyum',
            ],
            [
                'name' => 'AlMinya',
            ],
            [
                'name' => 'Asyut',
            ],
        ];

        foreach ($cities as $city) {
            City::updateOrCreate([
                'name' => $city['name'],
            ], $city);
        }
    }
}
