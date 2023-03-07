<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Auth\Actions\StoreRegisteredUser;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    public function store(Request $request): RedirectResponse
    {

        $user = StoreRegisteredUser::run($request);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
