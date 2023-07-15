<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        $this->mergeIfMissing(['code' => md5(time()), 'user_id' => auth()->id()]);
    }

    public function rules(): array
    {
        return [
            'code' => ['required', 'string', 'unique:posts,code'],
            'title' => ['required', 'string', 'min:3', 'max:255'],
            'content' => ['required', 'string', 'min:3'],
            'user_id' => ['required', 'exists:users,id'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
