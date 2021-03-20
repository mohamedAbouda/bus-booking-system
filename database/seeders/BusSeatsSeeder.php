<?php

namespace Database\Seeders;

use App\Models\BusSeat;
use Illuminate\Database\Seeder;


class BusSeatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seats = [
            [
                'code' => 'A12',
                'window_seat' => 0,
                'bus_id' => 1
            ],
            [
                'code' => 'A13',
                'window_seat' => 1,
                'bus_id' => 1
            ],
            [
                'code' => 'A14',
                'window_seat' => 0,
                'bus_id' => 1
            ],
            [
                'code' => 'A15',
                'window_seat' => 0,
                'bus_id' => 1
            ],
            [
                'code' => 'A16',
                'window_seat' => 0,
                'bus_id' => 1
            ],
            [
                'code' => 'A17',
                'window_seat' => 1,
                'bus_id' => 1
            ],
            [
                'code' => 'A18',
                'window_seat' => 1,
                'bus_id' => 1
            ],
            [
                'code' => 'A19',
                'window_seat' => 0,
                'bus_id' => 1
            ],
            [
                'code' => 'A20',
                'window_seat' => 1,
                'bus_id' => 1
            ],
            [
                'code' => 'A21',
                'window_seat' => 0,
                'bus_id' => 1
            ],
            [
                'code' => 'A22',
                'window_seat' => 1,
                'bus_id' => 1
            ],
            [
                'code' => 'A23',
                'window_seat' => 1,
                'bus_id' => 1
            ],
        ];

        foreach ($seats as $seat) {
            BusSeat::updateOrCreate([
                'code' => $seat['code'],
                'window_seat' => $seat['window_seat'],
                'bus_id' => $seat['bus_id'],
            ], $seat);
        }
    }
}
