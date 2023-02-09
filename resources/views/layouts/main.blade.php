<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/assets/css/build/style.css">
    <link rel="stylesheet" href="/assets/css/style.css">

    @yield('head')
</head>
<body class="h-screen">
    @yield('header')
    
    @if (session('msg'))
        {{session('msg')}}
    @endif

    @yield('content')

    <footer class="text-center absolute bottom-0 py-8 w-full">
        Developed by Victor Matheus - <a href="#">Github</a>
    </footer>

    <script src="/assets/js/main.js"></script>
    @yield('footer-scripts')
</body>
</html>