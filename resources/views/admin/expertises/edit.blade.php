@extends('admin.layouts.app')

@section('content')

    <div class="main-card mb-3 card">
        <div class="card-body table-full-width table-responsive">
            <h4> <strong class="text-bg-primary">Expertise Details Edit</strong></h4>
            <!--begin::Form-->
            <form  action="{{route('expertise.update', $expertise->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="row col-md-6">

                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group  m-form__group {{ $errors->has('title') ? 'has-danger' : '' }}">
                                <label class="form-control-label"><span class="text-danger">*</span> Titile </label>
                                <textarea class="form-control" id="title" placeholder="" rows="3" name="title" cols="50">{{ old('title', $expertise->title) }}</textarea>
                                @if ($errors->has('title'))
                                    <div class="form-control-feedback">{{ $errors->first('title') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group  m-form__group {{ $errors->has('description') ? 'has-danger' : '' }}">
                                <label class="form-control-label"><span class="text-danger">*</span> Description </label>
                                <textarea class="form-control" id="description" placeholder="" rows="3" name="description" cols="50">{{ old('description', $expertise->description) }}</textarea>
                                @if ($errors->has('description'))
                                    <div class="form-control-feedback">{{ $errors->first('description') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group">
                                <label class="form-control-label">Expertise Image</label>
                                <img class="img-thumbnail" src="{{ asset('assets/uploads/expertise/'.$expertise->image)}}" width="200px">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" id="PartnersImageFile" />
                                    <label class="custom-file-label" for="PartnersImageFile">Choose file</label>
                                    @if ($errors->has('image'))
                                        <div class="invalid-feedback">{{ $errors->first('image') }}</div>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="m-form__actions text-center">
                                <a href="{{ route('expertise.index') }}" class="btn btn-outline-warning"><i class="fa fa-times"></i> Cancel</a>
                                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
    </div>
@endsection
