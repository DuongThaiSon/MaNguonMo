<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/client') }}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/client') }}/css/animate.css">

    <link rel="stylesheet" href="{{ asset('assets/client') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets/client') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('assets/client') }}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{ asset('assets/client') }}/css/aos.css">

    <link rel="stylesheet" href="{{ asset('assets/client') }}/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('assets/client') }}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ asset('assets/client') }}/css/jquery.timepicker.css">

    <link rel="stylesheet" href="{{ asset('assets/client') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('assets/client') }}/css/icomoon.css">
    <link rel="stylesheet" href="{{ asset('assets/client') }}/css/style.css">
</head>
@include('client.partials.header')
@yield('content')
@include('client.partials.footer')
<body>
    <script src="{{ asset('assets/client') }}/js/jquery.min.js"></script>
    <script src="{{ asset('assets/client') }}/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="{{ asset('assets/client') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets/client') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/client') }}/js/jquery.easing.1.3.js"></script>
    <script src="{{ asset('assets/client') }}/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('assets/client') }}/js/jquery.stellar.min.js"></script>
    <script src="{{ asset('assets/client') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('assets/client') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('assets/client') }}/js/aos.js"></script>
    <script src="{{ asset('assets/client') }}/js/jquery.animateNumber.min.js"></script>
    <script src="{{ asset('assets/client') }}/js/bootstrap-datepicker.js"></script>
    <script src="{{ asset('assets/client') }}/js/jquery.timepicker.min.js"></script>
    <script src="{{ asset('assets/client') }}/js/scrollax.min.js"></script>
    <script src="{{ asset('assets/client') }}/js/main.js"></script>
</body>

</html>
