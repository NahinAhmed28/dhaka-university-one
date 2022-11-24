<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="#">Public Side</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">

            <ul>
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <li><a href="{{ url('/home') }}" class="nav-link scrollto">Admin Panel</a></li>
                        @else
                            <li><a href="{{ route('login') }}" class="nav-link scrollto">Log in</a></li>

                        @endauth
                    </div>
                @endif

                {{--                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>--}}
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
