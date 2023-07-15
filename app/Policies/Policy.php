<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;

abstract class Policy
{
    protected static function allowIf(bool $condition, ?string $message = null): Response
    {
        return $condition ? Response::allow() : Response::deny($message ?? 'You are not authorized to perform this action.');
    }
}
