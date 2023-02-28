<header class="p-6 bg-white">
    <nav class="container-lg grid grid-cols-2 items-center">
        <div>
            <a href="/dashboard">
                <img src="/img/post-it-logo.png" alt="Post it icons created by Freepik - Flaticon" srcset="" class="w-14">
            </a>
        </div>
        <ul class="hidden lg:flex flex-row lg:justify-end">
            <li class="ml-4">
                <a href="/dashboard">Dashboard</a>
            </li>            
            <li class="ml-4">
                <a href="/note/create">Adicionar nota</a>
            </li class="ml-4">
            <li class="ml-4">
                <a href="/profile">Perfil</a>
            </li class="ml-4">
            <li class="ml-4">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <input type="submit" value="Logout" class="cursor-pointer">
                </form>
            </li class="ml-4">
            <li class="ml-6">
                <a href="/admin" class="default-btn btn-dark hover:bg-gray-600 duration-300 p-3">Admin area</a>
            </li>
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
                    <li>
                        <a href="/dashboard">Dashboard</a>
                    </li>            
                    <li>
                        <a href="/note/create">Adicionar nota</a>
                    </li>
                    <li>
                        <a href="/profile">Perfil</a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <input type="submit" value="Logout">
                        </form>
                    </li>
                    <li class="mt-[40px] text-center">
                        <a href="/admin" class="default-btn btn-dark hover:bg-gray-600 duration-300 ml-0">Admin area</a>
                    </li>
                </ul>
            </nav>
            
        </div>
    </nav>
</header>