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
                <div class="row col-md-6">
                    <div class="col-xs-12 col-sm-12">
                        <div class="form-group  m-form__group {{ $errors->has('description') ? 'has-danger' : '' }}">
                            <label class="form-control-label"><span class="text-danger">*</span> Description </label>
                            <textarea class="form-control" id="description" placeholder="" rows="3" name="description"
                                cols="50">{{ old('description', $about->description) }}</textarea>
                            @if ($errors->has('description'))
                            <div class="form-control-feedback">{{ $errors->first('description') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="m-portlet__foot m-portlet__foot--fit ">
                        <div class="m-form__actions text-center flexbox">
                            <a href="{{ route('about.index') }}" class="btn btn-danger btn-flex"><i
                                    class="fa fa-times"></i>
                                Cancel</a>
                            <button type="submit" class="btn btn-success btn-flex"><i class="fa fa-save"></i>
                                Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>
</div>
{{-- create.blade.php
edit.blade.php
index.blade.php --}}

@endsection