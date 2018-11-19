@extends('layouts.app')
@section('content')
    <div class="card border-primary mb-3 mx-auto" style="max-width: 75%;">
        <div class="card-header bg-secondary text-white h4">Add Item</div>
        <div class="card-body">
            <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <div class="form-group">
                        <label>Item Title</label>
                        <input name="name" type="text" class="form-control title" id="itemTitle" placeholder="Enter Item Title" required value="{{ old('name') }}" />

                    </div>
                    <div class="form-group">
                        <label>Postal Code</label>
                        <input name="postal_code" type="text" class="form-control postal_code" id="itemPostalCode" placeholder="Enter Postal Code" required value="{{ old('postal_code') }}" />
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input name="price" type="number" step="0.01" class="form-control price" id="itemPrice" placeholder="Enter Price" required value="{{ old('price') }}" />
                    </div>
                    <div class="form-group">
                        <label>Item Description</label>
                        <textarea name="description" class="form-control" id="itemDescription" placeholder="Enter Item Description" rows="5" required>{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Picture Upload</label>
                        <input name="picture" type="file" accept="image/*" class="form-control-file" id="itemPicture" />
                        <small id="fileHelp" class="form-text text-muted">Upload a picture of the item you would like to rent out.</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </fieldset>
            </form>
            @if ($errors->any())
                <div class="alert alert-danger mt-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection()
