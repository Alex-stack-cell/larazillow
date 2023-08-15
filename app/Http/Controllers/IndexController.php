<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
//        dd(Auth::check());
//        $listing = Listing::make([
//            'beds' => 2,
//            'baths' => 2,
//            'area' => 102,
//            'city' => 'bxl',
//            'postcode' => '1050',
//            'street' => 'Rue maes',
//            'street_nr' => '72',
//            'price' => '720',
//        ]);
//
//        $user = User::find(1);
//        $user2 = User::find(2);
//        $user->listings()->save($listing);
//        $result2 = $user2->listings()->save($listing);
//
//        $listing10 = Listing::find(10);
//        $user2 = User::find(2);
//
//        $result = $listing10->owner()->associate($user2);
//        $listing10->save();
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
