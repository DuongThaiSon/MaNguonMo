<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/admin') }}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/css/animate.css">

    <link rel="stylesheet" href="{{ asset('assets/admin') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{ asset('assets/admin') }}/css/aos.css">

    <link rel="stylesheet" href="{{ asset('assets/admin') }}/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('assets/admin') }}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/css/jquery.timepicker.css">

    <link rel="stylesheet" href="{{ asset('assets/admin') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/css/icomoon.css">
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/css/admin.css">
</head>
@include('admin.partials.header')
@yield('content')
@include('admin.partials.footer')
<body>
    <script src="{{ asset('assets/admin') }}/js/jquery.min.js"></script>
    <script src="{{ asset('assets/admin') }}/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="{{ asset('assets/admin') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets/admin') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/admin') }}/js/jquery.easing.1.3.js"></script>
    <script src="{{ asset('assets/admin') }}/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('assets/admin') }}/js/jquery.stellar.min.js"></script>
    <script src="{{ asset('assets/admin') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('assets/admin') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('assets/admin') }}/js/aos.js"></script>
    <script src="{{ asset('assets/admin') }}/js/jquery.animateNumber.min.js"></script>
    <script src="{{ asset('assets/admin') }}/js/bootstrap-datepicker.js"></script>
    <script src="{{ asset('assets/admin') }}/js/jquery.timepicker.min.js"></script>
    <script src="{{ asset('assets/admin') }}/js/scrollax.min.js"></script>
    <script src="{{ asset('assets/admin') }}/js/main.js"></script>
    <script src="{{ asset('assets/admin') }}/js/admin.js"></script>
</body>

</html>
