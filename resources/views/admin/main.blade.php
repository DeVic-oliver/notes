<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/child-style.css">
    @yield('head')
</head>
<body class="h-screen bg-white">

    <header class="bg-black flex flex-row items-center justify-between px-4 py-2">
        <h3  class="text-white">Admin panel</h3>
        <ul class="hidden lg:block">
            <li>
                <form method="POST" action="{{ route('logout') }}" class="">
                    @csrf
                    <input type="submit" value="Logout" class="cursor-pointer text-white">
                </form>
            </li>    
        </ul>
        <div id="open-mobile-menu" class="w-[15px] block lg:hidden ">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-white" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
        </div>
    </header>

    <div class="grid grid-cols-1 lg:grid-cols-6">
        <aside class="col-start-1 col-end-2 text-white">
            {{-- DESKTOP NAV MENU --}}
            <div class="hidden bg-gray-900 h-screen lg:block lg:relative ">
                <nav class="grid grid-cols-1">
                    <div class="relative">
                        <h3 id="teste" class="text-4xl uppercase font-bold">Webnotes</h3>
                    </div>
                    <ul class="lg:flex flex-col mt-6">
                        @include('admin.menu.default-items')
                    </ul>                
                </nav>
            </div>

            {{-- MOBILE MENU --}}
            <div id="mobile-menu" class="mobile-menu bg-gray-900 flex flex-col p-6 lg:hidden">
                <div class="relative">
                    <h3 id="teste" class="text-4xl uppercase font-bold">Webnotes</h3>
                </div>
                <div id="close-mobile-menu" class="absolute top-5 right-5 left-auto z-[9999] lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg"  class="fill-white w-5" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg>
                </div>
                <ul class="lg:flex flex-col mt-6">
                    @include('admin.menu.default-items')
                </ul>        
                <div class="mt-8">
                    <form method="POST" action="{{ route('logout') }}" class="">
                        @csrf
                        <input type="submit" value="Logout" class="w-40 p-4 text-start bg-gray-700 cursor-pointer text-white border-none">
                    </form>
                </div>
            </div>
        </aside>

        <main class="lg:col-start-2 lg:col-end-7 relative bg-red-400">
            @if (session('msg'))
                <div class="w-full py-4 text-center text-white {{session('bg_feedback')}}">
                    <p>{{session('msg')}}</p>
                </div>
            @endif
             @yield('content')
        </main>
    
    </div>
    
    <footer class="relative top-auto bottom-0 text-center py-8 w-full bg-[#120f28] text-white">
        Developed by Victor Matheus - <a href="#">Github</a>
    </footer>

    <script src="/assets/js/main.js"></script>
    @yield('footer-scripts')
</body>
</html>