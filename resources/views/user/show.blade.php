@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card border-secondary">
                <div class="card-header bg-secondary text-white">
                    <span class="h3">{{ $user->name }}</span>
                    @if(Auth::user() == $user)
                        <a class="float-right h5 mt-1 mb-0" href="{{ route('users.edit', Auth::user()) }}"><i class="far fa-edit"></i></a>
                    @endif
                </div>
                <div class="card-body">
                    <table>
                        <tr>
                            <td>Email:</td>
                            <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                        </tr>
                        <tr>
                            <td>Postal Code:</td>
                            <td>{{ $user->postal_code }}</td>
                        </tr>
                        <tr>
                            <td>Phone Number:</td>
                            <td><a href="tel:{{ $user->phone_number }}">{{ $user->phone_number }}</a></td>
                        </tr>
                        @if(isset($user->facebook))
                            <tr>
                                <td>Facebook:</td>
                                <td><a href="https://facebook.com/{{ $user->facebook }}" target="_blank">{{ $user->facebook }}</a></td>
                            </tr>
                        @endif
                        @if(isset($user->twitter))
                            <tr>
                                <td>Twitter:</td>
                                <td><a href="https://twitter.com/{{ $user->twitter }}" target="_blank">{{ $user->twitter }}</a></td>
                            </tr>
                        @endif
                        @if(isset($user->github))
                            <tr>
                                <td>GitHub:</td>
                                <td><a href="https://github.com/{{ $user->github }}" target="_blank">{{ $user->github }}</a></td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection()
