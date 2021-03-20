<?php

namespace App\Services;

use App\Repositories\SeatRepository;
use App\Repositories\TripRepository;

class TripService
{
    protected $tripRepository;
    protected $seatRepository;

    function __construct()
    {
        $this->tripRepository = new TripRepository();
        $this->seatRepository = new SeatRepository();
    }

    public function getAvailableSeats(array $data)
    {
        $seatsInformation = [];
        $this->validateTripData($data);
        $seats = $this->seatsAvailability($data);

        if(count($seats) > 0){
            $seatsInformation = $this->seatRepository->getSeatsInformation($seats);
        }
        return $seatsInformation;
    }

    // check if there any available seats for the given trip
    public function seatsAvailability(array $data)
    {
        $seats = [];
        $trip = $this->tripRepository->getTripById($data['trip_id']);

        //check current bookings counter against bus available seats
        if($trip->bookings->count() > $trip->bus->number_of_seats ){
            $seats =  $this->getSeatsStatus($data);
        }else{
            $seats = $this->tripRepository->retrieveAvailableTripSeats($data['trip_id']);
        }

        return $seats;
    }

    public function getSeatsStatus(array $data)
    {
        return $this->tripRepository->availableSeatsDuringTheTrip($data['trip_id'], $data['start_station'], $data['end_station']);
    }

    public function validateTripData(array $data)
    {
        $TripRoute = $this->tripRepository->tripRoute($data['trip_id'], $data['start_station'], $data['end_station']);

        // check if the 2 selected stations exist in the given trip
        if($TripRoute->count() < 2){
            return 'Error in trip Route, please make sure you have booked the correct stations';
        }

        // check if the 2 selected stations in the right order
        $isStationsInRightOrder = $this->tripRepository->checkStationsOrder($data['trip_id'], $data['start_station'], $data['end_station']);

        if(!$isStationsInRightOrder){
            return 'Error in trip Route, please make sure you have booked the stations in correct order';
        }
    }
}
