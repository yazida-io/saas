<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'code' => ['string', 'unique:posts,code,'.$this->post->id],
            'title' => ['min:3', 'max:255'],
            'content' => ['min:3'],
        ];
    }
}
