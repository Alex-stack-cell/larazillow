<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /*
     * User creates an account **/
    public function create()
    {
        return inertia('Auth/Login');
    }

    /*
     * User is logging in
     * **/
    public function store()
    {
        //
    }

    /*
     * User is logging out method
     * **/
    public function destroy()
    {

    }
}
