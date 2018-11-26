@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form class="card border-secondary" method="POST" enctype="multipart/form-data" action="{{ route('items.update', $item) }}">
                @csrf
                @method('PATCH')
                <div class="card-header bg-secondary text-white">
                    <input type="text" name="name" aria-label="name" placeholder="Name&hellip;" value="{{ old('name') ?? $item->name }}" class="text-primary border-secondary p-1" required/>
                    <button class="btn btn-link text-white float-right p-1" type="submit"><i class="fa fa-check"></i></button>
                </div>
                <div class="card-body">
                    <table>
                        <tr>
                            <td><label for="description">Description:</label></td>
                            <td>
                                <textarea type="text" name="description" id="description"
                                          placeholder="Description&hellip;"
                                          class="text-primary border-secondary p-1"
                                          rows=10 required>
                                    {{ old('description') ?? $item->description }}
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="postal_code">Postal Code:</label></td>
                            <td><input type="text" name="postal_code" id="postal_code" placeholder="Postal Code&hellip;" value="{{ old('postal_code') ?? $item->postal_code }}" class="text-primary border-secondary p-1" required/></td>
                        </tr>
                        <tr>
                            <td><label for="price">Price:</label></td>
                            <td><input type="number" name="price" step="0.01" id="price" placeholder="price&hellip;" value="{{ old('price') ?? $item->price }}" class="text-primary border-secondary p-1" required/></td>
                        </tr>
                        <tr>
                            <td><label for="picture">Picture:</label></td>
                            <td>
                                <img class="inventory-image" style="height: 200px; width: 300px;" src="{{ asset($item->picture) }}" data-src="" alt="Image of {{ $item->name }}">
                            </td>
                        </tr>
                    </table>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
        </div>
    </div>
@endsection()
