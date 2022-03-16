<?php

namespace App\Http\Requests\Profile\MedicalExamination;

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
            'title' => 'required|string',
            'user_id' => 'required|integer|exists:users,id',
            'appointment_id' => 'required|integer|exists:appointments,id',
            'staff_id' => 'required|integer|exists:users,id',
            'hospital_id' => 'required|integer|exists:hospitals,id',
            'description' => 'required|string',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'A title is required',
            'title.string' => 'A title must be a string',
            'user_id.required' => 'A client is required',
            'appointment_id.required' => 'A appointment is required',
            'hospital_id.required' => 'A hospital is required',
            'staff_id.required' => 'A staff is required',
            'user_id.integer' => 'A client id must be an integer',
            'appointment_id.integer' => 'A appointments id must be an integer',
            'hospital_id.integer' => 'A hospital id must be an integer',
            'staff_id.integer' => 'A staff must be an integer',
            'user_id.exists' => 'A user id must be in a users table',
            'appointment_id.exists' => 'A appointment id must be in a users table',
            'hospital_id.exists' => 'A hospital id must be in a hospitals table',
            'staff_id.exists' => 'A staff id must be in a users table',
            'description.required' => 'A description is required',
            'description.string' => 'A description must be a string',
        ];
    }
}
