<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/assets/css/style.css">
    @yield('head')
</head>
<body class="bg-amber-50">
    @yield('header')
    
    @if (session('msg'))
        {{session('msg')}}
    @endif

    @yield('content')

    <footer>
        Developed by Victor Matheus - <a href="#">Github</a>
    </footer>

    @yield('footer-scripts')
</body>
</html>