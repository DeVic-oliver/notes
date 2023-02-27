<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    @yield('head')
</head>
<body class="h-screen bg-amber-50">
    @yield('header')
    
    @if (session('msg'))
        <div class="w-full py-4 text-center text-white {{session('bg_feedback')}}">
            <p>{{session('msg')}}</p>
        </div>
    @endif
    
    @yield('content')

    <footer class="text-center mt-16 py-8 w-full bg-[#120f28] text-white">
        Developed by Victor Matheus - <a href="#">Github</a>
    </footer>

    <script src="/assets/js/main.js"></script>
    @yield('footer-scripts')
</body>
</html>