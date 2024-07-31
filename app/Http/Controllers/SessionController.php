<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        // validate
        $validatedAttributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // login user
        if (! Auth::attempt($validatedAttributes)) {
            return back()->withErrors([
                'email' => 'Your provided credentials could not be verified.',
            ])->withInput(['email' => $validatedAttributes['email']]);
        }

        // regenerate session id
        request()->session()->regenerate();

        return redirect('/jobs');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/jobs');
    }
}
