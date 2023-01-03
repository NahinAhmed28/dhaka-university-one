@extends('admin.layouts.app')

@section('content')

    @include('sweetalert::alert')
<div class="main-card mb-3 card">
    <div class="card-body table-full-width table-responsive">
    <h4> <strong class="text-bg-primary">Contacts Info</strong></h4>

       ID  : {{$data->id}}
       Name :{{$data->name}}
       Email :{{$data->email}}
       Phone :{{$data->phone}}
       Address : {{$data->address}}
       Message  :{{$data->message}}


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
