@extends('layouts.app')
@section('content')
<div class="row" style="margin-left: 10px">
    <div class="col-md-7 ">
        <div class="panel panel-default">
            <div class="panel-body">

                <div class="box box-info">

                    <div class="box-body">
                        <div>
                            <h4 class="text-primary">User's Name</h4></span>
                            <span><p>Rating: 4</p></span>
                        </div>
                        <div class="clearfix"></div>
                        <hr style="margin:5px 0 5px 0;">
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-md-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-md-2 col-form-label">Postal Code</label>
                        <div class="col-sm-10">
                            <input type="text" readonly="" class="form-control-plaintext" id="postalCode" value="61387">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-md-2 col-form-label">Phone Number</label>
                        <div class="col-sm-10">
                            <input type="text" readonly="" class="form-control-plaintext" id="phoneNum" value="402-678-9876">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-md-2 col-form-label">Link to Social Media</label>
                        <div class="col-sm-10">
                            <input type="text" readonly="" class="form-control-plaintext" id="socialMedia" value="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()
