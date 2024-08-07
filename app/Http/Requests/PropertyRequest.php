<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $PropertyId = $this->route('property')->id ?? '';
        $propertyImageValidation = 'mimes:jpg,png,jpeg|max:50000';
        if($this->isMethod('post')){
            $propertyImageValidation = 'required|'.$propertyImageValidation;
        }
        return [
            'property_id' => ['required', 'min:5', 'max:30', Rule::unique('properties', 'property_id')->ignore($PropertyId)],
            'property_category' => ['required'],
            'property_title' => ['required'],
            'property_description' => ['required'],
            'property_image' => $propertyImageValidation,

            'location' => ['required'],
            'area' => ['required'],
            'price' => ['required'],
            'contact_info' => ['required'], 
        ];
    }
}
