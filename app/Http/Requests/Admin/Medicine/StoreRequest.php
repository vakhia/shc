<?php

namespace App\Http\Requests\Admin\Medicine;

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
            'contraindication' => 'nullable|string',
            'quantity' => 'required|integer',
            'price' => 'required|integer',
            'image' => 'file',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'A title is required',
            'description.required' => 'A description is required',
            'quantity.required' => 'A quantity is required',
            'price.required' => 'A price is required',
            'title.string' => 'A title must be a string',
            'description.string' => 'A description must be a string',
            'contraindication.string' => 'A contraindications must be a string',
            'quantity.integer' => 'Quantity must be a number',
            'price.integer' => 'Price must be a number',
            'image.file' => 'Your photo must be a file',
        ];
    }
}
