@extends('app') 

@section('list-item')
<li class="nav-item">
                <a class="nav-link active" href="{{route('role')}}">
                  <span data-feather="home"></span>
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('request1')}}">
                  <span data-feather="plus-circle"></span>
                  New Request
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('replacement1')}}">
                  <span data-feather="repeat"></span>
                  Replacement Request
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('removefaculty')}}">
                  <span data-feather="users"></span>
                  Remove faculty
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('viewstatus')}}">
                  <span data-feather="sliders"></span>
                  View Status
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('assignitems')}}">
                  <span data-feather="send"></span>
                  Assign Items
                </a>
              </li>
@endsection

@section('content')
        @yield('matter')
@endsection