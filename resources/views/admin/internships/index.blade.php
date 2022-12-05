@extends('admin.layouts.app')

@section('content')


<div class="main-card mb-3 card">
    <div class="card-body table-full-width table-responsive">
    <h4> <strong class="text-bg-primary">Internship LIST</strong></h4>
    <table class="table table-hover table-striped">
        <thead class="badge-light">
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Action </th>

        </thead>
        <tbody>
                    @foreach($internships as $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>
                                <img class="img-thumbnail image-height" src="{{ asset('assets/uploads/internship/'.$value->image)}}" >
                            </td>
                            <td>{{$value->title}}</td>
                            <td>{!!$value->description!!}</td>
                            <td>
                                <a href="{{ route('internship.edit',[$value->id]) }}" title="Edit">
                                    <button class="btn btn-outline-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>
                                    </button></a>
                                <form method="POST" action="{{ route('internship.destroy' ,  [$value->id]) }}" accept-charset="UTF-8" style="display:inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete internship"
                                        {{--                                    onclick="return confirm(&quot;Confirm delete?&quot;)"--}}
                                    ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $internships->links() !!}
    </div>
</div>
</div>
@endsection
