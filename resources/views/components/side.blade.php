<?php
    $isActive = request()->is('/'); // Adjust the condition based on your route
?>

<div class="sidebar bg-white text-dark border-end">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 min-vh-100">
        <div class="mb-4 mt-4">
          <a class="navbar-brand d-flex" href="{{ route('profile.show', ['user' => auth()->user()->id]) }}">
              <div style="padding-left:0.1rem;" class="custom-font side-bar-desc">Freecodegram</div>
              <img src="/svg/logo.svg" alt="logo" style="height: 35px;" class="logo">
          </a>
        </div>
        <ul class="mt-4 nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item flex mt-4"> `
                <a href="{{ route('home') }}" class="nav-link align-middle px-0 text-dark fw-bold flex-row {{ $isActive ? 'active' : '' }}">
                    <div class="flex-row align-items-center">                        
                        <i class="fs-2 {{ $isActive ? 'fas fa-house-user' : 'fas fa-house-damage' }}"></i> 
                        <span class="d-sm-inline fs-4 side-bar-desc {{ $isActive ? 'ms-3 d-none fw-bold' : 'ms-2 d-none fw-normal' }}">Home</span>                        
                    </div>
                </a>
            </li>
            <li class="mt-3">
                <a href="{{ route('profile.show', ['user' => auth()->user()->id]) }}" class="nav-link align-middle px-0 text-dark fs-4 fw-bold flex-row {{ request()->routeIs('profile.show') ? 'active' : '' }}">
                    <div class="flex-row align-items-center">
                        <i class="fs-2 {{ request()->routeIs('profile.show') ? 'fas fa-search' : 'fab fa-searchengin' }}"></i> 
                        <span class="d-sm-inline fs-4 side-bar-desc {{ $isActive ? 'ms-2 d-none fw-normal' : 'ms-3 d-none fw-bold' }}">Search</span>                        
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
                        <span class="d-sm-inline fs-4 side-bar-desc {{ $isActive ? 'ms-2 d-none fw-normal' : 'ms-3 d-none fw-bold' }}">Explore</span>
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
                        <span class="d-sm-inline fs-4 side-bar-desc {{ $isActive ? 'ms-2 d-none fw-normal' : 'ms-3 d-none fw-bold' }}">Reels</span>
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
                        <span class="d-sm-inline fs-4 side-bar-desc {{ $isActive ? 'ms-2 d-none fw-normal' : 'ms-3 d-none fw-bold' }}">Messages</span>
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
                        <span class="d-sm-inline fs-4 side-bar-desc {{ $isActive ? 'ms-2 d-none fw-normal' : 'ms-3 d-none fw-bold' }}">Notifications</span>
                    </div>
                </a>
            </li>
            <li class="mt-3">
                <a href="#" class="nav-link px-0 align-middle text-dark fs-4 fw-bold">
                    <div class="flex-row align-items-center">
                        <img src="/svg/plus.svg" alt="logo" style="height: 25px;">
                        <span class="d-sm-inline fs-4 side-bar-desc {{ $isActive ? 'ms-2 d-none fw-normal' : 'ms-3 d-none fw-bold' }}">Create</span>
                    </div>
                </a>
            </li>
            <li class="mt-3">
                <a href="#" class="nav-link px-0 align-middle text-dark fs-4 fw-bold">
                    <div class="flex-row align-items-center">
                        <img src="{{ asset($post->user->profile->profileImage()) }}" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-sm-inline fs-4 side-bar-desc {{ $isActive ? 'ms-2 d-none fw-normal' : 'ms-3 d-none fw-bold' }}">Omar</span>
                    </div>
                </a>
            </li>
        </ul>
        <!-- Trigger/Open The Modal -->
        <a href="" class="nav-link px-0 align-middle text-dark fs-4 fw-bold" id="myBtn" onclick="openModal(event)">
            <div class="flex-row align-items-center">
                <img src="/svg/hamburger.svg" alt="logo" style="height: 25px;">
                <span class="d-sm-inline fs-4 side-bar-desc  {{ $isActive ? 'ms-2 d-none fw-normal' : 'ms-3 d-none fw-bold' }}">More</span>
            </div>
        </a>
        @include('components.modal')
    </div>
</div>