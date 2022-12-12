@extends('frontend.layouts.app')

@section('content')

@push('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush

<!-- ======= Hero Section ======= -->
@include('frontend.layouts.common.hero')
<!-- End Hero -->

<!-- Start #main -->
<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            {{-- <div class="row justify-content-end">--}}
                {{-- <div class="col-lg-11">--}}
                    {{-- <div class="row justify-content-end">--}}

                        {{-- <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">--}}
                            {{-- <div class="count-box">--}}
                                {{-- <i class="bi bi-emoji-smile"></i>--}}
                                {{-- <span data-purecounter-start="0" data-purecounter-end="125" --}} {{--
                                    data-purecounter-duration="1" class="purecounter"></span>--}}
                                {{-- <p>Happy Clients</p>--}}
                                {{-- </div>--}}
                            {{-- </div>--}}

                        {{-- <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">--}}
                            {{-- <div class="count-box">--}}
                                {{-- <i class="bi bi-journal-richtext"></i>--}}
                                {{-- <span data-purecounter-start="0" data-purecounter-end="85"
                                    data-purecounter-duration="1" --}} {{-- class="purecounter"></span>--}}
                                {{-- <p>Projects</p>--}}
                                {{-- </div>--}}
                            {{-- </div>--}}

                        {{-- <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">--}}
                            {{-- <div class="count-box">--}}
                                {{-- <i class="bi bi-clock"></i>--}}
                                {{-- <span data-purecounter-start="0" data-purecounter-end="35"
                                    data-purecounter-duration="1" --}} {{-- class="purecounter"></span>--}}
                                {{-- <p>Years of experience</p>--}}
                                {{-- </div>--}}
                            {{-- </div>--}}

                        {{-- <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">--}}
                            {{-- <div class="count-box">--}}
                                {{-- <i class="bi bi-award"></i>--}}
                                {{-- <span data-purecounter-start="0" data-purecounter-end="48"
                                    data-purecounter-duration="1" --}} {{-- class="purecounter"></span>--}}
                                {{-- <p>Awards</p>--}}
                                {{-- </div>--}}
                            {{-- </div>--}}

                        {{-- </div>--}}
                    {{-- </div>--}}
                {{-- </div>--}}

            <div class="row">

                <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('frontend/assets/img/about.jpg') }}" class="img-fluid" alt="">
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
                </div>

                <div class="col-lg-6 pt-3 pt-lg-0 content">
                    <h3>About Us</h3>
                    <p class="fst-italic">
                        {!!$about->description!!}
                    </p>
                </div>

            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= About Boxes Section ======= -->
    <section id="about-boxes" class="about-boxes">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <img src="{{ asset('assets/uploads/mission/'.$mission->image)}}" class="card-img-top" alt="...">
                        <div class="card-icon">
                            <i class="ri-brush-4-line"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Our Mission</a></h5>
                            <p class="card-text">{!!$mission->description!!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <img src="{{ asset('assets/uploads/plan/'.$plan->image)}}" class="card-img-top" alt="...">
                        <div class="card-icon">
                            <i class="ri-calendar-check-line"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Our Plan</a></h5>
                            <p class="card-text">{!!$plan->description!!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <img src="{{ asset('assets/uploads/vision/'.$vision->image)}}" class="card-img-top" alt="...">
                        <div class="card-icon">
                            <i class="ri-movie-2-line"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Our Vision</a></h5>
                            <p class="card-text">{!!$vision->description!!}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Boxes Section -->

    <!-- ======= Clients Section ======= -->
    <section id="organization" class="clients">
        <div class="container" data-aos="zoom-in">

            <div class="row">

                @foreach($organizations as $organization)
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/uploads/organization/'.$organization->image)}}" class="img-fluid" alt="">
                </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Clients Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            <ul class="nav nav-tabs row d-flex">
                @foreach ($expertises as $expertise)
                <li class="nav-item col-3">
                    <a class="nav-link show" data-bs-toggle="tab" href={{"#tab-".$loop->index+1}}>
                        <i class="ri-gps-line"></i>
                        <h4 class="d-none d-lg-block">{{ $expertise->title }} {{$loop->index+1}}</h4>
                    </a>
                </li>
                @endforeach
            </ul>

            <div class="tab-content">
                @foreach ($expertises as $expertise)
                <div class="tab-pane active show" id={{"tab-".$loop->index+1}}>
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            {!!$expertise->description!!} {{$loop->index+1}}
                            {{-- <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                            <p class="fst-italic">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore
                                magna aliqua.
                            </p>
                            <ul>
                                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</li>
                                <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in
                                    voluptate velit.</li>
                                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                    storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in
                                culpa qui officia deserunt mollit anim id est laborum
                            </p> --}}
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="{{ asset('assets/uploads/expertise/'.$expertise->image)}}" class="img-fluid"
                                alt="">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Services</h2>
                <p>Check our Services</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="200">
                @foreach($services as $service)
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="bi bi-clock"></i>
                        <h4><a href="#">{{$service->title}}</a></h4>
                        <p>{!!$service->description!!}</p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    @foreach ($members as $member)
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets/uploads/member/'. $member->image) }}" class="testimonial-img"
                                alt="">
                            <h3>{{$member->name}}</h3>
                            <h4>{{$member->designation}}</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{$member->message}}
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->
                    @endforeach

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>Check our Portfolio</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 1</h4>
                        <p>App</p>
                        <a href="{{ asset('frontend/assets/img/portfolio/portfolio-1.jpg') }}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="{{ asset('frontend/assets/img/portfolio/portfolio-2.jpg') }}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 2</h4>
                        <p>App</p>
                        <a href="{{ asset('frontend/assets/img/portfolio/portfolio-3.jpg') }}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 2</h4>
                        <p>Card</p>
                        <a href="{{ asset('frontend/assets/img/portfolio/portfolio-4.jpg') }}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 2</h4>
                        <p>Web</p>
                        <a href="{{ asset('frontend/assets/img/portfolio/portfolio-5.jpg') }}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 3</h4>
                        <p>App</p>
                        <a href="{{ asset('frontend/assets/img/portfolio/portfolio-6.jpg') }}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 1</h4>
                        <p>Card</p>
                        <a href="{{ asset('frontend/assets/img/portfolio/portfolio-7.jpg') }}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="{{ asset('frontend/assets/img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 3</h4>
                        <p>Card</p>
                        <a href="{{ asset('frontend/assets/img/portfolio/portfolio-8.jpg') }}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="{{ asset('') }}frontend/assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="{{ asset('') }}frontend/assets/img/portfolio/portfolio-9.jpg"
                            data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i
                                class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Team</h2>
                <p>Check our Team</p>
            </div>

            <div class="row">

                @foreach ($members as $member)
                <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="pic"><img src="{{ asset('assets/uploads/member/'. $member->image) }}"
                                class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>{{$member->name}}</h4>
                            <span>{{$member->designation}}</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class=" section-title">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </div>

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p>info@example.com<br>contact@example.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("input[type=datetime-local]");
</script>
@endpush
@endsection
