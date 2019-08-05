<header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-md px-0">
                    <a class="navbar-brand" href="/">
                        <div class="logo">
                            <h1>Movie<span>Entertainment</span></h1>
                        </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav ml-auto">
                            @auth
                                <form class="form-inline mt-2 mt-md-0">
                                    <input class="form-control input-search mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success btn-search my-2 my-sm-0" type="submit">Search</button>
                                </form>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">HIGO SOARES DO LAGO</a>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Administrator</a>
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <div class="dropdown-divider"></div>
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
                            @else
                                @if (Route::has('login'))
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @endauth
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
