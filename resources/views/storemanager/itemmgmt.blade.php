@extends('storemanager.layout')
@section('matter')
<div class="row">
    <div class="col-sm-4">
      <div class="card text-white bg-info">
        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
        <div class="card-body">
          <h5 class="card-title">1234<small>&nbsp;<em>Items</em></small></h5>
          <a href="{{route('fixedasset')}}" class="btn btn-light btn-sm">Fixed Assets ></a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card text-white bg-secondary">
        <div class="card-body">
        <h5 class="card-title">1234<small>&nbsp;<em>Items</em></small></h5>
          <a href="{{route('nonconsumables')}}" class="btn btn-light btn-sm">Non Consumables > </a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
            <div class="card text-white bg-success">
              <div class="card-body">
                <h5 class="card-title">1234<small>&nbsp;<em>Items</em></small></h5>
                <a href="{{route('consumables')}}" class="btn btn-light btn-sm">Consumables ></a>
              </div>
            </div>
          </div>
  </div>
  
 

@endsection