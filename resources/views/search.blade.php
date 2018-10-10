@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 text-center offset-2">
            <form class="my-2 my-lg-0">
                <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">

                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>All</option>
                            <option value="1">Postal Code</option>
                            <option value="2">Keywords</option>
                        </select>



                        {{--<button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Postal Code</a>
                            <a class="dropdown-item" href="#">Keywords</a>
                        </div>--}}
                    </div>
                    <input type="text" class="form-control" id="search-terms" placeholder="Search&hellip;">
                    <div class="input-group-append">
                        <button class="btn">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
