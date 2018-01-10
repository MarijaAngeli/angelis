
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Knjigovodstvo, Racunovodstvo i Konsalting">
    <meta name="author" content="Angeli'S Knjigovodstvo">

    <title>Angeli'S Knjigovodstvo i Konsalting</title>
     <!-- Custom styles for this template -->

    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> 
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap-grid.min.css')}}" rel="stylesheet"> 
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap-reboot.min.css')}}" rel="stylesheet"> 

    <link href="{{ asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

   {{-- <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet"> --}}

   <!-- CSS Contact Form -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic"> 

        <link rel="stylesheet" href="{{asset('assets/contact/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/contact/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/contact/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('assets/contact/css/style.css')}}">

        <!-- Favicon and touch icons -->
        {{-- <link rel="shortcut icon" href="assets/contact/ico/favicon.png"> --}}
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets/contact/ico/apple-touch-icon-144-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets/contact/ico/apple-touch-icon-114-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/contact/ico/apple-touch-icon-72-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" href="{{asset('assets/contact/ico/apple-touch-icon-57-precomposed.png')}}">


  </head>
  </html>
  
  <body>
  
    @include('inc.navbar')
        @include('inc.messages')
        @yield('content')
     
      @include('inc.footer')
      <script src="assets/vendor/jquery/jquery.min.js"></script>
      <script src="https://use.fontawesome.com/9e83051577.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
      
      <script src="assets/vendor/popper/popper.min.js"></script>
      <!-- Go to www.addthis.com/dashboard to customize your tools -->
      <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a43b3be651dff91"></script>

      <!-- Javascript Contact Form -->
        <script src="contact/js/jquery-1.11.1.min.js"></script>
        <script src="contact/bootstrap/js/bootstrap.min.js"></script>
        <script src="contact/js/jquery.backstretch.min.js"></script>
        <script src="contact/js/wow.min.js"></script>
        <script src="contact/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    
  </body>