@extends('layouts.app')

@section('content')
    <div class="container" style="padding: 30px">
        <div class="row">
            @forelse($items as $item)
                @include('partials.item-result')
            @empty
                <div class="col-md-12 text-center text-primary">
                    Sorry, but there are no items.
                </div>
            @endforelse
        </div>
    </div>
@endsection
