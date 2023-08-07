<?php

namespace App\Http\Controllers\App\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\App\Settings\UpdateUserInfoRequest;
use Illuminate\Contracts\View\View;

class ProfileController extends Controller
{
    public function index(): View
    {
        return view('app.settings.profile');
    }

    public function updateUserInfo(UpdateUserInfoRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');

            $filename = md5(time()).'.'.$file->getClientOriginalExtension();

            $file->storeAs('public/avatars', $filename);

            $data['avatar'] = $filename;
        }

        auth()->user()->update($data);

        return back()->with('success', 'Your profile has been updated.');
    }
}
