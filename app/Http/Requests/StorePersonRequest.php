<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonRequest extends FormRequest
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
            'first_name' => 'required|min:3|max:30|alpha',
            'middle_name' => 'nullable|min:2|max:30|alpha',
            'last_name' => 'required|min:2|max:30|alpha',
            'address' => 'required|min:2|max:50',
            'contact_number' => 'required|string|regex:/^\d{10}$/',
            'email' => 'nullable|email|max:30',
            'person_image' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
        ];
    }
}
