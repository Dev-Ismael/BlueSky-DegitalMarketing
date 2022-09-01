<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">

    <!------- FontAwesome  ------->
    <script src="https://kit.fontawesome.com/bc98e6aa51.js" crossorigin="anonymous"></script>

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:400,600&amp;display=swap" rel="stylesheet">


    <!--App css-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{ asset('digimark_template/css/bootstrap.min.css') }}">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="{{ asset('digimark_template/css/magnific-popup.css') }}">
    <!--Themify icon css-->
    <link rel="stylesheet" href="{{ asset('digimark_template/css/themify-icons.css') }}">
    <!--Fontawesome icon css-->
    <link rel="stylesheet" href="{{ asset('digimark_template/css/all.min.css') }}">
    <!--animated css-->
    <link rel="stylesheet" href="{{ asset('digimark_template/css/animate.min.css') }}">
    <!--ytplayer css-->
    <link rel="stylesheet" href="{{ asset('digimark_template/css/jquery.mb.YTPlayer.min.css') }}">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="{{ asset('digimark_template/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('digimark_template/css/owl.theme.default.min.css') }}">
    <!--custom css-->
    <link rel="stylesheet" href="{{ asset('digimark_template/css/style.css') }}">
    <!--responsive css-->
    <link rel="stylesheet" href="{{ asset('digimark_template/css/responsive.css') }}">
    <!--cutomize css-->
    <link rel="stylesheet" href="{{ asset('digimark_template/css/cutomize.css') }}">





</head>

<body>
    <div id="app">



        <main_navbar></main_navbar>

        @yield('content')

        <footer_section></footer_section>




    </div>

    <!--App Js -->
    <script defer src="{{ mix('js/app.js') }}"></script>
    <!--jQuery-->
    <script src="{{ asset('digimark_template/js/jquery-3.5.0.min.js') }}"></script>
    <!--Popper js-->
    <script src="{{ asset('digimark_template/js/popper.min.js') }}"></script>
    <!--Bootstrap js-->
    <script src="{{ asset('digimark_template/js/bootstrap.min.js') }}"></script>
    <!--Magnific popup js-->
    <script src="{{ asset('digimark_template/js/jquery.magnific-popup.min.js') }}"></script>
    <!--jquery easing js-->
    <script src="{{ asset('digimark_template/js/jquery.easing.min.js') }}"></script>
    <!--jquery ytplayer js-->
    <script src="{{ asset('digimark_template/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!--Isotope filter js-->
    <script src="{{ asset('digimark_template/js/mixitup.min.js') }}"></script>
    <!--wow js-->
    <script src="{{ asset('digimark_template/js/wow.min.js') }}"></script>
    <!--owl carousel js-->
    <script src="{{ asset('digimark_template/js/owl.carousel.min.js') }}"></script>
    <!--countdown js-->
    <script src="{{ asset('digimark_template/js/jquery.countdown.min.js') }}"></script>
    <!--jquery easypiechart-->
    <script src="{{ asset('digimark_template/js/jquery.easy-pie-chart.js') }}"></script>
    <!--custom js-->
    <script src="{{ asset('digimark_template/js/scripts.js') }}"></script>

</body>

</html>
