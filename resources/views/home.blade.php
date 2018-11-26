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

                    <div style="margin-top: 10px" class="text-center">

                        <a role="button" class="btn btn-lg btn-primary" href="{{ route('items.create') }}">Add Item</a>
                        <a role="button" class="btn btn-lg btn-primary" href="{{ route('inventory') }}">View Inventory</a>
                        <a role="button" class="btn btn-lg btn-primary" href="{{ route('users.show', Auth::user()) }}">View Profile</a>

                    </div>

                    <div style="margin-top: 50px">
                        <h5>Items for Approval</h5>
                        <table id="ApprovalItems">
                            <tr>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>User Requesting</th>
                                <th>Accept/Deny</th>
                            </tr>
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
</div>
@endsection
