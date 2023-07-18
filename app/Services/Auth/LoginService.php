<?php

namespace App\Services\Auth;


use App\Http\Controllers\Auth\TwoFA\SmsAero;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginService
{

    public function create($request){

        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string']
        ]);
        if (!Auth::attempt($credentials, $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        } else {
            $a = new SmsAero();
            $a->generateCode();
        }


        $request->session()->regenerate();
    }

}
