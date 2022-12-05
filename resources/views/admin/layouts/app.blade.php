<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('admin.layouts.common.head')
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('admin.layouts.common.header')

        <div class="app-main">
            @include('admin.layouts.common.sidebar')

            <div class="app-main__outer">
                @yield('content')
            </div>
        </div>

        @include('admin.layouts.common.footer')
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script type="text/javascript" src="{{asset('backend/assets/scripts/main.js')}}"></script>


    @stack('scripts')



</body>

</html>
