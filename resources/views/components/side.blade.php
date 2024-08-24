<?php
    $isActive = request()->is('/'); // Adjust the condition based on your route
?>

<div class="sidebar bg-white text-dark border-end">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 min-vh-100">
        <div class="mb-4 mt-4">
          @if(auth()->user())
          <a class="navbar-brand d-flex" href="{{ route('profile.show', ['user' => auth()->user()->id]) }}">
              <div style="padding-left:0.1rem;" class="custom-font">Freecodegram</div>
          </a>
          @else
          <a class="navbar-brand d-flex" href="/login">
              <div style="padding-left:0.1rem;" class="custom-font">Freecodegram</div>
          </a>
          @endif
        </div>
        <ul class="mt-4 nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item flex mt-4">
                <a href="{{ route('home') }}" class="nav-link align-middle px-0 text-dark fw-bold flex-row {{ $isActive ? 'active' : '' }}">
                    <div class="flex-row align-items-center">                        
                        <i class="fs-2 {{ $isActive ? 'fas fa-house-user' : 'fas fa-house-damage' }}"></i> 
                        <span class="d-sm-inline fs-4 {{ $isActive ? 'ms-3 d-none fw-bold' : 'ms-2 d-none fw-normal' }}">Home</span>                        
                    </div>
                </a>
            </li>
            <li class="mt-3">
                <a href="{{ route('profile.show', ['user' => auth()->user()->id]) }}" class="nav-link align-middle px-0 text-dark fs-4 fw-bold flex-row {{ request()->routeIs('profile.show') ? 'active' : '' }}">
                    <div class="flex-row align-items-center">
                        <i class="fs-2 {{ request()->routeIs('profile.show') ? 'fas fa-search' : 'fab fa-searchengin' }}"></i> 
                        <span class="d-sm-inline fs-4  {{ $isActive ? 'ms-2 d-none fw-normal' : 'ms-3 d-none fw-bold' }}">Search</span>                        
                    </div>
                </a>
            </li>
            <li class="mt-3">
                <a href="#" class="nav-link px-0 align-middle text-dark fs-4 fw-bold">
                    <div class="flex-row align-items-center">
                        @if(request()->routeIs('/'))
                            <img src="/svg/explore-dark.svg" alt="logo" style="height: 25px;">
                        @else
                            <img src="/svg/explore-light.svg" alt="logo" style="height: 25px;">
                        @endif
                        <span class="d-sm-inline fs-4  {{ $isActive ? 'ms-2 d-none fw-normal' : 'ms-3 d-none fw-bold' }}">Explore</span>
                    </div>
                </a>
            </li>
            <li class="mt-3">
                <a href="#" class="nav-link px-0 align-middle text-dark fs-4 fw-bold">
                    <div class="flex-row align-items-center">
                        @if(request()->routeIs('/'))
                            <img src="/svg/camera-dark.svg" alt="logo" style="height: 25px;">
                        @else
                            <img src="/svg/camera-light.svg" alt="logo" style="height: 25px;">
                        @endif
                        <span class="d-sm-inline fs-4  {{ $isActive ? 'ms-2 d-none fw-normal' : 'ms-3 d-none fw-bold' }}">Reels</span>
                    </div>
                </a>
            </li>
            <li class="mt-3">
                <a href="#" class="nav-link px-0 align-middle text-dark fs-4 fw-bold">
                    <div class="flex-row align-items-center">
                        @if(request()->routeIs('/'))
                            <img src="/svg/messages-dark.svg" alt="logo" style="height: 25px;">
                        @else
                            <img src="/svg/messages-light.svg" alt="logo" style="height: 25px;">
                        @endif
                        <span class="d-sm-inline fs-4  {{ $isActive ? 'ms-2 d-none fw-normal' : 'ms-3 d-none fw-bold' }}">Messages</span>
                    </div>
                </a>
            </li>
            <li class="mt-3">
                <a href="#" class="nav-link px-0 align-middle text-dark fs-4 fw-bold">
                    <div class="flex-row align-items-center">
                        @if(request()->routeIs('/'))
                            <img src="/svg/heart-dark.svg" alt="logo" style="height: 25px;">
                        @else
                            <img src="/svg/heart-light.svg" alt="logo" style="height: 25px;">
                        @endif
                        <span class="d-sm-inline fs-4  {{ $isActive ? 'ms-2 d-none fw-normal' : 'ms-3 d-none fw-bold' }}">Notifications</span>
                    </div>
                </a>
            </li>
            <li class="mt-3">
                <a href="#" class="nav-link px-0 align-middle text-dark fs-4 fw-bold">
                    <div class="flex-row align-items-center">
                        <img src="/svg/plus.svg" alt="logo" style="height: 25px;">
                        <span class="d-sm-inline fs-4  {{ $isActive ? 'ms-2 d-none fw-normal' : 'ms-3 d-none fw-bold' }}">Create</span>
                    </div>
                </a>
            </li>
            <li class="mt-3">
                <a href="#" class="nav-link px-0 align-middle text-dark fs-4 fw-bold">
                    <div class="flex-row align-items-center">
                        <img src="{{ asset($post->user->profile->profileImage()) }}" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-sm-inline fs-4  {{ $isActive ? 'ms-2 d-none fw-normal' : 'ms-3 d-none fw-bold' }}">Omar</span>
                    </div>
                </a>
            </li>
            <!-- <li class="mt-3">
                <a href="#" class="nav-link px-0 align-middle text-dark fs-4 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="flex-row align-items-center">
                        <img src="/svg/hamburger.svg" alt="logo" style="height: 25px;">
                        <span class="d-sm-inline fs-4  {{ $isActive ? 'ms-2 d-none fw-normal' : 'ms-3 d-none fw-bold' }}">More</span>
                    </div>
                </a>
            </li> -->

        </ul>
        <!-- Trigger/Open The Modal -->
        <a href="" class="nav-link px-0 align-middle text-dark fs-4 fw-bold" id="myBtn" onclick="openModal(event)">
            <div class="flex-row align-items-center">
                <img src="/svg/hamburger.svg" alt="logo" style="height: 25px;">
                <span class="d-sm-inline fs-4  {{ $isActive ? 'ms-2 d-none fw-normal' : 'ms-3 d-none fw-bold' }}">More</span>
            </div>
        </a>

        <!-- The Modal -->
        <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Some text in the Modal..</p>
        </div>

        </div>
        <hr>

        <!-- Modal -->
        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div> -->
        <!-- TODO: Add the modal here -->

        <!-- <div class="dropdown pb-4">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                <span class="d-none d-sm-inline mx-1">loser</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div> -->
    </div>
</div>

