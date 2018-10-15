<?php
    /*
     * This array is for the dummy static data.
     */
    $items = [
        [
            'title' => 'Carpet Steamer',
            'image' => 'img/CarpetSteamer.jpg',
            'postal_code' => '68102',
            'short_description' => 'Carpet steamer that has only been used a few times. Rent for a week at a time.',
        ],
        [
            'title' => 'Rider Lawn Mower',
            'image' => 'img/RiderLawnMower.jpg',
            'postal_code' => '68102',
            'short_description' => 'Rider lawn more for rent. Must have a trailer to pick it up. May need gas before using.',
        ],
        [
            'title' => 'Chainsaw',
            'image' => 'img/STIHLChainsaw.png',
            'postal_code' => '68102',
            'short_description' => 'STIHL brand chainsaw. Works like a charm. Will be full of gas and oil when picked up.',
        ],
        [
            'title' => 'Sewing Machine',
            'image' => 'img/sewingMaching.jpeg',
            'postal_code' => '68102',
            'short_description' => 'Brand new sewing machine out of the box. Willing to rent out for long periods of time.',
        ],
        [
            'title' => 'Snow Blower',
            'image' => 'img/snowBlower.jpeg',
            'postal_code' => '68102',
            'short_description' => 'It\'s almost that time of year again. For rent for a day at a time.',
        ],
        [
            'title' => 'Dewalt Drill',
            'image' => 'img/DewaltDrill.jpeg',
            'postal_code' => '68102',
            'short_description' => 'Dewalt power drill. Battery and charger included when rented.',
        ],
    ];
?>

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-8 text-center offset-lg-2">
            @include('partials.forms.search')
        </div>
    </div>
    <div class="container" style="padding: 30px">
         <div class="row">
             @forelse($items as $item)
                 <div class="col-md-4">
                     <div class="card mb-4 border-secondary box-shadow item">
                         <img class="card-img-top inventory-image" style="height: 200px" src="{{ asset($item['image']) }}" data-src="" alt="Image of {{ $item['title'] }}">
                         <div class="card-body border-secondary">
                             <h1 class="title">{{ $item['title'] }}</h1>
                             <span class="postal_code">Postal Code: {{ $item['postal_code'] }}</span>
                             <p class="card-text">{{ $item['short_description'] }}</p>
                             <div class="d-flex justify-content-between align-items-center">
                                 <div class="btn-group">
                                     <button type="button" class="btn btn-sm btn-outline-primary">View</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             @empty
                <div class="col-md-12 text-center text-primary">
                    Sorry, but there is no items matching the search "{{ request('query') }}"
                </div>
             @endforelse
         </div>
    </div>

@endsection
