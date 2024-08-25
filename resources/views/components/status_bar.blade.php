<nav class="status-bar navbar fixed-bottom border-top">
  <div class="container-fluid d-block">
    <ul class="justify-space-between row list-unstyled ps-0 ms-0 mt-3 ps-sm-3 ms-sm-1">
      <li class="col-2">
        <a href="{{ route('home') }}" class="navbar-brand">
          <i class="fs-2 fas fa-house-user"></i> 
        </a>
      </li>
      <li class="col-2">
        <a href="{{ route('home') }}" class="navbar-brand">
          <img src="/svg/explore-light.svg" alt="logo" style="height: 25px;">
        </a>
      </li>
      <li class="col-2">
        <a href="{{ route('home') }}" class="navbar-brand">
          <img src="/svg/camera-light.svg" alt="logo" style="height: 25px;">
        </a>
      </li>
      <li class="col-2">
        <a href="{{ route('home') }}" class="navbar-brand">
          <img src="/svg/plus.svg" alt="logo" style="height: 25px;">
        </a>
      </li>
      <li class="col-2">
        <a href="{{ route('home') }}" class="navbar-brand">
          <img src="/svg/messages-light.svg" alt="logo" style="height: 25px;">
        </a>
      </li>
      <li class="col-2">
        <a href="{{ route('home') }}" class="navbar-brand">
          <img src="{{ asset($post->user->profile->profileImage()) }}" alt="hugenerd" width="30" height="30" class="rounded-circle"> 
        </a>
      </li>
    </ul>
  </div>
</nav>