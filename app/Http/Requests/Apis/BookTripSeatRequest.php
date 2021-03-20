<?php

namespace App\Http\Requests\Apis;

use Illuminate\Foundation\Http\FormRequest;

class BookTripSeatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'seat_id' => ['required', 'exists:bus_seats,id'],
            'departure_station_id' => ['required', 'exists:stations,id'],
            'arrival_station_id' => ['required', 'exists:stations,id'],
            'trip_id' => ['required', 'exists:trips,id'],
        ];
    }
}
