@extends('vc.layout')
@section('matter')
<div class="row">
    <div class="col-sm-4">
      <div class="card text-white bg-info">
        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
        <div class="card-body">
          <h5 class="card-title">1234<small>&nbsp;<em>Items</em></small></h5>
          <a href="#" class="btn btn-light btn-sm">Fixed Assets ></a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card text-white bg-secondary">
        <div class="card-body">
        <h5 class="card-title">1234<small>&nbsp;<em>Items</em></small></h5>
          <a href="#" class="btn btn-light btn-sm">Non Consumables > </a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
            <div class="card text-white bg-success">
              <div class="card-body">
                <h5 class="card-title">1234<small>&nbsp;<em>Items</em></small></h5>
                <a href="#" class="btn btn-light btn-sm">Consumables ></a>
              </div>
            </div>
          </div>
  </div>
  
  <hr>

  <div class="row">
        <div class="col-sm-4">
          <div class="card border-primary">
                {{-- <div class="card-header">Receipts</div> --}}
            <div class="card-body text-primary">
                    <h5 class="card-title">Receipts</h5>
                    <a href="#" class="btn btn-info btn-sm">2 to Receive ></a>

            </div>
          </div>
        </div>
        <div class="col-sm-4">
                <div class="card border-primary">
                        {{-- <div class="card-header">New User Request</div> --}}
                  <div class="card-body text-primary">
                        <h5 class="card-title">New User Request</h5>
                          <a href="#" class="btn btn-info btn-sm">5 Pending ></a>
      
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                    <div class="card border-primary">
                            {{-- <div class="card-header">Transfers</div> --}}
                      <div class="card-body text-primary">
                            <h5 class="card-title">Transfers</h5>
                              <a href="#" class="btn btn-info btn-sm">5 New ></a>
          
                      </div>
                    </div>
                  </div>
            </div>

@endsection