@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 offset-0">
                <div class="card border-secondary mb-3 mx-auto">
                    <div class="card-header bg-secondary text-white h4">
                        <span class="float-left">{{ $item->name }}</span>
                        <span class="float-right">{{ $item->price }}</span>
                    </div>
                    <div class="card-body">
                        <div>
                            <img class="inventory-image float-left d-none d-lg-inline" style="height: 200px; width: 300px;" src="{{ asset($item->picture) }}" data-src="" alt="Image of {{ $item->name }}">
                            <div class="text-center d-lg-none">
                                <img class="inventory-image" style="height: 200px; width: 300px;" src="{{ asset($item->picture) }}" data-src="" alt="Image of {{ $item->name }}">
                            </div>
                            <div class="float-left mt-4 mt-lg-2 ml-4 d-inline">
                                <span class="h5">Price</span>
                                <p>{{ $item->price }}<p>
                                <span class="h5">Postal Code</span>
                                <p>{{ $item->postal_code }}<p>
                                <span class="h5">Description</span>
                                <p>{{ $item->description }}</p>
                                @include('partials.rent-request.rent-btn')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                @include('partials.user.card')
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mt-4">
                @include('partials.item.reviews-card')
            </div>
            <div class="col-lg-4 mt-4">
                @include('partials.user.reviews-card')
            </div>
        </div>
    </div>
@endsection
