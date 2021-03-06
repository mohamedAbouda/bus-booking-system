<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Http\Requests\Apis\BookTripSeatRequest;
use App\Http\Requests\Apis\CheckSeatsAvailabilityRequest;
use App\Services\TripService;

class TripController extends Controller
{
    protected $tripService;

    function __construct()
    {
        $this->tripService = new TripService();
    }

    public function getAvailableSeats(CheckSeatsAvailabilityRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = $request->user()->id;

        $validateTripData = $this->tripService->validateTripData($data);

        if($validateTripData){
            return $this->makeMessageResponse($validateTripData);
        }

        return $this->makeResponse($this->tripService->getAvailableSeats($data));
    }

    public function bookTripSeat(BookTripSeatRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = $request->user()->id;

        return $this->makeMessageResponse($this->tripService->bookTripSeat($data));
    }
}
