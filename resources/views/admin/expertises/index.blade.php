@extends('admin.layouts.app')

@section('content')


<div class="main-card mb-3 card">
    <div class="card-body table-full-width table-responsive">
    <h4> <strong class="text-bg-primary">Expertises LIST</strong></h4>
    <table class="table table-hover table-striped">
        <thead class="badge-light">
        <th>ID</th>
        <th>Image</th>
        <th>Title</th>
        <th>Description</th>
        <th>Action </th>

        </thead>
        <tbody>
                    @foreach($expertises as $expertise)
                        <tr>
                            <td>{{$expertise->id}}</td>
                            <td>
                                <img class="img-thumbnail" src="{{ asset('assets/uploads/expertise/'.$expertise->image)}}" width="200px">
                            </td>
                            <td>{{$expertise->title}}</td>
                            <td>{!!$expertise->description!!}</td>
                            <td>
                                <a href="{{ route('expertise.edit',[$expertise->id]) }}" title="Edit">
                                    <button class="btn btn-outline-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>
                                    </button></a>
                            </td>
                        </tr>
                    @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $expertises->links() !!}
    </div>
</div>
</div>
@endsection
