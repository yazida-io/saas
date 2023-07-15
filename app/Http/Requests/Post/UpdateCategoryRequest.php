<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['min:3', 'max:255'],
            'image' => ['nullable'],
            'color' => ['nullable'],
        ];
    }
}
