<?php

namespace App\Policies;

use App\Models\Invoice;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class InvoicePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Invoice $invoice): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Invoice $invoice): bool
    {
    }

    public function delete(User $user, Invoice $invoice): bool
    {
    }

    public function restore(User $user, Invoice $invoice): bool
    {
    }

    public function forceDelete(User $user, Invoice $invoice): bool
    {
    }
}
