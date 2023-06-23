<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Inertia\ResponseFactory;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response|ResponseFactory
    {
        return inertia(
            'Listing/Index',
            [
                'listings' => Listing::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response|ResponseFactory
    {
        return inertia('Listing/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
       Listing::create(
           $request->validate([
               'beds' => 'required|integer|min:1|max:20',
               'baths' => 'required|integer|min:1|max:20',
               'area' => 'required|integer|min:15|max:1500',
               'city' => 'required',
               'code' => 'required',
               'street' => 'required',
               'street_nr' => 'required|integer|min:1|max:1000',
               'price' => 'required|integer|min:100|max:2000000',
           ]));

        return redirect()->route('listing.index')
            ->with('success', 'Listing was created !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing): RedirectResponse
    {
        return inertia(
            'Listing/Show',
            [
                'listing' => $listing
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
