<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use App\Item;
use App\User;

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeItem(Request $request, $item_id)
    {
        $validated = $request->validate([
            'value' => 'required',
            'comment' => '',
        ]);

        $validated['owner_id'] = Auth::user()->id;
        $validated['reviewable_id'] = $item_id;
        $validated['reviewable_type'] = 'App\Item';

        $review = Review::create($validated);
        //
    }

    public function storeUser(Request $request, $user_id)
    {
        $validated = $request->validate([
            'value' => 'required',
            'comment' => '',
        ]);

        $validated['owner_id'] = Auth::user()->id;

        $review = Review::make($validated);

        Auth::user()->user_reviews()->save($review);
        //
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
