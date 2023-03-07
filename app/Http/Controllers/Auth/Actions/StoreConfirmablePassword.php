<?php

namespace App\Http\Controllers\Auth\Actions;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Lorisleiva\Actions\Concerns\AsAction;

class StoreConfirmablePassword
{
    use AsAction;
    
    public function handle(Request $request) : void
    {
        if (! Auth::guard('web')->validate([
            'email' => $request->user()->email,
            'password' => $request->password,
        ])) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }
        $request->session()->put('auth.password_confirmed_at', time());
    }
}
