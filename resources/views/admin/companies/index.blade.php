@extends('admin.layouts.app')

@section('content')




<div class="main-card mb-3 card">
    <div class="card-body table-full-width table-responsive">
    <h4> <strong class="text-bg-primary">Company LIST</strong></h4>
    <table class="table table-hover table-striped">
        <thead class="badge-light">
        <th>ID</th>
        <th>Company title</th>
        <th>Created At </th>
        <th>Created At </th>
        </thead>
        <tbody>
        @foreach($companies as $company)
            <tr>
                <td>{{$company->id}}</td>
                <td>{{$company->title}}</td>
                <td>{{$company->created_at}}</td>
                <td>{{$company->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $companies->links() !!}
    </div>
</div>
</div>
@endsection
