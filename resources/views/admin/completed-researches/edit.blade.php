@extends('admin.layouts.app')

@section('content')

    <div class="main-card mb-3 card">
        <div class="card-body table-full-width table-responsive">
            <h4> <strong class="text-bg-primary">Completed Research Edit</strong></h4>
            <!--begin::Form-->
            <form  action="{{route('completed-research.update', $data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="row col-md-6">

                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group  m-form__group {{ $errors->has('title') ? 'has-danger' : '' }}">
                                <label class="form-control-label"><span class="text-danger">*</span> Titile </label>
                                <input type="text" name="title" class="form-control md-2 {{ $errors->has('title') ? 'is-invalid' : '' }}" value="{{ old('title', $data->title) }}" placeholder={{ old('title', $data->title) }} />
                                @if ($errors->has('title'))
                                    <div class="form-control-feedback">{{ $errors->first('title') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group  m-form__group {{ $errors->has('description') ? 'has-danger' : '' }}">
                                <label class="form-control-label"><span class="text-danger">*</span> Description </label>
                                <textarea class="form-control" id="description" placeholder="" rows="3" name="description" cols="50">{{ old('description', $data->description) }}</textarea>
                                @if ($errors->has('description'))
                                    <div class="form-control-feedback">{{ $errors->first('description') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="m-form__actions text-center">
                                <a href="{{ route('completed-research.index') }}" class="btn btn-outline-warning"><i class="fa fa-times"></i> Cancel</a>
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
