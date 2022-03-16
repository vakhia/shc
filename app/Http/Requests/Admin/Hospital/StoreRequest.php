<?php

namespace App\Http\Requests\Admin\Hospital;

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
            'description' => 'required|string',
            'address' => 'required|string',
            'header_id' => 'required|integer',
            'department_ids' => 'nullable|array',
            'department_ids.*' => 'nullable|integer|exists:departments,id',
            'preview_image_path' => 'required|file',
            'main_image_path' => 'required|file',

        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'A title is required',
            'description.required' => 'A title is required',
            'address.required' => 'An address is required',
            'header_id.required' => 'A header if is required',
            'preview_image_path.required' => 'A preview image is required',
            'main_image_path.required' => 'A preview image is required',
            'title.string' => 'A title must be a string',
            'description.string' => ' A description must be a string',
            'address.string' => ' A address must be a string',
            'header_id.integer' => 'A id of header must be an integer',
            'department_ids.array' => 'A department ids must be an array',
            'department_ids.*.exists' => 'A departments ids must be in departments table',
            'preview_image_path' => 'A preview image must be a file',
            'main_image_path' => 'A preview image must be a file',
        ];
    }
}
