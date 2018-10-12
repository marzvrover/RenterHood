@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-5">
        <div class="card border-secondary">
            <div class="card-header bg-secondary text-white">{{ $user->name }}</div>
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
                        <td>{{ $user->phone_number }}</td>
                    </tr>
                    @if(isset($user->facebook))
                        <tr>
                            <td>Facebook</td>
                            <td>{{ $user->facebook }}</td>
                        </tr>
                    @endif
                    @if(isset($user->twitter))
                        <tr>
                            <td>Twitter</td>
                            <td>{{ $user->twitter }}</td>
                        </tr>
                    @endif
                    @if(isset($user->github))
                        <tr>
                            <td>GitHub</td>
                            <td>{{ $user->github }}</td>
                        </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>
</div>
@endsection()
