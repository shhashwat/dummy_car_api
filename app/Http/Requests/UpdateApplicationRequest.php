<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateApplicationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        'claim' => 'required|in:yes,no',
        'make' => 'required|string',
        'model' => 'required|string',
        'registration_year' => 'required|digits:4|integer|min:1950|max:' . date('Y'),
        'fuel_type' => 'required|string',
        'variant' => 'required|string',
        'insurance_till' => 'required|date',
        ];
    }
}
