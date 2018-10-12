<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="{{ route('home') }}">RenterHood</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-menu">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'home') active @endif" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->route()->getName() == 'about') active @endif" href="{{ route('about') }}">About</a>
                </li>
            </ul>

            <!-- Middle of Navbar | Not shown in collapse -->

            <div class="navbar-nav d-none d-lg-inline w-100 mx-5">
                @include('partials.forms.search')
            </div>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link @if(request()->route()->getName() == 'login') active @endif" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(request()->route()->getName() == 'register') active @endif" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @else
                    {{--
                        <li>
                            <a>Addtional Right Side Auth Required Links</a>
                        </li>
                    --}}
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle no-wrap" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item @if(request()->route()->getName() == 'user') active @endif" href="{{ route('user') }}">Profile</a>
                            <a class="dropdown-item @if(request()->route()->getName() == 'inventory') active @endif" href="#">Inventory</a>

                            <!-- Logout stuff -->
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>

            <!-- Bottom of Collapse -->
            <div class="navbar-nav d-md-inline d-lg-none w-100">
                @include('partials.forms.search')
            </div>
        </div>
    </nav>
</header>
