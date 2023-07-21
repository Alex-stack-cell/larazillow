<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;
use Inertia\ResponseFactory;

class AuthController extends Controller
{
    /*
     * User creates an account **/
    public function create(): Response|ResponseFactory
    {
        return inertia('Auth/Login');
    }

    /*
     * User is logging in
     * **/
    public function store(Request $request): RedirectResponse
    {
        if (!Auth::attempt($request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]), true)) {
            throw ValidationException::withMessages([
                'email' => 'Authentication failed'
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended();
    }

    /*
     * User is logging out method
     * **/
    public function destroy()
    {

    }
}
