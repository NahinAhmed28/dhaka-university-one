<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner" >
        @foreach($heroes as $hero)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}"  >
                <img class="d-block w-100" src="{{asset('assets/uploads/hero/'.$hero->image)}}" alt="First slide" style="max-height:90vh;margin-top: 10rem;object-fit: cover;">
            </div>
        @endforeach
    </div>

    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
