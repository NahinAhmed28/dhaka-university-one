@extends('admin.layouts.app')

@section('content')


<div class="main-card card">
    <div class="card-body table-full-width table-responsive">
        <h4> About Details </h4>
        <!--begin::Form-->
        <form action="{{route('about.update', $about->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="row col-md-9 flexbox">
                    <div class="col-sm-12">
                        <div class="form-group {{ $errors->has('description') ? 'has-danger' : '' }}">
                            <label><span class="text-danger">*</span> Description </label>
                            <textarea class="form-control summernote d-none" id="description" placeholder="" rows="12" name="description"
                                cols="80">{{ old('description', $about->description) }}</textarea>
                            @if ($errors->has('description'))
                            <div class="form-control-feedback">{{ $errors->first('description') }}</div>
                            @endif
                        </div>
                    </div>


                        <div class=" text-center flexbox">
                            <a href="{{ route('about.index') }}" class="btn btn-danger btn-flex"><i
                                    class="fa fa-times"></i>
                                Cancel</a>
                            <button type="submit" class="btn btn-success btn-flex"><i class="fa fa-save"></i>
                                Save</button>
                        </div>

                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>
</div>

@endsection

@push('scripts')

    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                placeholder: 'Hello stand alone ui',
                tabsize: 2,
                height: 120,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
    </script>
@endpush
