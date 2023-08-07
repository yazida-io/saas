<?php

namespace App\Http\Requests\App\Settings;

use Illuminate\Foundation\Http\FormRequest;

class SubscribeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'payment_method' => 'required|string',
            'plan' => 'required|exists:plans,id',
            'recurrence' => 'required|in:monthly,yearly',
            'coupon' => 'nullable|string',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
