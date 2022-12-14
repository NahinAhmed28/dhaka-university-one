@extends('admin.layouts.app')

@section('content')
@include('sweetalert::alert')
<div class="main-card mb-3 card">
    <div class="m-3" style="margin-bottom: 20px">


        <div class="button-list-flex">
            <h4>Create Galleries</h4>

            <a href="{{ route('gallery.index') }}">
                <button class="btn btn-primary" href>
                    Galleries List
                </button>
            </a>
        </div>



        <form action="{{route('gallery.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="title">Category</label>
                    <textarea class="form-control" id="category" placeholder="Write Your category" rows="3"
                        name="category" cols="50"></textarea>
                    @if ($errors->has('category'))
                    <div class="invalid-feedback">{{ $errors->first('category') }}</div>
                    @endif
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label>Image</label>
                    <div class="custom-file">
                        <input type="file" name="image"
                            class="custom-file-input form-control {{ $errors->has('image') ? 'is-invalid' : '' }}"
                            id="gallery_image" />
                        <label class="custom-file-label" for="PartnersImageFile">Choose file</label>
                        @if ($errors->has('image'))
                        <div class="invalid-feedback">{{ $errors->first('image') }}</div>
                        @endif
                        <img src="#" id="gallery_image_tag" width="200px" />
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <button class="btn btn-success mt-2" type="submit">Submit Info</button>
            </div>
        </form>
    </div>
</div>

@endsection

@push('scripts')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#gallery_image_tag').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#gallery_image").change(function(){
            readURL(this);
        });
    </script>

@endpush
