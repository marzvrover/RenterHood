@if(Auth::user() && Auth::user()->isRequesting($item))
    <button class="btn btn-outline-primary float-right disabled">Requested</button>
@elseif(Auth::user() && Auth::user()->isRenting($item))
    <button class="btn btn-outline-success float-right disabled">Renting</button>
@elseif(Auth::user())
    <form action="{{ route('items.rent', $item->id) }}" method="POST">
        @csrf
        <button class="btn btn-primary float-right">Rent</button>
    </form>
@else
    <a class="btn btn-outline-primary float-right" href="{{ route('login') }}">Please Login</a>
@endif
