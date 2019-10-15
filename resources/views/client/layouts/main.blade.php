<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trang chủ - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('client/asset') }}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('client/asset') }}/css/animate.css">

    <link rel="stylesheet" href="{{ asset('client/asset') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('client/asset') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('client/asset') }}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{ asset('client/asset') }}/css/aos.css">

    <link rel="stylesheet" href="{{ asset('client/asset') }}/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('client/asset') }}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ asset('client/asset') }}/css/jquery.timepicker.css">


    <link rel="stylesheet" href="{{ asset('client/asset') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('client/asset') }}/css/icomoon.css">
    <link rel="stylesheet" href="{{ asset('client/asset') }}/css/style.css">
</head>
@include('client.partials.header')
@yield('content')
@include('client.partials.footer')
<body>
    <script src="{{ asset('client/asset') }}/js/jquery.min.js"></script>
    <script src="{{ asset('client/asset') }}/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="{{ asset('client/asset') }}/js/popper.min.js"></script>
    <script src="{{ asset('client/asset') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('client/asset') }}/js/jquery.easing.1.3.js"></script>
    <script src="{{ asset('client/asset') }}/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('client/asset') }}/js/jquery.stellar.min.js"></script>
    <script src="{{ asset('client/asset') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('client/asset') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('client/asset') }}/js/aos.js"></script>
    <script src="{{ asset('client/asset') }}/js/jquery.animateNumber.min.js"></script>
    <script src="{{ asset('client/asset') }}/js/bootstrap-datepicker.js"></script>
    <script src="{{ asset('client/asset') }}/js/jquery.timepicker.min.js"></script>
    <script src="{{ asset('client/asset') }}/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="{{ asset('client/asset') }}/js/google-map.js"></script>
    <script src="{{ asset('client/asset') }}/js/main.js"></script>
</body>

</html>
