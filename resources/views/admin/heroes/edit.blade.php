@extends('admin.layouts.app')

@section('content')

<div class="main-card mb-3 card">
    <div class="card-body table-full-width table-responsive">
        <h4> Internship Edit</h4>
        <!--begin::Form-->
        <form action="{{route('hero.update', $hero->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="row col-md-6 flexbox">

                    <div class="col-xs-12 col-sm-12">
                        <div class="service-flex">
                            <div class="form-group service-flex">
                                <label class="form-control-label">Image</label>
                                <img class="img-thumbnail"
                                    src="{{ asset('assets/uploads/hero/'.$hero->image)}}" width="200px">
                            </div>
                            <div class="custom-file">
                                <input type="file" name="image"
                                    class="custom-file-input form-control {{ $errors->has('image') ? 'is-invalid' : '' }}"
                                    id="PartnersImageFile" />
                                <label class="custom-file-label" for="PartnersImageFile">Choose file</label>
                                @if ($errors->has('image'))
                                <div class="invalid-feedback">{{ $errors->first('image') }}</div>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions text-center">
                            <a href="{{ route('hero.index') }}" class="btn btn-outline-warning"><i
                                    class="fa fa-times"></i> Cancel</a>
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

