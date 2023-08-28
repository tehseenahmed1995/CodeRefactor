<?php

namespace DTApi\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
* class BookingStoreRequest
 * this is a demo validation with random rules as I'm not sure what data and what type of data will come in request
*/
class BookingStoreRequest extends FormRequest
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
     * @throws \ReflectionException
     */
    public function rules()
    {
        return [
            'immediate' => 'sometimes',
            'due_time' => 'sometimes|date|date_format:Y-m-d',
        ];
    }
}