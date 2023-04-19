<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'laboratory_logo' => 'required',
            'laboratory_name' => 'required',
            'laboratory_address' => 'required',
            'laboratory_phone' => 'required',
            'laboratory_doctor' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'laboratory_logo.required' => "The filed require",
            'laboratory_name.required' => "The filed require",
            'laboratory_address.required' => "The filed require",
            'laboratory_phone.required' => "The filed require",
            'laboratory_doctor.required' => "The filed require",
        ];
    }
}
