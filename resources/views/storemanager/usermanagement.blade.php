@extends('storemanager.layout')
@section('top-items')
@endsection
@section('matter')
<h2><button class="btn btn-primary">Pending(5)</button></h2>
          <div class="table-responsive">
            <table class="table table-sm table-hover">
              <thead>
                <tr>
                  <th>username</th>
                  <th>email</th>
                  <th>role</th>
                  <th>Registered on</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                            <tr>
                              <td><i class="fa fa-user"></i>&nbsp;@admin</td>
                              <td>admin@igdtuw.com</td>
                              <td>Admin</td>
                              <td>Entry First Line 4</td>
                              <td><button class="btn btn-success btn-sm">Approve</button></td>
                              <td><button class="btn btn-secondary btn-sm">Reject</button></td>


                            </tr>
                            <tr>
                              <td><i class="fa fa-user"></i>&nbsp;@username2</td>
                              <td>something@igdtuw.com</td>
                              <td>Faculty</td>
                              <td>Entry Line 4</td>
                              <td><button class="btn btn-success btn-sm">Approve</button></td>
                              <td><button class="btn btn-secondary btn-sm">Reject</button></td>

                            </tr>
                            <tr>
                              <td><i class="fa fa-user"></i>&nbsp;@username3</td>
                              <td>email@igdtuw.com</td>
                              <td>HOD</td>
                              <td>Entry Last Line 4</td>
                              <td><button class="btn btn-success btn-sm">Approve</button></td>
                              <td><button class="btn btn-secondary btn-sm">Reject</button></td>

                            </tr>
                          
              </tbody>
            </table>
          </div>
<hr>
<h2>Current Users</h2>
<div class="table-responsive">
        <table class="table table-sm table-hover">
          <thead>
            <tr>
              <th>username</th>
              <th>email</th>
              <th>role</th>
              <th>Registered on</th>
            </tr>
          </thead>
          <tbody>
                        <tr>
                          <td><i class="fa fa-user"></i>&nbsp;@admin</td>
                          <td>admin@igdtuw.com</td>
                          <td>Admin</td>
                          <td>Entry First Line 4</td>


                        </tr>
                        <tr>
                          <td><i class="fa fa-user"></i>&nbsp;@username2</td>
                          <td>something@igdtuw.com</td>
                          <td>Faculty</td>
                          <td>Entry Line 4</td>

                        </tr>
                        <tr>
                          <td><i class="fa fa-user"></i>&nbsp;@username3</td>
                          <td>email@igdtuw.com</td>
                          <td>HOD</td>
                          <td>Entry Last Line 4</td>

                        </tr>
                      
          </tbody>
        </table>
      </div>
@endsection