<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('item.index', ['items' => Item::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       if (! Auth::user()) abort(403);

        return view('item.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! Auth::user()) abort(403);

        $validatedData = $request->validate([
            'name' => 'required',
            'postal_code' => 'required',
            'price' => 'required|numeric',
            'description' => 'required|min:20',
            'picture' => 'image',
        ]);

        // Converts price from dollars to cents
        $validatedData['price'] *= 100;

        // Stores image
        if ($request->hasFile('picture')) {
            $validatedData['picture'] = $request->file('picture')->store('items-picture', ['disk' => 'public']);
        } else {
            $validatedData['picture'] = Item::$defaultImage;
        }
        // Associates item with user
        $validatedData['user_id'] = Auth::user()->id;

        $item = Item::create($validatedData);

        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        return view('item.show', ['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
