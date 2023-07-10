<?php

namespace App\Http\Requests\Subscription;

use Illuminate\Foundation\Http\FormRequest;

class SubscriptionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'code' => ['required'],
            'user_id' => ['required'],
            'membership_id' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
