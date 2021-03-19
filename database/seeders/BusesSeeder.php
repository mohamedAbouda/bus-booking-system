<?php

namespace Database\Seeders;

use App\Models\Bus;
use Illuminate\Database\Seeder;


class BusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buses = [
            [
                'number' => 'A12C',
                'driver_name' => 'Mohamed Salah',
                'number_of_seats' => 12
            ],
        ];

        foreach ($buses as $bus) {
            Bus::updateOrCreate([
                'number' => $bus['number'],
                'driver_name' => $bus['driver_name'],
                'number_of_seats' => $bus['number_of_seats'],
            ], $bus);
        }
    }
}
