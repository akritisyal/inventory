@extends('faculty.layout')
@section('content')
<?php use App\Http\Controllers\UsersController; ?>
<h3><center>MY PROFILE</center></h3>
<br>
 <table class="table table-sm table-hover">
              
              <tr>
                  <td>NAME</td>
                  <td><?php echo \Auth::user()->name; ?></td>
                </tr>
                <tr>
                  <td>E-MAIL</td>
                  <td><?php echo \Auth::user()->email; ?></td>
                </tr>
                <tr>
                  <td>ROLE</td>
                  <td>Faculty</td>
                </tr>
                <tr>
                  <td>DEPARTMENT</td>
                  
                  <td>{{UsersController::department(\Auth::user()->department)}}</td>
                 
                </tr>
                <tr>
                  <td>Date of registration</td>
                  <td><?php echo \Auth::user()->created_at; ?></td>
                </tr>
                <tr>
                  <td>Last updated</td>
                  <td><?php echo \Auth::user()->updated_at; ?></td>
                </tr>
 </table>

@endsection