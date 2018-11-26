@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form class="card border-secondary" method="POST" action="{{ route('users.update', $user) }}">
                @csrf
                @method('PATCH')
                <div class="card-header bg-secondary text-white">
                    <input type="text" name="name" aria-label="name" placeholder="Name&hellip;" value="{{ old('name') ?? $user->name }}" class="text-primary border-secondary p-1" required/>
                    <button class="btn btn-link text-white float-right p-1" type="submit"><i class="fa fa-check"></i></button>
                </div>
                <div class="card-body">
                    <table>
                        <tr>
                            <td><label for="email">Email:</label></td>
                            <td><input type="email" name="email" id="email" placeholder="Email&hellip;" value="{{ old('email') ?? $user->email }}" class="text-primary border-secondary p-1" required/></td>
                        </tr>
                        <tr>
                            <td><label for="postal_code">Postal Code:</label></td>
                            <td><input type="text" name="postal_code" id="postal_code" placeholder="Postal Code&hellip;" value="{{ old('postal_code') ?? $user->postal_code }}" class="text-primary border-secondary p-1" required/></td>
                        </tr>
                        <tr>
                            <td><label for="phone_number">Phone Number:</label></td>
                            <td><input type="tel" name="phone_number" id="phone_number" placeholder="Phone Number&hellip;" value="{{ old('phone_number') ?? $user->phone_number }}" class="text-primary border-secondary p-1" required/></td>
                        </tr>
                        <tr>
                            <td><label for="facebook">Facebook:</label></td>
                            <td><input type="text" name="facebook" id="facebook" placeholder="Facebook&hellip;" value="{{ old('facebook') ?? $user->facebook }}" class="border-secondary p-1"/></td>
                        </tr>
                        <tr>
                            <td><label for="twitter">Twitter:</label></td>
                            <td><input type="text" name="twitter" id="twitter" placeholder="Twitter&hellip;" value="{{ old('twitter') ?? $user->twitter }}" class="border-secondary p-1"/></td>
                        </tr>
                        <tr>
                            <td><label for="github">GitHub:</label></td>
                            <td><input type="text" name="github" id="github" placeholder="GitHub&hellip;" value="{{ old('github') ?? $user->github }}" class="border-secondary p-1"/></td>
                        </tr>
                    </table>
                    <button class="btn btn-danger float-right" form="delete">Delete</button>
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
            <form method="POST" action="{{ route('users.destroy', $user) }}" id="delete">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
@endsection()
