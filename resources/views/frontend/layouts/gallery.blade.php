@extends('frontend.layouts.app')

@section('content')

    @push('style')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    @endpush

    <!-- ======= Hero Section ======= -->
    @include('frontend.layouts.common.heroheader')
    <!-- End Hero -->

    <!-- Start #main -->
    <main id="main">

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


    </main><!-- End #main -->

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            flatpickr("input[type=datetime-local]");
        </script>
    @endpush
@endsection
