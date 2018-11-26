@extends('layouts.app')
@section('content')

    <div class="container" style="padding: 30px">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 border-secondary box-shadow item">
                    <img class="card-img-top inventory-image" style="height: 200px" src="/img/CarpetSteamer.jpg" data-src="" alt="Image of">
                    <div class="card-body border-secondary">
                        <h1 class="title">Carpet Steamer</h1>
                        <span class="postal_code">Postal Code: 68102</span>
                        <p class="card-text">Description BLA BLA BLA</p>
                        <div class="text-center">
                            <div style="margin-top: 5px;" class="btn-group">
                                <a role="button" class="btn btn-sm btn-outline-primary" href="#">View</a>
                                <a role="button" class="btn btn-sm btn-outline-primary" href="{{ route('items.edit', 1) }}">Edit</a>
                                <a role="button" class="btn btn-sm btn-outline-primary" href="#">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection()
