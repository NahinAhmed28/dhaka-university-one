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

    <!-- ======= Expertises Section ======= -->
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

    <!-- End Expertises Section -->

    <!-- ======= Features Section ======= -->
{{--    <section id="features" class="features">--}}
{{--        <div class="container" data-aos="fade-up">--}}
{{--            <div class="section-title">--}}
{{--                <h2>Expertises</h2>--}}
{{--                <p>Check our Expertises</p>--}}
{{--            </div>--}}
{{--            <ul class="nav nav-tabs row d-flex ">--}}
{{--                @foreach ($expertises as $expertise)--}}
{{--                <li class="nav-item col-3 pt-3">--}}
{{--                    <a class="nav-link show {{($loop->index+1 == 1)?'active':''}}" data-bs-toggle="tab"--}}
{{--                        href={{"#tab-".$loop->index+1}}>--}}
{{--                        <i class="ri-gps-line"></i>--}}
{{--                        <h4 class="d-none d-lg-block">{{ $expertise->title }}</h4>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}

{{--            <div class="tab-content">--}}
{{--                @foreach ($expertises as $expertise)--}}
{{--                <div class="tab-pane show {{($loop->index+1 == 1)?'active':''}}" id={{"tab-".$loop->index+1}}>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">--}}
{{--                            {!!$expertise->description!!}--}}
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
{{--                        </div>--}}
{{--                        <div class="col-lg-6 order-1 order-lg-2 text-center">--}}
{{--                            <img src="{{ asset('assets/uploads/expertise/'.$expertise->image)}}" class="img-fluid"--}}
{{--                                alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}
    <!-- End Features Section -->


</main><!-- End #main -->

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("input[type=datetime-local]");
</script>
@endpush
@endsection
