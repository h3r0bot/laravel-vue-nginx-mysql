<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarsStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'gender' => 'nullable|string|max:255',
            'ip_address' => 'nullable|string|max:255',
            'date' => 'nullable|string|max:255',
            'car' => 'nullable|string|max:255',
            'car_vin' => 'nullable|string|max:255',
            'car_year' => 'nullable|string|max:255',
        ];
    }
}
