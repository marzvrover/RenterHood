@extends('layouts.app')
@section('content')
    <div class="card border-primary mb-3 mx-auto" style="max-width: 75%;">
        <div class="card-header bg-secondary text-white h4">Add Item</div>
        <div class="card-body">
            <form>
                <fieldset>
                    <div class="form-group">
                        <label>Item Title</label>
                        <input type="text" class="form-control title" id="itemTitle" placeholder="Enter Item Title">

                    </div>
                    <div class="form-group">
                        <label>Postal Code</label>
                        <input type="text" class="form-control postal_code" id="itemPostalCode" placeholder="Enter Postal Code">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" class="form-control price" id="itemPrice" placeholder="Enter Price">
                    </div>
                    <div class="form-group">
                        <label>Item Description</label>
                        <textarea class="form-control" id="itemDescription" placeholder="Enter Item Description" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Picture Upload</label>
                        <input type="file" class="form-control-file" id="itemPicture">
                        <small id="fileHelp" class="form-text text-muted">Upload a picture of the item you would like to rent out.</small>
                    </div>
                    <button type="submit" class="btn btn-primary ">Submit</button>
                </fieldset>
            </form>
        </div>
    </div>
@endsection()
