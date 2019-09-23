@extends('app') 

@section('list-item')
<li class="nav-item">
                <a class="nav-link active" href="{{route('role')}}">
                  <span data-feather="home"></span>
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('request')}}">
                  <span data-feather="plus-circle"></span>
                  New Request
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('replacement')}}">
                  <span data-feather="repeat"></span>
                  Replacement Request
                </a>
              </li>
              
@endsection

@section('content')
        @yield('matter')
@endsection