@extends('admin.layouts.app')

@section('content')
@include('sweetalert::alert')

<div class="main-card mb-3 card">
    <div class="card-body table-full-width table-responsive">

        <div class="button-list-flex">
            <h4> <strong class="text-bg-primary">Experts LIST</strong></h4>

            <a href="{{ route('expert.create') }}">
                <button class="btn btn-primary" href>
                    Create New Expert
                </button>
            </a>
        </div>


        <table class="table table-hover table-striped">
            <thead class="badge-light">
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Message</th>
                <th>Action </th>

            </thead>
            <tbody>
                @foreach($experts as $expert)
                <tr>
                    <td>{{$expert->id}}</td>
                    <td>
                        <img class="img-thumbnail image-height"
                            src="{{ asset('assets/uploads/expert/'.$expert->image)}}">
                    </td>
                    <td>{{$expert->name}}</td>
                    <td>{!!$expert->designation!!}</td>
                    <td>{!!$expert->message!!}</td>
                    <td>
                        <a href="{{ route('expert.edit',[$expert->id]) }}" title="Edit">
                            <button class="btn btn-outline-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>
                            </button></a>
                        <form method="POST" action="{{ route('expert.destroy' ,  [$expert->id]) }}"
                            accept-charset="UTF-8" style="display:inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm show-alert-delete-box"
                                title="Delete Research" {{-- onclick="return confirm(&quot;Confirm delete?&quot;)"
                                --}}><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $experts->links() !!}
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script type="text/javascript">
    $('.show-alert-delete-box').click(function(event){
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: "Are you sure you want to delete this record?",
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                type: "warning",
                buttons: ["Cancel","Yes!"],
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
        });
</script>

@endpush