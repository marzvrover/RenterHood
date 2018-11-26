<?php

namespace App\Http\Controllers;

use App\RentRequest;
use Illuminate\Http\Request;

class RentRequestController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RentRequest  $rentRequest
     * @return \Illuminate\Http\Response
     */
    public function show(RentRequest $rentRequest)
    {
        dd($rentRequest);

        return view('request.show', [
            'request' => $rentRequest->load('item'),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RentRequest  $rentRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(RentRequest $rentRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RentRequest  $rentRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RentRequest $rentRequest)
    {
        //
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
