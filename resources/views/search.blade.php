<?php
    /*
     * This array is for the dummy static data.
     */
    $items = [
        [
            'title' => 'Carpet Steamer',
            'postal_code' => '68102',
            'short_description' => 'Carpet steamer that has only been used a few times. Rent for a week at a time.',
        ],
        [
            'title' => 'Rider Lawn Mower',
            'postal_code' => '68102',
            'short_description' => 'Rider lawn more for rent. Must have a trailer to pick it up. May need gas before using.',
        ],
        [
            'title' => 'Chainsaw',
            'postal_code' => '68102',
            'short_description' => 'STIHL brand chainsaw. Works like a charm. Will be full of gas and oil when picked up.',
        ],
        [
            'title' => 'Sewing Machine',
            'postal_code' => '68102',
            'short_description' => 'Brand new sewing machine out of the box. Willing to rent out for long periods of time.',
        ],
        [
            'title' => 'Snow Blower',
            'postal_code' => '68102',
            'short_description' => 'It\'s almost that time of year again. For rent for a day at a time.',
        ],
        [
            'title' => 'Dewalt Drill',
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
                     <div class="card mb-4 border-secondary box-shadow">
                         <img class="card-img-top inventory-image" data-src="" alt="Image of {{ $item['title'] }}">
                         <div class="card-body border-secondary">
                             <h5>{{ $item['title'] }}</h5>
                             <h6>Postal Code: {{ $item['postal_code'] }}</h6>
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

             @endforelse
         </div>
    </div>

@endsection
