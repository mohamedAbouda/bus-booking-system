<?php

namespace App\Repositories;

use App\Models\BusSeat;
use App\Models\Trip;
use App\Models\TripBooking;
use App\Models\TripRoute;

class TripRepository
{

    public function getTripById($id)
    {
        return Trip::findOrFail($id);
    }

    public function tripRoute($tripId, $startStation, $endStation)
    {
        return TripRoute::where('trip_id',$tripId)->whereIn('station_id',[$startStation, $endStation])->get();
    }

    public function checkStationsOrder($tripId, $startStation, $endStation)
    {
        $isStationsInRightOrder = false;

        $firstStation = TripRoute::where('trip_id',$tripId)->where('station_id', $startStation)->first();

        $endStation = TripRoute::where('trip_id', $tripId)->where('station_id', $endStation)->first();

        if($endStation->index > $firstStation->index){
            $isStationsInRightOrder = true;
        }

        return $isStationsInRightOrder;
    }

    public function availableSeatsDuringTheTrip($tripId, $startStation, $endStation)
    {
        return TripBooking::where('trip_id',$tripId)->where('departure_station_id', '>=', $endStation)
        ->orWhere('arrival_station_id', '<=', $startStation)->pluck('seat_id')->toArray();
    }

    public function retrieveAvailableTripSeats($tripId)
    {
        $trip = $this->getTripById($tripId);

        $reservedSeats =  TripBooking::where('trip_id',$tripId)->pluck('seat_id')->toArray();

        return BusSeat::where('bus_id',$trip->bus_id)->whereNotIn('id',$reservedSeats)->pluck('id')->toArray();
    }

    public function bookSeat($data)
    {
        return TripBooking::create($data);
    }
}
