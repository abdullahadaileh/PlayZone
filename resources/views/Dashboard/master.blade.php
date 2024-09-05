<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>PlayZone-Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('Dashboard/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('Dashboard/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('Dashboard/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('Dashboard/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('Dashboard/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('Dashboard/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('Dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('Dashboard/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('Dashboard/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('Dashboard/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('Dashboard/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('Dashboard/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('Dashboard/css/theme.css') }}" rel="stylesheet" media="all">

    <!-- FontAwesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body class="animsition">
    <div class="page-wrapper">
        @include('Dashboard.include.header')
        @yield('content')
        @include('Dashboard.include.footer')
    </div>

    <!-- Scripts -->

    <!-- Font Awesome Script -->
    <script src={{ asset("https://kit.fontawesome.com/41e45c37a6.js")}} crossorigin="anonymous"></script>

    <!-- Jquery JS-->
    <script src="{{ asset('Dashboard/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('Dashboard/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('Dashboard/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="Dashboard/vendor/slick/slick.min.js">
    </script>
    <script src={{ asset("Dashboard/vendor/wow/wow.min.js")}}></script>
    <script src={{ asset("Dashboard/vendor/animsition/animsition.min.js")}}></script>
    <script src={{ asset("Dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js")}}>
    </script>
    <script src={{ asset("Dashboard/vendor/counter-up/jquery.waypoints.min.js")}}></script>
    <script src={{ asset("Dashboard/vendor/counter-up/jquery.counterup.min.js")}}>
    </script>
    <script src={{ asset("Dashboard/vendor/circle-progress/circle-progress.min.js")}}></script>
    <script src={{ asset("Dashboard/vendor/perfect-scrollbar/perfect-scrollbar.js")}}></script>
    <script src={{ asset("Dashboard/vendor/chartjs/Chart.bundle.min.js")}}></script>
    <script src={{ asset("Dashboard/vendor/select2/select2.min.js")}}>
    </script>

    <!-- Main JS-->
    <script src={{ asset("Dashboard/js/main.js")}}></script>

</body>

</html>
