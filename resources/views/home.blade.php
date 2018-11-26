@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-secondary">
                <div class="card-header bg-secondary text-white" style="font-size: large">Quick Links</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div style="margin-top: 10px" class="text-center">

                        <a role="button" class="btn btn-lg btn-primary" href="{{ route('items.create') }}">Add Item</a>
                        <a role="button" class="btn btn-lg btn-primary" href="{{ route('inventory') }}">View Inventory</a>
                        <a role="button" class="btn btn-lg btn-primary" href="{{ route('users.show', Auth::user()) }}">View Profile</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top: 20px" class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-secondary">
                <div class="card-header bg-secondary text-white" style="font-size: large">Items for Approval</div>
                <div class="card-body">
                    <div style="margin-top: 10px">
                        @if(Auth::user()->requests->isEmpty())
                            You have no requests to rent your items.
                        @else
                            <table id="ApprovalItems">
                                <tr>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>User Requesting</th>
                                    <th>Accept/Deny</th>
                                </tr>
                                @foreach(Auth::user()->requests as $request)
                                <tr>
                                    <td>
                                        {{ $request->item->name }}
                                    </td>
                                    <td>
                                        {{ $request->item->price }}
                                    </td>
                                    <td>
                                        {{ $request->item->short_description }}
                                    </td>
                                    <td>
                                        {{ $request->requester->name }}
                                    </td>
                                    <td class="text-center">
                                        @include('partials.rent-request.status-btns')
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 20px" class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-secondary">
                <div class="card-header bg-secondary text-white" style="font-size: large">Requested Items</div>
                <div class="card-body">
                    <div style="margin-top: 10px">
                        @if(Auth::user()->requestings->isEmpty())
                            You are not requesting to rent any items.
                        @else
                            <table id="ApprovalItems">
                                <tr>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Item Owner</th>
                                    <th>Status</th>
                                </tr>
                                @foreach(Auth::user()->requestings as $request)
                                    <tr>
                                        <td>
                                            {{ $request->item->name }}
                                        </td>
                                        <td>
                                            {{ $request->item->price }}
                                        </td>
                                        <td>
                                            {{ $request->item->short_description }}
                                        </td>
                                        <td>
                                            {{ $request->requester->name }}
                                        </td>
                                        <td>
                                            @if($request->accepted === null)
                                                <span class="font-weight-bold text-warning">Waiting for Approval</span>
                                            @elseif($request->accepted == true)
                                                @if($request->resolved == true)
                                                    <span class="font-weight-bold text-success">Returned</span>
                                                @else
                                                    <span class="font-weight-bold text-success">Approved</span>
                                                @endif
                                            @elseif($request->accepted == false)
                                                <span class="font-weight-bold text-danger">Denied</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
