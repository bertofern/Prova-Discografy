<nav class="navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">{{config('app.name', 'Laravel')}}</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a class="dropdown-item" href="/">Home</a></li>
                <li><a class="dropdown-item" href="/Artists">Artists</a></li>
                <li><a class="dropdown-item" href="/Lps">Lps</a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li><a class="dropdown-item" href="https://bertofern.wordpress.com/2018/10/30/crear-un-proyecto-laravel-con-composer/" target="_blank">Documentation</a></li>
                <li><a class="dropdown-item" href="https://github.com/bertofern/Prova-Discografy" target="_blank">GitHub</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/Artists/create">Create Artists</a></li>
                <li><a href="/Lps/create">Create Lps</a></li>
            </ul>
        </div>
    </div>
</nav>