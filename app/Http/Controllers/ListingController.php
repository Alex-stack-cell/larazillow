<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreListingRequest;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;
use Inertia\ResponseFactory;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ListingController extends Controller
{
    /*
     * Mapping the controller methods with the corresponding policy method.
     * The end goal is to verify if a user has access to a resource**/
    public function __construct()
    {
        $this->authorizeResource(Listing::class,'listing');
    }
    /*
     * Protect all routes from unauthenticated users except index and show
     **/
//    public function __construct()
//    {
//        $this->middleware('auth')->except(['index', 'show']);
//    }

    /**
     * Display a listing of the resource.
     */
    public function index(): Response|ResponseFactory
    {
        return inertia(
            'Listing/Index',
            [
                'listings' => Listing::orderByDesc('created_at')
                    ->paginate(10)
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response|ResponseFactory
    {
//        $this->authorize('create', Listing::class);
        return inertia('Listing/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreListingRequest $request): RedirectResponse
    {
        $validatedListing = $request->validated();
        $request->user()->listings()->create($validatedListing);

        return redirect()->route('listing.index')
            ->with('success', 'Listing was created !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing): Response|ResponseFactory
    {
//        if (Auth::user()->cannot('view',$listing)) {
//            abort(403);
//        }
//        $this->authorize('view', $listing);

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
    public function edit(Listing $listing): Response|ResponseFactory
    {
        return inertia(
            'Listing/Edit',
            [
                'listing' => $listing
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreListingRequest $request, Listing $listing): RedirectResponse
    {
        $validated = $request->validated();
        $listing->update($validated);

        return redirect()->route('listing.index')
            ->with('success', 'Listing is updated !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing): RedirectResponse
    {
        $listing->delete();

        return redirect()->back()
            ->with('success', 'Listing was deleted !');
    }
}
