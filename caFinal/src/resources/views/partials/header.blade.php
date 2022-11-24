<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('games.welcome') }}">Welcome</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link @if(\Request::is('games/play')) active @endif " aria-current="page" href="{{ route('games.play') }}">Cat Game</a>
                    <a class="nav-link @if(\Request::is('games/highscore')) active @endif " href="{{ route('games.highscore') }}">High Scores</a>
                    <a class="nav-link @if(\Request::is('games/credits')) active @endif " href="{{ route('games.credits') }}">Credits</a>
                </div>
            </div>
            @auth <div class="d-flex flex-row align-items-center">Hello {{{Auth::user()->name}}}
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <button class="btn btn-link text-dark text-decoration-none">{{ __('Logout') }}</button>
                </form>
            </div> @endauth
            @guest <div class="d-flex flex-row"><a class="nav-link mx-1 " href="{{ route('register') }}">Register</a><a class="nav-link mx-1 " href="{{ route('login') }}">Login</a></div> @endguest
        </div>
    </nav>
</header>