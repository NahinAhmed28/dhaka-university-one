@extends('admin.layouts.app')

@section('content')

    @include('sweetalert::alert')
<div class="main-card mb-3 card">
    <div class="card-body table-full-width table-responsive">
    <h4> <strong class="text-bg-primary">Contacts Info</strong></h4>

     <strong>ID :</strong> {{$data->id}} <br>
     <strong>Name :</strong> {{$data->name}} <br>
     <strong>Email :</strong> {{$data->email}} <br>
     <strong>Phone :</strong> {{$data->phone}} <br>
     <strong>Address :</strong> {{$data->address}} <br>
     <strong>Message :</strong> {{$data->message}} <br><br> <br>
{{--        <form method="POST" action="{{ route('contact.destroy' ,  [$data->id]) }}" accept-charset="UTF-8" style="display:inline">--}}
{{--            @method('DELETE')--}}
{{--            @csrf--}}
{{--            <button type="submit" class="btn btn-danger btn-sm show-alert-delete-box" title="Delete Research"--}}
{{--                --}}{{--                                    onclick="return confirm(&quot;Confirm delete?&quot;)"--}}
{{--            ><i class="fa fa-trash" aria-hidden="true"> Delete Contact Info</i></button>--}}
{{--        </form>--}}

</div>
</div>
@endsection
{{--@push('scripts')--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>--}}

{{--    <script type="text/javascript">--}}
{{--        $('.show-alert-delete-box').click(function(event){--}}
{{--            var form =  $(this).closest("form");--}}
{{--            var name = $(this).data("name");--}}
{{--            event.preventDefault();--}}
{{--            swal({--}}
{{--                title: "Are you sure you want to delete this record?",--}}
{{--                text: "If you delete this, it will be gone forever.",--}}
{{--                icon: "warning",--}}
{{--                type: "warning",--}}
{{--                buttons: ["Cancel","Yes!"],--}}
{{--                confirmButtonColor: '#3085d6',--}}
{{--                cancelButtonColor: '#d33',--}}
{{--                confirmButtonText: 'Yes, delete it!'--}}
{{--            }).then((willDelete) => {--}}
{{--                if (willDelete) {--}}
{{--                    form.submit();--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}

{{--@endpush--}}
