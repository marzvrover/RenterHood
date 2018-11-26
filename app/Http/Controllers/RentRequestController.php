<?php

namespace App\Http\Controllers;

use App\Item;
use App\RentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class RentRequestController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function store(Item $item)
    {
        if (Auth::user() == $item->user) abort(403);

        RentRequest::create([
            'requester_id' => Auth::user()->id,
            'item_id' => $item->id,
        ]);

        return Redirect::back();
    }

    public function update(Request $request, Item $item, RentRequest $rentRequest)
    {
        if ($request->has('accept')) {
            $rentRequest->accepted = true;
            $rentRequest->save();

            $item->rented = true;
            $item->save();
        } else if ($request->has('deny')) {
            $rentRequest->accepted = false;
            $rentRequest->resolved = true;
            $rentRequest->save();
        } else if ($request->has('return')) {
            $rentRequest->resolved = true;
            $rentRequest->save();
            $item->rented = false;
            $item->save();
        }

        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RentRequest  $rentRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(RentRequest $rentRequest)
    {
        //
    }
}
