<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:254'],
            'email' => ['required', 'email', 'max:100'],
            'message' => ['required', 'max:1500'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
