<header>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">

            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name') }}
            </a>



            <div class="collapse navbar-collapse" id="navbarContent">
                <!-- Left Side Of Navbar -->


                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    @include('partials.navigations.' . \App\User::navigation())
                </ul>
            </div>
        </div>
    </nav>
</header>
