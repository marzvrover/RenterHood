<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SearchController extends Controller
{
    public function search(){
        $filter = Str::lower(request('filter'));
        $query = request('query');

        if(Str::is($filter,'postal')){
            $items = Item::where('postal_code', $query)->where('rented', 0)->get();
        }
        else{
            $items = Item::search($query)->where('rented', 0)->get();
        }

        return view('search', ['items' => $items]);
    }
}
