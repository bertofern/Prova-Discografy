<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="/">{{config('app.name', 'Laravel')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="/">Home<span class="sr-only"></span></a></li>
            <li class="nav-item"><a class="nav-link" href="/Artists">Artists</a></li>
            <li class="nav-item"><a class="nav-link" href="/Lps">Lps</a></li>
            <li class="nav-item"><a class="nav-link" href="https://bertofern.wordpress.com/2018/10/30/crear-un-proyecto-laravel-con-composer/" target="_blank">Documentation</a></li>
            <li class="nav-item"><a class="nav-link" href="https://github.com/bertofern/Prova-Discografy" target="_blank">GitHub</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item"><a class="nav-link" href="/Artists/create">Create Artists</a></li>
            <!--<li class="nav-item"><a href="/Lps/create">Create Lps</a></li>-->
            <!-- Authentication Links -->
            @guest
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest
        </ul>
    </div>
</nav>