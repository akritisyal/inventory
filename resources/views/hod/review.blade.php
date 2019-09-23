@extends('hod.layout')
@section('matter')

<h2>Review Request</h2>
<hr>

    <div class="col-md-3">
      <b> Name: </b> {{ $user }}
    </div>
    <div class="col-md-3">
      <b>Department:</b>
      department
    </div>
    <div class="col-md-6">
    <b>Indent Date: </b>
    {{ date('l jS \of F Y h:i:s A') }}
    </div>

  <hr>
  <h3>
      Item Details:
  </h3>
  <div class="table-responsive">
        <table class="table table-sm">
          <thead>
            <tr>
              <th>Item Name:</th>
              <th>Quantity</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                  Asset1 
              </td>
              <td>
                  1
              </td>
            </tr>
          </tbody>
        </table>
  </div>
  <hr>
  <h3>
    Suggested Supplier:
</h3>
  <div class="table-responsive">
        <table class="table table-sm">
          <thead>
            <tr>
              <th>Name:</th>
              <th>Address: </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                  ABC
              </td>
              <td>
                  56, GK-1, Delhi
              </td>
            </tr>
          </tbody>
        </table>
  </div>
  <hr>
  <div class="container d-flex bd-highlight mb-3">
        <div class="mr-auto p-1 bd-highlight">
                <a class="btn btn-primary" href="/newrequest">< Go Back</a>

        </div>
        
        <div class="p-2 bd-highlight">
            <a class="btn btn-success" href="/successful">Submit ></a>
        </div>

        
      
      </div>
@endsection
