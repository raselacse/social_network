<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Page title -->
    <?php
    $settings=\App\Models\Settings::find(1);
    ?>
    <title>{!! $settings->site_title  !!}</title>
    <link rel="shortcut icon" href="{!! asset($settings->favicon) !!}">
    <link rel="stylesheet" href="{{ url('public/vendor/fontawesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ url('public/vendor/metisMenu/dist/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ url('public/vendor/animate.css/animate.css')}}">
    <link rel="stylesheet" href="{{ url('public/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/fonts/pe-fa fa-7-stroke/css/pe-fa fa-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ url('public/fonts/pe-fa fa-7-stroke/css/helper.css')}}">
    <link rel="stylesheet" href="{{ url('public/styles/style.css')}}">


    <link rel="stylesheet" href="{{ asset('public/css/font-awesome-6.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/app-header.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/animate.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    @yield('css')
</head>
