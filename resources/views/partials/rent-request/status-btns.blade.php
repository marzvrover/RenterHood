<form action="{{ route('items.rent.update', [$request->item, $request]) }}" method="POST">
    @method('PUT')
    @csrf
    @if($request->accepted === null)
        <button class="btn btn-success float-right" name="accept">Accept</button>
        <button class="btn btn-danger float-right"  name="deny">Deny</button>
    @elseif($request->item->rented && ! $request->resolved)
        <button class="btn btn-warning float-right" name="return">Return</button>
    @endif
</form>
