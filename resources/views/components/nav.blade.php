<!-- resources/views/components/nav.blade.php -->
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">

        @if(auth()->user())
        <a class="navbar-brand d-flex" href="{{ route('profile.show', ['user' => auth()->user()->id]) }}">
            <div><img src="/svg/logo.svg" alt="logo" style="height: 25px;padding-right: 1rem;border-right: 1px solid #333"></div>
            <div style="padding-left:1rem;" class="custom-font">Freecodegram</div>
        </a>
        @else
        <a class="navbar-brand d-flex" href="/login">
            <div><img src="/svg/logo.svg" alt="logo" style="height: 25px;padding-right: 1rem;border-right: 1px solid #333"></div>
            <div style="padding-left:1rem;" class="custom-font">Freecodegram</div>
        </a>
        @endif
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->username }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>