<?php

namespace App\Http\Requests\Api\Pharmacy;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StorePharmacyRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'nullable|string|max:15|regex:/^\d+$/',
            'city_id' => 'required|exists:cities,id',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()], 422));
    }
     /**
     * Custom error messages for validation.
     */
    public function messages(): array
    {
        return [
            'name.required' => 'The pharmacy name is required.',
            'address.required' => 'The address is required.',
            'phone.regex' => 'The phone number must contain only numbers.',
            'city_id.required' => 'The city ID is required.',
            'city_id.exists' => 'The selected city ID does not exist.',
        ];
    }
}
