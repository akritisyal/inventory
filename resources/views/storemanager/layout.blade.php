@extends('app') 

@section('list-item')
<li class="nav-item">
                <a class="nav-link active" href="{{route('role')}}">
                  <span data-feather="home"></span>
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('request2')}}">
                  <span data-feather="plus-circle"></span>
                  New Request
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('replacement2')}}">
                  <span data-feather="repeat"></span>
                  Replacement Request
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('viewstatus')}}">
                  <span data-feather="sliders"></span>
                  View Status
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('reports')}}">
                  <span data-feather="file-text"></span>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('itemmgmt')}}">
                  <span data-feather="sliders"></span>
                 Item management
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('usermanagement')}}">
                  <span data-feather="users"></span>
                  User Management
                </a>
              </li>
              
@endsection

@section('content')
        @yield('matter')
@endsection