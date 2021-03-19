<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CitiesSeeder::class);
        $this->call(StationsSeeder::class);
        $this->call(BusesSeeder::class);
        $this->call(TripsSeeder::class);
        $this->call(TripRouteSeeder::class);
    }
}
