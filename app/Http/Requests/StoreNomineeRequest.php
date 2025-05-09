<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNomineeRequest extends FormRequest
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
            'nominee_name' => ['required', 'string', 'max:255'],
            'dob' => ['required', 'date', 'before:today'],
            'relationship' => ['required', 'string', 'in:Father,Mother,Spouse,Sibling,Child,Friend'],
            'gender' => ['required', 'string', 'in:male,female,other'],
        ];
    }
}
