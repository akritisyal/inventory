@extends('storemanager.layout')
@section('matter')
<?php use App\Http\Controllers\UsersController; ?>
<script>
  $(document).ready(function() {
    $('#asset-list').select2({
      theme: "bootstrap",
      width: null
    });
    $('#id').click(function() {
      var asset = $('#asset-list').val();
      var qty = $('#qty').val();
      // $('#items').append()
      // console.log(typeof asset);
      // $('#item-table').append('<tr><td>"'+asset+'"</td><td>"'+qty+'"</td><td><button>Remove</button></td></tr>');
      $('#item-table').append('<tr><td>"'+asset+'"</td><td>"'+qty+'"</td><td></td></tr>');
      return false;
    });
  });
</script>



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
    <label for="indent-date">Indent Date: </label>

    <input class="form-control" id="indent-date" placeholder="{{ UsersController::date()}}" disabled>
  </div>
</div>

{!! Form::open(array('route' => 'requests.store')) !!}

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
        <label> Quantity </label>
        <input class="form-control" type="number" id="qty" name="quantity"></input>
      </div>
      </td>
      <td> </br> <button class="btn btn-success" id="submit">Submit</button></td>



  {!! Form::close() !!}

    </div>
  </div>
  <!-- </table>
</div>
<table>
<thead><tr><th>Item</th></tr><tr><th>Quantity</th></tr><</thead>

</thead> -->

 
 <!-- <table class="table table-sm table-hover">
    <thead id="item-table">
      <tr>
        <th>Name</th>
        <th>Qty</th>
        <th></th>
      </tr>
    </thead>

  </table> -->


<hr>
@endsection
