<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // challenge find the listing which as at least 4 beds with the cheapest price
        dd(Listing::where('beds', '>', 4)->orderBy('beds', 'desc')->get());
        return inertia(
            'Index/Index',
            [
                'message' => 'Hello from Inertia'
            ]
        );
    }

    public function show()
    {
        return inertia('Index/Show');
    }
}
