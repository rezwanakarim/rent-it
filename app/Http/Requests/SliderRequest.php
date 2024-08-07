<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SliderRequest extends FormRequest
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
        $SliderId = $this->route('slider')->id ?? '';
        $sliderImageValidation = 'mimes:jpg,png,jpeg|max:6000';
        if($this->isMethod('post')){
            $sliderImageValidation = 'required|'.$sliderImageValidation;
        }
        return [
            'title' => ['required', 'min:4', 'max:100', Rule::unique('sliders', 'title')->ignore($SliderId)],
            'description' => ['required'],
            'image' => $sliderImageValidation,
        ];
    }
}
