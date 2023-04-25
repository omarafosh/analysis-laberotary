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
            'email'     => 'required|email|unique:users,email,' . auth()->user()->id,
            'password'  => 'required|same:confirm-password',
            'roles'     => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required'     => "The Name is require",
            'email.required'    => "The Email is require",
            'email.email'       => "The Not is Email",
            'email.unique'      => "The Email existes",
            'password.same'     => "The Password not confirm",
            'roles.required'    => "The Roles is require",
        ];
    }
}
