<?php

namespace App\Repositories;

use App\Models\Station;

class StationRepository
{
    public function getStationById($id)
    {
        return Station::findOrFail($id);
    }
}
