<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Http\Requests\Apis\CheckSeatsAvailabilityRequest;
use App\Services\TripService;

class TripController extends Controller
{
    protected $tripService;

    function __construct()
    {
        $this->tripService = new TripService();
    }

    public function checkAvailableSeats(CheckSeatsAvailabilityRequest $request)
    {
        return $request->all();
    }
}
