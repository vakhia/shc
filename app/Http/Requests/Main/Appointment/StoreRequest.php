<?php

namespace App\Http\Requests\Main\Appointment;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'hospital_id' => 'required|integer',
            'staff_id' => 'required|integer',
            'date_of_appointment'=>'required|date|after:today',
            'time_of_appointment'=>'required',
            'user_id'=>'required|integer',
            'phone_number'=>'required|integer',
            'message'=>'required|string|max:250',
        ];
    }

    public function messages()
    {
        return [
            'hospital_id.required' => 'A hospital id is required',
            'staff_id.required' => 'A staff id is required',
            'date_of_appointment.required' => 'A date of appointment is required',
            'time_of_appointment.required' => 'A time of appointment is required',
            'user_id.required' => 'A user id is required',
            'phone_number.required'=>'A phone number is required',
            'message.required' => 'A message is required',
            'hospital_id.integer' => 'A hospital id is integer',
            'staff_id.integer' => 'A staff id is integer',
            'date_of_appointment.date' => 'A date of appointment must be a date ',
            'user_id.integer' => 'A user id integer must be integer',
            'phone_number.integer' => 'A phone number is a integer ',
            'message.string' => 'A message must be a string',
            'message.max' => 'A string max 255 characters',
            'date_of_appointment.after' => 'You cannot make an appointment on this date',
        ];
    }
}
