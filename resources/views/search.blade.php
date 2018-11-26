@extends('layouts.app')

@section('content')
    <div class="container" style="padding: 30px">
         <div class="row">
             @forelse($items as $item)
                 @include('partials.item-result')
             @empty
                <div class="col-md-12 text-center text-primary">
                    Sorry, but there is no items matching the search "{{ request('query') }}"
                </div>
             @endforelse

         </div>
    </div>

@endsection
@section('footer')
    <img class="ml-2" src="/img/Algolia.svg" alt="Algolia Logo">
@endsection

