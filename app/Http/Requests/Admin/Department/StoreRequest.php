<?php

namespace App\Http\Requests\Admin\Department;

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
            'title'=>'required|string',
            'description'=>'required|string',
            'header_id'=>'required|integer',
            'image'=>'required|file',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'A title is required',
            'description.required' => 'A title is required',
            'header_id.required' => 'A title is required',
            'image.required' => 'A title is required',
            'title.string' => ' A title must be a string',
            'description.string' => ' A description must be a string',
            'header_id.integer' => ' A id of header must be an integer',
            'image.file' => ' A image must be a file',
        ];
    }


}
