<?php

namespace App\Http\Requests\Admin\Staff;

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
            'first_name'=>'required|string',
            'second_name'=>'required|string',
            'patronymic'=>'required|string',
            'department'=>'required|string',
            'email' => 'email|required|unique:staff,email,'.$this->staff_id,
            'staff_id' =>'integer|required|exists:staff,id',
            'phone_number'=>'required|integer',
            'address'=>'required|string',
            'date_of_birth'=>'required|date',
            'hospital_ids' => 'nullable|array',
            'hospital_ids.*' => 'nullable|integer|exists:hospitals,id',
            'avatar_path' => 'nullable|file',
        ];
    }
    public function messages()
    {
        return [
            'first_name.required' => 'A first name is required',
            'second_name.required' => 'A second name is required',
            'patronymic.required' => 'A patronymic is required',
            'department.required' => 'A department is required',
            'email.required' => 'An email address is required',
            'phone_number.required' => 'A phone number is required',
            'address.required' => 'An address is required',
            'date_of_birth.required' => 'A birth date is required',
            'first_name.string' => 'A first name must be a string',
            'second_name.string' => 'A second name must be a string',
            'patronymic.string' => 'A patronymic must be a string',
            'department.string' => 'A department must be a string',
            'email.email' => 'A email address is invalid',
            'phone_number.integer' => 'A phone number is incorrect',
            'address.string' => 'An address must be a string',
            'date_of_birth.date' => 'Date of Birth must be a date',
            'avatar_path' => 'A avatar must be a file',
            'email.unique' => 'Email must be unique',
        ];
    }
}
