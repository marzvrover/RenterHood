<div class="col-md-4">
    <div class="card mb-4 border-secondary box-shadow item">
        <img class="card-img-top inventory-image" style="height: 200px" src="{{ asset($item->picture) }}" data-src="" alt="Image of {{ $item->name }}">
        <div class="card-body border-secondary">
            <div>
                <h1 class="title float-left">{{ $item->name }}</h1>
                <span class="text-primary font-weight-bold float-right">{{ $item->price }}</span>
                <div class="clearfix"></div>
            </div>
            <span class="postal_code">Postal Code: {{ $item->postal_code }}</span>
            <p class="card-text">{{ $item->short_description }}</p>
            <div class="text-center">
                <div class="btn-group">
                    <a role="button" class="btn btn-sm btn-outline-primary" href="{{ route('items.show', $item->id) }}">View</a>
                    @if(Auth::user()->id == $item->user->id)
                        <a role="button" class="btn btn-sm btn-outline-primary" href="{{ route('items.edit', $item->id) }}">Edit</a>
                    <form action="{{ route('items.destroy', $item->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button role="button" class="btn btn-sm btn-outline-primary border-left-0">Delete</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
