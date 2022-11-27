@extends('admin.layouts.app')

@section('content')


<div class="main-card mb-3 card">
    <div class="card-body table-full-width table-responsive">
    <h4> <strong class="text-bg-primary">Services  LIST</strong></h4>
    <table class="table table-hover table-striped">
        <thead class="badge-light">
        <th>ID</th>
        <th>Image</th>
        <th>Title</th>
        <th>Description</th>
        <th>Action </th>

        </thead>
        <tbody>
                    @foreach($services as $service)
                        <tr>
                            <td>{{$service->id}}</td>
                            <td>{{$service->id}}</td>
                            <td>{{$service->title}}</td>
                            <td>{{$service->description}}</td>
                            <td>
                                <a href="{{ route('service.edit',[$service->id]) }}" title="Edit">
                                    <button class="btn btn-outline-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>
                                    </button></a>
                                <a href="{{ route('service.show',[$service->id]) }}" title="View">
                                    <button class="btn btn-outline-info btn-sm"> <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button></a>
                            </td>
                        </tr>
                    @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
{{--        {!! $categories->links() !!}--}}
    </div>
</div>
</div>
@endsection
