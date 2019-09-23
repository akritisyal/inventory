@extends('hod.layout')
@section('matter')

          
          
               
          <h2>Current Users</h2>
          <div class="table-responsive">
            <table class="table table-sm table-hover">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>email</th>
                  <th> </th>
                   </tr>
              </thead>
                    @foreach($fac as $f)
                    @if($f->status==1)
                    <tr>
                    <td>{{$f->name}}</td>
                    <td>{{$f->email}}</td>

                    <td><a href="{{route('remove', [$f->email])}}"><button class="btn btn-primary">Remove</button></a></td>
                    </tr>   
                    @endif     
                    @endforeach

              </tbody>
            </table>
          </div>


@endsection
