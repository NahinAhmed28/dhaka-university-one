@extends('admin.layouts.app')

@section('content')


<div class="main-card mb-3 card">
    <div class="card-body table-full-width table-responsive">
    <h4> <strong class="text-bg-primary">Organizations  LIST</strong></h4>
    <table class="table table-hover table-striped">
        <thead class="badge-light">
        <th>ID</th>
        <th>Image</th>
        <th>Title</th>
        <th>Description</th>
        <th>Action </th>

        </thead>
        <tbody>
                    @foreach($organizations as $organization)
                        <tr>
                            <td>{{$organization->id}}</td>
                            <td>
                                <img class="img-thumbnail" src="{{ asset('assets/uploads/organization/'.$organization->image)}}" width="200px">
                            </td>
                            <td>{{$organization->title}}</td>
                            <td>{{$organization->description}}</td>
                            <td>
                                <a href="{{ route('organization.edit',[$organization->id]) }}" title="Edit">
                                    <button class="btn btn-outline-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>
                                    </button></a>
                            </td>
                        </tr>
                    @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $organizations->links() !!}
    </div>
</div>
</div>
@endsection