@extends('app') 

@section('list-item')
<li class="nav-item">
  <a class="nav-link active" href="{{route('role')}}">
  <span data-feather="home"></span>
      Home
   </a>
</li>
<li class="nav-item">
  <a class="nav-link active" href="{{route('reports1')}}">
  <span data-feather="file"></span>
      Reports
   </a>
</li>
@endsection

@section('content')
        @yield('matter')
@endsection