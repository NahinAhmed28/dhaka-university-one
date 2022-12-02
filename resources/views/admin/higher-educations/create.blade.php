@extends('admin.layouts.app')

@section('content')
    <div class="main-card mb-3 card">
        <div class="m-3" style="margin-bottom: 20px">
            <h4>Create Higher Education</h4>

            <form action="{{route('higher-education.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="title">Higher Education Title</label>
                        <input type="text" name="title" class="form-control md-2 {{ $errors->has('title') ? 'is-invalid' : '' }}" value="{{ old('title') }}" placeholder="Write Your Title" />
                        @if ($errors->has('title'))
                            <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                        @endif
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="title">Higher Education Description</label>
                        <textarea class="form-control" id="description" placeholder="Write Your Description" rows="3" name="description" cols="50"></textarea>
                        @if ($errors->has('description'))
                            <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                        @endif
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label>Image</label>
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" id="PartnersImageFile" />
                            <label class="custom-file-label" for="PartnersImageFile">Choose file</label>
                            @if ($errors->has('image'))
                                <div class="invalid-feedback">{{ $errors->first('image') }}</div>
                            @endif
                        </div>
                        <div id="emailHelp" class="form-text text-info">Recommended image shape:(1260x720) px </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <button class="btn btn-success mt-2" type="submit">Submit Info</button>
                </div>
            </form>
        </div>
    </div>

@endsection
