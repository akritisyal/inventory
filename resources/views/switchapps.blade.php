<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="/css/app1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
</head>
<body>

<header>
<div class="container d-flex bd-highlight mb-3">
  <div class="headertop mr-auto p-2 bd-highlight"><h1>Applications</h1></div>
  <div class="p-2 bd-highlight">
      <button class="btn btn-outline-light" onClick="toggleSidebar()">
      <i class="fa fa-user"></i> &nbsp;
      <?php echo \Auth::user()->name; ?>
<script>
    function toggleSidebar(){
      document.getElementById("sidebar").classList.toggle('active');
    }
</script>
  </button>
  <div id="sidebar">
<ul>
  <li> <a href="/profile">View Profile</a></li>
  <li>
    <a href="/resetpassword">Reset Password</a>
  </li>
  @if(\Auth::check())
  <li>
  {{ link_to_route('logout', 'Logout')}}
  </li>
  @else
  <li>
  {{ link_to_route('login', 'Login')}}
  </li>
  @endif
</ul>
</div>
</div>
</div>
</div>
</header>

<hr>
<div class="container" style = "margin-top: 7em;">
  <div class="row">
    <div class="col-sm">
    <!-- <span data-feather="database"></span>  -->
    <i class="fa fa-database"></i>

<div class="d-inline p-2 ">
<div class="btn btn-dark">
<a href="{{route('role')}}">Inventory</a>
 
</div></div>

    </div>
    <div class="col-sm">
    <!-- <span data-feather="server"></span> <!-- {{ link_to_route('role', 'Inventory', '\Auth::user()->email') }} -->
    <i class="fa fa-tv"></i>
    <div class="d-inline p-2"><a class="btn btn-dark" href="#">IT Services</a></div>
    </div>
  </div>
  </div>
@include('layouts.footer')
</body>
</html>