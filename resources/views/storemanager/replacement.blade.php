@extends('storemanager.layout')
@section('matter')
<?php use App\Http\Controllers\UsersController; ?>
<h2>Asset Replacement Form</h2>
<hr>
<form>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="name">Name:</label>
      <input class="form-control" id="name" type="text" placeholder="{{ \Auth::user()->name }}" disabled>
    </div>
    <div class="form-group col-md-3">
      <label for="dept">Department:</label>
      <input class="form-control" id="dept" type="text" placeholder="{{ UsersController::department(\Auth::user()->department)}} " disabled>
    </div>
    <div class="form-group col-md-4">
    <label for="indent-date">Indent Date: </label>
    <input class="form-control" id="indent-date" placeholder="{{ UsersController::date() }}" disabled>
  </div>
  </div>
  
  <hr>
        <div class="form-row">

    <div class="form-group col-md-3">
        <label>Select Asset</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Asset 1</option>
                  <option>Asset 2</option>
                  <option>Asset 3</option>
                  <option>Asset 4</option>
                  <option>Asset 5</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                    <label>Quantity</label>

                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Asset 1</option>
                      <option>Asset 2</option>
                      <option>Asset 3</option>
                      <option>Asset 4</option>
                      <option>Asset 5</option>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                        <label>Reason for Replacement</label>
                        <textarea class="form-control" rows="4"></textarea>
                      </div>
</div>
<button class="btn btn-default btn-sm">+ Add More</button>
<hr>
  <a href="#" class="btn btn-success">Submit for approval</a>
</form>
<hr>
@endsection
