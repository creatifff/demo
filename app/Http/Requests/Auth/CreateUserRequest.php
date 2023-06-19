<?php

namespace App\Http\Requests\Auth;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return !auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|regex:/^[А-Яа-яёЁ\s-]+$/iu',
            'surname' => 'required|regex:/^[А-Яа-яёЁ\s-]+$/iu',
            'patronymic' => 'nullable|regex:/^[А-Яа-яёЁ\s-]+$/iu',
            'login' => 'required|unique:users,login|regex:/^[a-zA-Z\s\-]+$/u',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:6|same:password_repeat',
            'rules' => 'accepted'
        ];
    }

//    public function messages()
//    {
//
//    }
}
