<?php

namespace App\Http\Requests\Admin\User;

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
            'login' => 'required|string',
            'first_name' => 'required|string',
            'second_name' => 'required|string',
            'email' => 'required|email|unique:users',
            'role' => 'required|integer',
        ];
    }
    public function messages()
    {
        return [
            'login.required' => 'A login is required',
            'first_name.required' => 'A first name is required',
            'second_name.required' => 'A second name is required',
            'email.required' => 'An email address is required',
            'role.required' => 'A role address is required',
            'login.string' => 'A login must be a string',
            'first_name.string' => 'A first name must be a string',
            'second_name.string' => 'A second name must be a string',
            'email.email' => 'An email is incorrect',
            'role.integer' => 'A role must be an integer',
            'email.unique' => 'A email must be unique',
        ];
    }
}
