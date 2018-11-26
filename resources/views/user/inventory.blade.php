@extends('layouts.app')
@section('content')

    <div class="container" style="padding: 30px">
        <div class="row">
            @forelse(Auth::user()->items as $item)
                @include('partials.item-result')
            @empty
                <div class="col-md-12 text-center text-primary">
                    Sorry, but you do not have any items.
                    <br>
                    <a role="button" class="btn btn-lg btn-primary d-inline-block mt-5" href="{{ route('items.create') }}">Add Item</a>
                </div>
            @endforelse
        </div>
    </div>

@endsection()
