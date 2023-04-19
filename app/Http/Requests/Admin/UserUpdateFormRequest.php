<?php

namespace App\Http\Requests\Admin;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserUpdateFormRequest extends FormRequest
{
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $userId = $this->route('users.update')->id;
        return [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric', 'regex:/^\d{10,}$/', 'min:8'],
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($userId),
            ],
            'password' => ['nullable', 'string', 'min:8'],
        ];
    }
    public function messages(): array
    {
        return [
            'phone.required' => 'Phone is required.Must be number and minimum 8 digit',
            'phone.regex' => 'Phone number format is invalid. Please enter a valid phone number.Its must be number and minimum 8 digit',

        ];
    }
}
