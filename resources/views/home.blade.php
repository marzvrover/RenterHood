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
                        <table id="ApprovalItems">
                            <tr>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>User Requesting</th>
                                <th>Accept/Deny</th>
                            </tr>
                            <tr>
                                <td>
                                    Carpet Steamer
                                </td>
                                <td>
                                    $20.00
                                </td>
                                <td>
                                    Lovely carpet steamer.
                                </td>
                                <td>
                                    Whitney Carrier
                                </td>
                                <td class="text-center">
                                    <a role="button" class="btn btn-sm btn-primary" href="#">Accept</a>
                                    <a role="button" class="btn btn-sm btn-primary" href="#">Deny</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 20px" class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-secondary">
                <div class="card-header bg-secondary text-white" style="font-size: large">Pending Requested Items</div>
                <div class="card-body">
                    <div style="margin-top: 10px">
                        <table id="ApprovalItems">
                            <tr>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Item Owner</th>
                                <th>Status</th>
                            </tr>
                            <tr>
                                <td>
                                    Golf Cart
                                </td>
                                <td>
                                    $100.00
                                </td>
                                <td>
                                    Get a birdie and I will take $5 off!
                                </td>
                                <td>
                                    Matt Dooley
                                </td>
                                <td>
                                    Waiting for Approval
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
