<?php

namespace App\Services;

use App\Repositories\TripRepository;

class TripService
{
    protected $tripRepository;

    function __construct()
    {
        $this->tripRepository = new TripRepository();
    }
}
