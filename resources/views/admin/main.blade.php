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
    <header class="bg-black flex flex-row align-middle justify-between px-4">
        <h3  class="text-white">Admin panel</h3>
        <ul class="py-3">
            <li>
                <form method="POST" action="{{ route('logout') }}" class="">
                    @csrf
                    <input type="submit" value="Logout" class="cursor-pointer text-white">
                </form>
            </li>    
        </ul>
    </header>
    <div class="grid grid-cols-1 lg:grid-cols-4">
        <header class="p-6 bg-gray-900 text-white h-screen">
            <nav class="grid grid-cols-1">
                <div class="relative">
                    <h3 id="teste" class="text-4xl uppercase font-bold">Webnotes</h3>
                </div>
                <ul class="hidden lg:flex flex-col mt-6">
                    <li class="">
                        <a href="/dashboard">Dashboard</a>
                    </li>            
                    <li class="">
                        <a href="/note/create">Adicionar Nota</a>
                    </li class="">
                    <li class="">
                        <a href="/profile">Perfil</a>
                    </li class="">
                    <li class="">
                        <a href="/admin/users">Usuários</a>
                    </li class="">
                </ul>
                
                <div id="open-mobile-menu" class="block self-center justify-self-end lg:hidden">
                    <img src="/assets/img/svg/bars-solid.svg" alt="" srcset="" class="w-5">
                </div>
                <div id="mobile-menu" class="mobile-menu z-50 border-l-2 border-solid">
                    <div id="close-mobile-menu" class="relative">
                        <img src="/assets/img/svg/xmark-solid.svg" alt="" srcset="" class="absolute top-7 right-7 w-5">
                    </div>
                    <nav class="relative top-16">
                        <ul class="flex flex-col font-medium justify-around ml-auto items-start">
                            <li class="ml-4">
                                <a href="/dashboard">Dashboard</a>
                            </li>            
                            <li class="ml-4">
                                <a href="/note/create">Adicionar Nota</a>
                            </li class="ml-4">
                            <li class="ml-4">
                                <a href="/profile">Perfil</a>
                            </li class="ml-4">
                            <li class="ml-4">
                                <a href="/admin/users">Usuários</a>
                            </li class="ml-4">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <input type="submit" value="Logout">
                                </form>
                            </li>
                            <li class="mt-[40px] text-center">
                                <a href="/admin" class="default-btn btn-dark hover:bg-gray-600 duration-300 ml-0">Admin</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </nav>
        </header>

        <main class="col-span-3">
            @if (session('msg'))
                <div class="w-full py-4 text-center text-white {{session('bg_feedback')}}">
                    <p>{{session('msg')}}</p>
                </div>
            @endif
        
             @yield('content')
        </main>
    
    </div>
    
    <footer class="text-center py-8 w-full bg-[#120f28] text-white">
        Developed by Victor Matheus - <a href="#">Github</a>
    </footer>

    <script src="/assets/js/main.js"></script>
    @yield('footer-scripts')
</body>
</html>