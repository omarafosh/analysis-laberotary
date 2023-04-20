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
            'name'      => 'required',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|same:confirm-password',
            'roles'     => 'required',
            'image' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required'     => "The filed require",
            'email.required'    => "The filed require",
            'email.email'       => "The Not Email",
            'email.unique'      => "The email existes",
            'password.same'     => "The password not confirm",
            'roles.required'    => "The roles require",
        ];
    }
}
