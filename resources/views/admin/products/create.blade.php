@extends('admin.layouts.app')

@section('content')

    <div class="m-3" style="margin-bottom: 20px">
        <h4>create products</h4>

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




{{--    <div class="card-body table-full-width table-responsive">--}}
{{--        <h4 class="" style="margin-top: 50px"> Available Courses List</h4>--}}
{{--        <table class="table table-hover table-striped">--}}
{{--            <thead class="badge-light">--}}
{{--            <th>ID</th>--}}
{{--            <th>Offer<br> Name</th>--}}
{{--            <th>Offer<br> Company</th>--}}
{{--            <th>Start<br> Date</th>--}}
{{--            <th>End <br>Date</th>--}}
{{--            <th>Action</th>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach($enrollments as $enrollment)--}}
{{--                <tr>--}}
{{--                    <td>{{$enrollment->id}}</td>--}}
{{--                    <td>{{$enrollment->user->name}}</td>--}}
{{--                    <td>{{$enrollment->user->email}}</td>--}}
{{--                    <td> {{$enrollment->course->name}}</td>--}}
{{--                    <td> {{$enrollment->course->credit}}</td>--}}
{{--                    <td> {{$enrollment->course->price}}</td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}


@endsection
