<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CustomerRequest extends FormRequest
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
        
        return [
            'firstName' => ['required'],
            'lastName' => ['required'],
            'username' => ['required','min:6', 'max:24', Rule::unique('customers', 'username')],
            'gender' => ['required'],
            'address' => ['required'],
            'number' => ['required'],
            'email' => ['required'],
            'password' => ['required', 'confirmed'],
            'terms' => ['required'], 
        ];
    }
}
