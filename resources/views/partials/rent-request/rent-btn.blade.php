@if(Auth::user() && Auth::user()->isRequesting($item))
    <button class="btn btn-outline-primary float-right disabled">Requested</button>
@else
    <form action="{{ route('items.rent', $item->id) }}" method="POST">
        @csrf
        <button class="btn btn-primary float-right">Rent</button>
    </form>
@endif
