@extends('admin.layouts.app')

@section('content')


<div class="main-card mb-3 card">
    <div class="card-body table-full-width table-responsive">
    <h4> <strong class="text-bg-primary">Training  LIST</strong></h4>
    <table class="table table-hover table-striped">
        <thead class="badge-light">
        <th>ID</th>
        <th>Image</th>
        <th>Title</th>
        <th>Description</th>
        <th>Action </th>

        </thead>
        <tbody>
                    @foreach($trainings as $training)
                        <tr>
                            <td>{{$training->id}}</td>
                            <td>
                                <img class="img-thumbnail image-height" src="{{ asset('assets/uploads/training/'.$training->image)}}">
                            </td>
                            <td>{{$training->title}}</td>
                            <td>{!!$training->description!!}</td>
                            <td>
                                <a href="{{ route('training.edit',[$training->id]) }}" title="Edit">
                                    <button class="btn btn-outline-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>
                                    </button></a>
                            </td>
                        </tr>
                    @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $trainings->links() !!}
    </div>
</div>
</div>
@endsection
