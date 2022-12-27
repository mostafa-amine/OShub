<nav class="navbar navbar-expand-md  shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand fs-4 fw-bold ms-2" href="{{ url('/') }} ">
            OShub
        </a>

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
                        <a class="nav-link text-decoration-none text-green fw-semibold" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))

                        <li class="nav-item">
                            <a class="nav-link text-white btn ms-4 btn-primary border-0 rounded-1 px-5" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                @else
                    <li class="nav-item">
                        <a class="btn btn-success" href="{{ route('projects.create') }}">{{ __('Submit Project') }}</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->user_name }}
                        </a>


                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}" >
                                Your Profile
                            </a>

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
