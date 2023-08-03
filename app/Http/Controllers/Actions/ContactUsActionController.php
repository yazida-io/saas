<?php

namespace App\Http\Controllers\Actions;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactUsActionController extends Controller
{
    public function __invoke(ContactRequest $request)
    {
        Contact::create($request->validated());

        return redirect()->route('web.home');
    }
}
