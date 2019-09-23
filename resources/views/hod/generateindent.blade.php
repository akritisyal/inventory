@extends('hod.layout')
@section('matter')
<?php use App\Http\Controllers\UsersController; ?>
          <h3>Indent</h3>
          <br>
          <div class="table-responsive">
            <table class="table table-sm table-hover">
              <thead>

               

               <tr>
              <label for="department" id="" class=""><strong>Department</strong></label>
             <input id="dept" class="form-control" name="department" type="text" value="{{UsersController::department()}}" disabled> </tr>

          <tr>    <label for="date"><strong> Date:</strong> </label>
    <input class="form-control" id="date" placeholder="{{ UsersController::date() }}" disabled> </tr>

                <tr>
                  
                  <th> Item</th>
                  <th>Quantity</th>
                
                </tr>
              </thead>
              <tbody>
              <?php $i=0; ?>
               @foreach ($data as $d)
               {!! Form::open(array('route' => 'indentsubmit')) !!}
               <tr>
              
                
                  
                   <td>{{$d->item}}</td>
                   <input type="hidden" name="item{{$i}}" value="{{$d->item}}"/>
                   <td>{{$d->quantity}}</td> 
                  <input type="hidden" name="quantity{{$i}}" value="{{$d->quantity}}"/>
                  <?php $i++; ?>
                </tr>
                
              @endforeach
              

              </tbody>
              <tfoot>
              <tr><td>
              <input type="hidden" value="{{$i}}" name="i"/>
              <input type="hidden" value="1" name="indentno"/>
              <button type="submit" class="btn btn-primary">Submit</button>
              {!! Form::close() !!}
              </tr></tf>
              </tfoot>
            </table>
          </div>

@endsection