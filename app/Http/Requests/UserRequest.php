<?php

namespace App\Http\Requests;

use App\Actions\Fortify\PasswordValidationRules;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    use PasswordValidationRules;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'profile_photo_path' => ['image', 'mimes:png,jpg,jpeg', Rule::requiredIf(request()->routeIs('users.store'))],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => $this->passwordRules(),
            'address' => ['required', 'string'],
            'roles' => ['required', 'string', 'in:USER,ADMIN'],
            'house_number' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string'],
            'city' => ['required', 'string', 'max:255']
        ];
    }
}
