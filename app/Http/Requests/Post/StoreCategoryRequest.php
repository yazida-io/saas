<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        $this->merge([
            'user_id' => auth()->id(),
            'code' => md5(microtime()),
        ]);
    }

    public function rules(): array
    {
        return [
            'code' => ['required'],
            'name' => ['required'],
            'image' => ['nullable'],
            'color' => ['nullable'],
            'user_id' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
