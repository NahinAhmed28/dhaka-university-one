<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

{{--        <h1 class="logo"><a href="#">Public Side</a></h1>--}}
        <!-- Uncomment below if you prefer to use an image logo -->
     <a href="#" class="logo"><img src="{{asset('frontend/assets/img/cti_logo.png')}}" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar">

            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li class="dropdown"><a href="#"><span>Approach</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Mission And Vision</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#team">Expertise</a></li>
                <li class="dropdown"><a href="#"><span>Academic</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Higher Education</a></li>
{{--                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">Deep Drop Down 1</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 2</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 3</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 4</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 5</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        <li><a href="#">Training</a></li>
                        <li><a href="#">Internship</a></li>
                        <li><a href="#">Fellowship</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#organization">Organization</a></li>
                <li class="dropdown"><a href="#"><span>Research</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Ongoing Research</a></li>
                        <li><a href="#">Completed Research</a></li>
                    </ul>
                </li>

                <li><a class="nav-link scrollto" href="#publication">Publication</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
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
    <a href="#" class="logo"><img src="{{asset('frontend/assets/img/logo.png')}}" alt="" class="img-fluid"></a>
    </div>
</header>
