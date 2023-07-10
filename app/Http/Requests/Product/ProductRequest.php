<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'code' => ['required'],
            'name' => ['required'],
            'description' => ['required'],
            'price' => ['required', 'numeric'],
            'images' => ['required'],
            'demo' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
