<header>
<div class="container d-flex bd-highlight ">
  <div class="headertop mr-auto p-1 bd-highlight"><h1>Inventory Manager
      <div style="font-size:15px;"><em>Indira Gandhi Delhi Technical University for Women</em></div>
  </h1></div>
  
  <div class="headertop p-2 bd-highlight"><a class="btn btn-light" href="/switchapps">Switch Apps</a></div>
  <div class="p-2 bd-highlight">
      <button class="btn btn-outline-light" onClick="toggleSidebar()">
      <i class="fa fa-user"></i> &nbsp;
      <?php echo \Auth::user()->name; ?>
      <span></span>
<script>
    function toggleSidebar(){
      document.getElementById("sidebar").classList.toggle('active');
    }
</script>
  </button>
  <div id="sidebar">
<ul>

  <li><a href="profile">View Profile</a></li>
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
<!-- <nav class="d-flex justify-content-center">
  <a class="btn btn-outline-light" href="/home">Home</a> &nbsp;
  <a class="btn btn-outline-light" href="/orders">Requests</a>&nbsp;
  <a class="btn btn-outline-light" href="/others">Others</a>
</nav> -->
@yield('top-items')
</header>