<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mr. Gamification | @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="shortcut icon" href="https://www.mrgamification.com/en/wp-content/uploads/2018/09/horse.png" type="image/x-icon">
</head>
<body style="overflow-x: hidden;">
    @include('inc.navbar')
    @yield('main-content')
    @include('inc.footer')
</body>
</html>
