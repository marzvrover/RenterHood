<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use App\Item;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param Item $item
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeItem(Request $request, Item $item)
    {
        if (Auth::user() == $item->user) abort(403);

        $validated = $request->validate([
            'value' => 'required',
            'comment' => '',
        ]);

        $validated['owner_id'] = Auth::user()->id;

        $review = Review::make($validated);

        $item->reviews()->save($review);

        return Redirect::back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeUser(Request $request, User $user)
    {
        if (Auth::user() == $user) abort(403);

        $validated = $request->validate([
            'value' => 'required',
            'comment' => '',
        ]);

        $validated['owner_id'] = Auth::user()->id;

        $review = Review::make($validated);

        $user->reviews()->save($review);

        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {


        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
    }
}
