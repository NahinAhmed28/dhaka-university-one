@extends('admin.layouts.app')

@section('content')

    <div class="main-card mb-3 card">
        <div class="card-body table-full-width table-responsive">
            <h4> <strong class="text-bg-primary">Contact Edit</strong></h4>
            <!--begin::Form-->
            <form  action="{{route('contact.update', $data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="row col-md-6">

                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group  m-form__group {{ $errors->has('name') ? 'has-danger' : '' }}">
                                <label class="form-control-label"><span class="text-danger">*</span> Name </label>
                                <textarea class="form-control" id="name" placeholder="" rows="3" name="name" cols="50">{{ old('name', $data->name) }}</textarea>
                                @if ($errors->has('name'))
                                    <div class="form-control-feedback">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group  m-form__group {{ $errors->has('email') ? 'has-danger' : '' }}">
                                <label class="form-control-label"><span class="text-danger">*</span> Email </label>
                                <textarea class="form-control" id="email" placeholder="" rows="3" name="email" cols="50">{{ old('email', $data->email) }}</textarea>
                                @if ($errors->has('email'))
                                    <div class="form-control-feedback">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group  m-form__group {{ $errors->has('phone') ? 'has-danger' : '' }}">
                                <label class="form-control-label"><span class="text-danger">*</span> Phone </label>
                                <textarea class="form-control" id="phone" placeholder="" rows="3" name="phone" cols="50">{{ old('phone', $data->phone) }}</textarea>
                                @if ($errors->has('phone'))
                                    <div class="form-control-feedback">{{ $errors->first('phone') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group  m-form__group {{ $errors->has('address') ? 'has-danger' : '' }}">
                                <label class="form-control-label"><span class="text-danger">*</span> Address </label>
                                <textarea class="form-control" id="address" placeholder="" rows="3" name="address" cols="50">{{ old('address', $data->address) }}</textarea>
                                @if ($errors->has('address'))
                                    <div class="form-control-feedback">{{ $errors->first('address') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group  m-form__group {{ $errors->has('message') ? 'has-danger' : '' }}">
                                <label class="form-control-label"><span class="text-danger">*</span> Message </label>
                                <textarea class="form-control" id="message" placeholder="" rows="3" name="message" cols="50">{{ old('message', $data->message) }}</textarea>
                                @if ($errors->has('message'))
                                    <div class="form-control-feedback">{{ $errors->first('message') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="m-form__actions text-center">
                                <a href="{{ route('contact.index') }}" class="btn btn-outline-warning"><i class="fa fa-times"></i> Cancel</a>
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
