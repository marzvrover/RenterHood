@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-secondary">
                <div class="card-header bg-secondary text-white" style="font-size: large">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p style="font-size: medium">You are logged in!</p>

                    <div style="margin-top: 30px" class="text-center">

                        <a role="button" class="btn btn-lg btn-primary" href="{{ route('items.create') }}">Add Item</a>
                        <a role="button" class="btn btn-lg btn-primary" href="{{ route('inventory') }}">View Inventory</a>
                        <a role="button" class="btn btn-lg btn-primary" href="{{ route('users.show', Auth::user()) }}">View Profile</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
