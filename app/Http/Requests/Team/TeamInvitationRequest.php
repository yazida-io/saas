<?php

namespace App\Http\Requests\Team;

use Illuminate\Foundation\Http\FormRequest;

class TeamInvitationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'code' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'team_id' => ['required'],
            'token' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
