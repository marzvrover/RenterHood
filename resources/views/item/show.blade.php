@extends('layouts.app')
@section('content')
    <div class="card border-primary mb-3 mx-auto" style="max-width: 60%;">
        <div class="card-header bg-secondary text-white h4">
            <span class="float-left">{{ $item->name }}</span>
            <span class="float-right">${{ $item->price }}</span>
        </div>
        <div class="card-body">
            <div>
                <img class="inventory-image float-left" style="height: 200px; width: 300px;" src="{{ asset($item->picture) }}" data-src="" alt="Image of {{ $item->name }}">
                <div class="float-left" style="padding-left: 40px; width: 400px;">
                    <h5>Price</h5>
                    <p>${{ $item->price }}<p>
                    <h5>Postal Code</h5>
                    <p>{{ $item->postal_code }}<p>
                    <h5>Description</h5>
                    <p class="card-text">{{ $item->description }}</p>
                    <h5>{{ $item->user->name}}'s Details:</h5>
                    <p>Phone: {{ $item->user->phone_number}}    Email: {{ $item->user->email}}<p>
                    <button class="btn btn-primary float-right" id="rentButton">Rent</button>
                </div>
            </div>
        </div>
    </div>
@endsection
