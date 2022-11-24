@extends('admin.layouts.app')

@section('content')


<div class="main-card mb-3 card">
    <div class="card-body table-full-width table-responsive">
    <h4> <strong class="text-bg-primary">Company LIST</strong></h4>
    <table class="table table-hover table-striped">
        <thead class="badge-light">
        <th>ID</th>
        <th>Name</th>
        <th>Created At </th>
        <th>Created At </th>

        </thead>
        <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->created_at}}</td>
                            <td>{{$category->updated_at}}</td>
                        </tr>
                    @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $categories->links() !!}
    </div>
</div>
</div>
@endsection
