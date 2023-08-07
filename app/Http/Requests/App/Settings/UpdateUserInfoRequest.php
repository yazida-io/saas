<?php

namespace App\Http\Requests\App\Settings;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserInfoRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:255'],
            'avatar' => ['nullable', 'image', 'mimes:jpeg,png'],
            'language' => [
                'in:'.implode(',', array_keys(User::languages())),
            ],
        ];
    }
}
