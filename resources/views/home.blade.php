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

                        <a role="button" class="btn btn-lg btn-primary @if(request()->route()->getName() == 'add') active @endif" href="{{ route('add') }}">Add Item</a>
                        <a role="button" class="btn btn-lg btn-primary @if(request()->route()->getName() == 'inventory') active @endif" href="{{ route('inventory') }}">View Inventory</a>
                        <a role="button" class="btn btn-lg btn-primary @if(request()->route()->getName() == 'users.show') active @endif" href="{{ route('users.show', Auth::user()) }}">View Profile</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
