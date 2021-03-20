<?php

namespace App\Http\Requests\Apis;

use Illuminate\Foundation\Http\FormRequest;

class CheckSeatsAvailabilityRequest extends FormRequest
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
            'start_station' => ['required', 'exists:stations,id'],
            'end_station' => ['required', 'exists:stations,id'],
            'trip_id' => ['required', 'exists:trips,id'],
        ];
    }
}
