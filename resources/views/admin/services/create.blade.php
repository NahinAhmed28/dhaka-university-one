@extends('admin.layouts.app')

@section('content')
    <div class="main-card mb-3 card">
        <div class="m-3" style="margin-bottom: 20px">
            <h4>create services</h4>

    {{--        <form action="#" method="POST" enctype="multipart/form-data">--}}
    {{--            @csrf--}}

    {{--            <div class="form-row">--}}
    {{--                <div class="col-md-6 mb-3">--}}
    {{--                    <label for="device">Select Course</label>--}}
    {{--                    <select class="form-control custom-select" id="inputGroupSelect03" name="course_id">--}}
    {{--                        <option selected>select...</option>--}}
    {{--                        @foreach($courses as $course)--}}
    {{--                            <option value="{{$course->id}}">{{$course->name}}</option>--}}
    {{--                        @endforeach--}}
    {{--                    </select>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <button class="btn btn-success" type="submit">Submit Info</button>--}}
    {{--        </form>--}}
        </div>
    </div>

@endsection
