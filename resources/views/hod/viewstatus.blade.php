@extends('hod.layout')
@section('matter')



          <h3>STATUS</h3>
          <br>
          <div class="table-responsive">
            <table class="table table-sm table-hover">
              <thead>
                <tr>
                  
                  <th>Requested Item</th>
                  <th>Quantity</th>
                  <th>Status</th>
                  <th></th>
                  <th></th>
                
                </tr>
              </thead>
              <tbody>
              
              <?php $i=1; ?>
              @foreach ($items as $item)
              {!! Form::open(array('route' => 'indent.store')) !!}
              
                <tr>
                   <td>{{$item->item}}</td>
                   <input type="hidden" name="item" value="{{$item->item}}"/>
                  <td><input type="number" name="quantity" value="{{$item->quantity}}"/> </td>
                  <input type="hidden" name="department" value="{{\Auth::user()->department}}"/>
                  <input type="hidden" name="indentno" value="{{$i++}}"/>
                  <td><span class="badge badge-warning">Pending</span></td>
                  <td><button type="submit" class="btn btn-primary">Approve</button></td>
                  {!! Form::close() !!}
                  
                  <td><a href="{{route('facultystatus',[$item->item])}}"><button class="btn btn-primary">View Details</button></a></td>
              
                 
                  

                  
                </tr>
                
               
              @endforeach
              


              </tbody>
            </table>
            <a href="{{ URL::route('generateindent') }}">
              <button type="submit" class="btn btn-primary">Generate Indent</button></a>
          </div>

@endsection
