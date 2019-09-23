                    
                    @extends('hod.layout')
                    @section('matter')
                    
                    
                    @foreach ($names as $name)
                  
                  
                  <li>{{$name->name}}</li>
                  
                  
                  
                  @endforeach
                  
                  @endsection