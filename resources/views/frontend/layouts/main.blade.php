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

            <div class="row">

                <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">

                    <iframe style="width: 100%; min-height: 300px"  src="https://www.youtube.com/embed/{{getOwnYoutubeIdForEmbed($about->video)}}"
{{--                            style="height:700px;width:1280px;"--}}
                            title="YouTube video player" allowfullscreen></iframe>
{{--                    <img src="{{ asset('frontend/assets/img/about.jpg') }}" class="img-fluid" alt="">--}}
{{--                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>--}}
                </div>

                <div class="col-lg-6 pt-3 pt-lg-0 content">
                    <h3>About Us</h3>
                    <p class="">
                        {!! Str::limit(strip_tags($about->description), 850) !!} <a href="{{route('front.about')}}">See More</a></p>
                </div>

            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= About Boxes Section ======= -->
    <section id="about-boxes" class="about-boxes">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="card"  data-toggle="modal" data-target="#missionModal">
                        <img src="{{ asset('assets/uploads/mission/'.$mission->image)}}" class="card-img-top" alt="...">
                        <div class="card-icon">
                            <i class="ri-brush-4-line"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#">Our Mission</a>
                            </h5>
                            <p class="card-text">{!! Str::limit(strip_tags($mission->description), 120) !!} ...</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="card"  data-toggle="modal" data-target="#planModal">
                        <img src="{{ asset('assets/uploads/plan/'.$plan->image)}}" class="card-img-top" alt="...">
                        <div class="card-icon">
                            <i class="ri-calendar-check-line"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#">Our Plan</a>
                            </h5>
                            <p class="card-text">{!! Str::limit(strip_tags($plan->description), 120) !!} ...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="card"  data-toggle="modal" data-target="#visionModal">
                        <img src="{{ asset('assets/uploads/vision/'.$vision->image)}}" class="card-img-top" alt="...">
                        <div class="card-icon">
                            <i class="ri-movie-2-line"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#">Our Vision</a>
                            </h5>
                            <p class="card-text">{!! Str::limit(strip_tags($vision->description), 120) !!} ...</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Boxes Section -->
    <div class="modal fade" id="missionModal" tabindex="-1" role="dialog" aria-labelledby="missionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="missionModalLabel">Our Mission</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Mission Description Goes Here -->
                    {!! $mission->description !!}
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="visionModal" tabindex="-1" role="dialog" aria-labelledby="visionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="visionModalLabel">Our Vision</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- vission Description Goes Here -->
                    {!! $vision->description !!}
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="planModal" tabindex="-1" role="dialog" aria-labelledby="planModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="planModalLabel">Our Plan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- plan Description Goes Here -->
                    {!! $plan->description !!}
                </div>
            </div>
        </div>
    </div>
    <!-- ======= Clients and Organization Section ======= -->
    <section id="organization" class="clients">
        <div class="container" data-aos="zoom-in">
            <div class="section-title">
                <h2>Partners</h2>
            </div>
            <div class="row">

                @foreach($organizations as $organization)
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/uploads/organization/'.$organization->image)}}" class="img-fluid" alt="">
                </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Clients and Organization Section -->

    <!-- ======= Expertises Section ======= -->

    <section id="about-boxes" class="about-boxes">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Our</h2>
                <p>Expertises</p>
            </div>
            <div class="row">
                @foreach ($expertises as $index => $expertise)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="card" data-toggle="modal" data-target="#expertiseModal{{ $index }}">
                            <img src="{{ asset('assets/uploads/expertise/'.$expertise->image)}}" class="card-img-top" alt="...">
                            <div class="card-icon">
                                <i class="ri-brush-4-line"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $expertise->title }}</h5>
                                <p class="card-text">{!! Str::limit(strip_tags($expertise->description), 200) !!} ...</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @foreach ($expertises as $index => $expertise)
        <!-- Modal for each expertise with a unique ID -->
        <div class="modal fade" id="expertiseModal{{ $index }}" tabindex="-1" role="dialog" aria-labelledby="expertiseModalLabel{{ $index }}" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="expertiseModalLabel{{ $index }}">{{ $expertise->title }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {!! $expertise->description !!}
                    </div>
                </div>
            </div>
        </div>
    @endforeach


    <!-- ======= Services Boxes Section ======= -->
    <section id="about-boxes" class="about-boxes">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Our</h2>
                <p>Services</p>
            </div>
            <div class="row">
                @foreach ($services as $index => $service)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="card" data-toggle="modal" data-target="#serviceModal{{ $index }}">
                            <img src="{{ asset('assets/uploads/service/'.$service->image)}}" class="card-img-top" alt="...">
                            <div class="card-icon">
                                <i class="ri-brush-4-line"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $service->title }}</h5>
                                <p class="card-text">{!! Str::limit(strip_tags($service->description), 200) !!} ...</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @foreach ($services as $index => $service)
        <!-- Modal for each service with a unique ID -->
        <div class="modal fade" id="serviceModal{{ $index }}" tabindex="-1" role="dialog" aria-labelledby="serviceModalLabel{{ $index }}" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="serviceModalLabel{{ $index }}">{{ $service->title }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {!! $service->description !!}
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- End Services Boxes Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="gallery" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>Check our Portfolio</p>
            </div>



            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @foreach($portfolios as $portfolio)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('assets/uploads/portfolio/'.$portfolio->image)}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{$portfolio->category}}</h4>
                            <a href="{{ asset('assets/uploads/portfolio/'.$portfolio->image) }}"
                               data-portfolio="portfolioGallery" class="portfolio-lightbox preview-link" title="{{$portfolio->category}}"><i
                                    class="bx bx-zoom-in"></i></a>
                            {{--                            <a href="portfolio-details.html" class="details-link" title="More Details"><i--}}
                            {{--                                    class="bx bx-link"></i></a>--}}
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    @foreach ($experts as $expert)
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets/uploads/expert/'. $expert->image) }}" class="testimonial-img"
                                alt="">
                            <h3>{{$expert->name}}</h3>
                            <h4>{!! $expert->designation !!}</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{$expert->message}}
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

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>Check our Gallery</p>
            </div>



            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @foreach($galleries as $gallery)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('assets/uploads/gallery/'.$gallery->image)}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{$gallery->category}}</h4>
                            <a href="{{ asset('assets/uploads/gallery/'.$gallery->image) }}"
                               data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{$gallery->category}}"><i
                                    class="bx bx-zoom-in"></i></a>
                            {{--                            <a href="portfolio-details.html" class="details-link" title="More Details"><i--}}
                            {{--                                    class="bx bx-link"></i></a>--}}
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Gallery Section -->

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
                            <span>{!! $member->designation !!}</span>
                            <div class="social">
{{--                                <a href=""><i class="bi bi-twitter"></i></a>--}}
{{--                                <a href=""><i class="bi bi-facebook"></i></a>--}}
{{--                                <a href=""><i class="bi bi-instagram"></i></a>--}}
{{--                                <a href=""><i class="bi bi-linkedin"></i></a>--}}

                            </div>
                            <div class="portfolio-info">
                                <a href="{{ asset('assets/uploads/member/'.$member->image) }}"
                                   data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{$member->message}}">More
{{--                                    <i class="bx bx-zoom-in"></i>--}}
                                </a>
                                {{--                            <a href="portfolio-details.html" class="details-link" title="More Details"><i--}}
                                {{--                                    class="bx bx-link"></i></a>--}}
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
                        <div class="col-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p class="pb-2">Room: 9050-52, 8th Floor, MBA Building <br>
                                    Faculty of Business Studies <br>
                                    <strong>University of Dhaka</strong>  </p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 " id="map" style='height:400px'></div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <form action="{{route('front.contactStore')}}" method="post" role="form" >
                        @csrf
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
                            <input type="text" class="form-control" name="address" id="address" placeholder="address"
                                   required>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="phone"
                                   required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                      required></textarea>
                        </div>
                        @include('sweetalert::alert')
                        <div class="my-3">
                            <div class="text-center"><button type="submit" class="btn btn-warning">Send Message</button></div>
                        </div>
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
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCw3JG8x31XxAZ1XBO4Szy_OdDp8qCMs28&callback=initMap"></script>
<script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js"></script>

<script>

    function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 18,
            center: {  lat: 23.735708, lng: 90.392929 },
        });

        marker = new google.maps.Marker({
            map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: {  lat: 23.735708, lng: 90.392929 },
        });
        marker.addListener("click", toggleBounce);
    }

    function toggleBounce() {
        if (marker.getAnimation() !== null) {
            marker.setAnimation(null);
        } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }

    window.initMap = initMap;

</script>
@endpush
@endsection
