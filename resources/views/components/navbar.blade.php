<nav class="navbar navbar-expand-lg bg-dark navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            @if (Auth::check())
                <a class="text-white nav-item nav-link active" href="{{url('home')}}">Home</a>
                <a class="text-white nav-item nav-link" href="{{url('logout')}}">logout</a>
            @else
                <a class="text-white nav-item nav-link" href="{{url('login')}}">Login</a>
                <a class="text-white nav-item nav-link" href="{{url('register')}}">Register</a>
            @endif
        </div>
    </div>
</nav>