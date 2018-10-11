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
                    </div>
                    <input type="text" class="form-control" id="search-terms" placeholder="Search&hellip;">
                    <div class="input-group-append">
                        <button style="border:1px solid #cbc8d0" class="btn">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container" style="padding: 30px">
         <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="#" alt="Item For Sale">
                <div class="card-body">
                    <h5>Carpet Steamer</h5>
                    <h6>Postal Code: 68102</h6>
                    <p class="card-text">Carpet steamer that has only been used a few times. Rent for a week at a time.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-primary">View</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

             <div class="col-md-4">
                 <div class="card mb-4 box-shadow">
                     <img class="card-img-top" data-src="" alt="Item For Sale">
                     <div class="card-body">
                         <h5>Rider Lawn Mower</h5>
                         <h6>Postal Code: 68102</h6>
                         <p class="card-text">Rider lawn more for rent. Must have a trailer to pick it up. May need gas before using.</p>
                         <div class="d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                                 <button type="button" class="btn btn-sm btn-outline-primary">View</button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-md-4">
                 <div class="card mb-4 box-shadow">
                     <img class="card-img-top" data-src="" alt="Item For Sale">
                     <div class="card-body">
                         <h5>Chainsaw</h5>
                         <h6>Postal Code: 68102</h6>
                         <p class="card-text">STIHL brand chainsaw. Works like a charm. Will be full of gas and oil when picked up.</p>
                         <div class="d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                                 <button type="button" class="btn btn-sm btn-outline-primary">View</button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-md-4">
                 <div class="card mb-4 box-shadow">
                     <img class="card-img-top" data-src="" alt="Item For Sale">
                     <div class="card-body">
                         <h5>Sewing Machine</h5>
                         <h6>Postal Code: 68102</h6>
                         <p class="card-text">Brand new sewing machine out of the box. Willing to rent out for long periods of time.</p>
                         <div class="d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                                 <button type="button" class="btn btn-sm btn-outline-primary">View</button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-md-4">
                 <div class="card mb-4 box-shadow">
                     <img class="card-img-top" data-src="" alt="Item For Sale">
                     <div class="card-body">
                         <h5>Snow Blower</h5>
                         <h6>Postal Code: 68102</h6>
                         <p class="card-text">It's almost that time of year again. For rent for a day at a time.</p>
                         <div class="d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                                 <button type="button" class="btn btn-sm btn-outline-primary">View</button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="card mb-4 box-shadow">
                     <img class="card-img-top" data-src="" alt="Item For Sale">
                     <div class="card-body">
                         <h5>Dewalt Drill</h5>
                         <h6>68102</h6>
                         <p class="card-text">Dewalt power drill. Battery and charger included when rented.</p>
                         <div class="d-flex justify-content-between align-items-center">
                             <div class="btn-group">
                                 <button type="button" class="btn btn-sm btn-outline-primary">View</button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

         </div>
    </div>

@endsection
