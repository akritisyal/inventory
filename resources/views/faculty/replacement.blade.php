@extends('faculty.layout')
@section('matter')
<?php use App\Http\Controllers\UsersController; ?>

<h2>Asset Request Form</h2>
<hr>
<div class="form-row">
  <div class="form-group col-md-3">
      <label for="name">Name:</label>
      <input class="form-control" id="name" type="text" placeholder="{{ \Auth::user()->name }}" disabled>
    </div>
    <div class="form-group col-md-3">
      <label for="dept">Department:</label>
      <input class="form-control" id="dept" type="text" placeholder="{{ UsersController::department(\Auth::user()->department) }}" disabled>
    </div>
    <div class="form-group col-md-4">
    <label for="indent-date"> Date: </label>

    <input class="form-control" id="indent-date" placeholder="{{ UsersController::date()}}" disabled>
  </div>
  
    <div class="form-group col-md-3">
      <input class="form-control" id="type" type="hidden" value="replace">
    </div>

</div>


{!! Form::open(array('route' => 'replace.store')) !!}

<div class="form-group">
<table class="table table-sm table-hover">
<!-- <thead id="item-table"><td>Item</td><td>Quantity</td></thead> -->
<tr>
<td>
  <div id="add-item">
    <div class="form-row">
      <div class="form-group col-md-10">
        <label>Select Asset</label>
        <select class="form-control" id="asset-list" name="item">
          <option value="1">one</option>
          <option value="2">two</option>
          <option value="3">three</option>
        </select>
      </div>
      </td>
      <td>
      <div class="form-group col-md-4">
        <label> Reason For Replacement </label>
        <textarea class="form-control" rows="4"></textarea>
      </div>
      </td>
      <td> </br> <button class="btn btn-success" id="submit">Submit</button></td>



  {!! Form::close() !!}

    </div>
  </div>

@endsection

