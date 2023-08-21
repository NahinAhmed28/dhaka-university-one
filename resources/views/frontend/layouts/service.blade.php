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
    </main><!-- End #main -->

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            flatpickr("input[type=datetime-local]");
        </script>
    @endpush
@endsection
