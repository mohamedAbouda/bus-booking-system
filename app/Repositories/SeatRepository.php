<?php

namespace App\Repositories;

use App\Models\BusSeat;

class SeatRepository
{
    public function getSeatsInformation(array $ids)
    {
        return BusSeat::whereIn('id',$ids)->select('code','window_seat')->get();
    }
}
