<?php

namespace App\Http\Requests\Profile\Treatment;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'user_id' => 'required|integer',
            'hospital_id' => 'required|integer',
            'staff_id' => 'required|integer',
            'disease_name' => 'required|string',
            'description' => 'required|string',
            'medicine_ids' => 'nullable|array',
            'medicine_ids.*' => 'nullable|integer|exists:medicines,id',
            'appointment' => 'required|string',
            'status_id' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'A user id is required',
            'hospital_id.required' => 'A hospital id is required',
            'staff_id.required' => 'A staff id is required',
            'disease_name.required' => 'A disease name is required',
            'description.required' => 'A description is required',
            'appointment.required' => 'An appointment is required',
            'status_id.required' => 'A status is required',
            'user_id.integer' => 'A user id must be an integer',
            'hospital_id.integer' => 'A hospital id must be an integer',
            'staff_id.integer' => 'A staff id must be an integer',
            'disease_name.string' => 'A disease name must be a string',
            'description.string' => 'A description must be a string',
            'medicine_ids.*.exists:medicines.id'=>'A ids must be in medicines table',
            'appointment.string'=>'A appointment must be a string',
            'status_id.integer'=>'A status must be an integer'
        ];
    }
}
