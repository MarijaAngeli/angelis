<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') {{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    @yield('styles')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css">
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('admin/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('admin/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('admin/vendor/morrisjs/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <style>
        .result-set { margin-top: 1em }
    </style>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        @include('inc_admin.navbar')

        <div class="container">
            <div id="flash-msg">
                @include('inc_admin.messages')
                @include('flash::message')
            </div>
            @yield('content')
        </div>
    </div>

<!-- jQuery -->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <!-- jQuery -->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js')}}"></script>
    
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('admin/vendor/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('admin/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{ asset('admin/vendor/morrisjs/morris.min.js')}}"></script>
    <script src="{{ asset('admin/data/morris-data.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('admin/dist/js/sb-admin-2.js')}}"></script>

    

    @stack('scripts')

    <script>
        $(function () {
            // flash auto hide
            $('#flash-msg .alert').not('.alert-danger, .alert-important').delay(6000).slideUp(500);
        })
    </script>
    @yield('scripts')
</body>
</html>