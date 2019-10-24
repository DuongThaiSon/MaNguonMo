<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" href="{{ asset('assets/admin') }}/css/open-iconic-bootstrap.min.css">
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
    <link href="{{ asset('assets/admin') }}/css/main.css" rel="stylesheet">

</head> 

<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header closed-sidebar">

    @include('admin.partials.header')
    @include('admin.partials.setting')
    <div class="app-main">
      @include('admin.partials.menu')
      <div class="app-main__outer">
      @yield('content')
      </div>
    </div>

</div>

<body>
    <script type="text/javascript" src="{{ asset('assets/admin') }}/js/main.js"></script>
</body>

</html>
