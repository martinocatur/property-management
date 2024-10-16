<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'slug' => 'nullable',
            'address' => 'required',
            'description' => 'required',
            'type' => 'required',
            'status' => 'required',
            'price' => 'required',
            'number_of_bedrooms' => 'required',
            'number_of_bathrooms' => 'required',
            'number_of_car_spaces' => 'required'
        ];
    }
}
