<?php

namespace App\Http\Controllers;


use Inertia\Response;
use Inertia\ResponseFactory;

class UserAccountController extends Controller
{
    public function create(): Response|ResponseFactory
    {
        return inertia('UserAccount/Create');
    }
}
