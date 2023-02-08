@extends('layouts.main')
@section('title', 'Web Notes')
@section('head')
@endsection

<header class="bg-[#fff] mb-12 px-6 py-8">
    <nav class="container-lg grid grid-cols-2 justify-between">

        <div>
            <img src="/img/post-it-logo.png" alt="Post it icons created by Freepik - Flaticon" srcset="" class="w-14 sm:w-24">
        </div>

        <ul class="hidden lg:grid grid-flow-col gap-4 items-center justify-end px-6 text-lg">
            <li class="">
                <a href="/register" class="hover:text-[#333]">sign up</a>
            </li>
            <li class="">
                <a href="/login" class="hover:text-[#333]">sign in</a>
            </li>
        </ul>

        <div id="open-mobile-menu" class="block self-center justify-self-end lg:hidden">
            <img src="/assets/img/svg/bars-solid.svg" alt="" srcset="" class="w-5">
        </div>
        <div id="mobile-menu" class="mobile-menu">
            <div id="close-mobile-menu" class="relative">
                <img src="/assets/img/svg/xmark-solid.svg" alt="" srcset="" class="absolute top-7 right-7 w-5">
            </div>
            <nav class="relative top-16">
                <ul class="flex flex-col font-medium justify-around ml-auto items-start">
                    <li class="w-full p-5 hover:bg-[#ffa2b1]">
                        <a href="/register" class="">sign up</a>
                    </li>
                    <li class="w-full p-5 hover:bg-[#ffa2b1]">
                        <a href="/login" class="">sign in</a>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</header>

@section('content')

    <main class="grid grid-cols-1 lg:grid-cols-2 justify-center px-8">
        <div class="">
            <iframe class="w-full" src="https://www.youtube.com/embed/FJG5l6dfzp0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="pt-8 pb-8 lg:pt-0 lg:pb-0 lg:pl-8 lg:pr-8">
            <h1 class="text-3xl text-center lg:text-start">Welcome to web notes</h1>
            <h2 class="text-xl text-center lg:text-start">Create some notes to remember anything</h2>
            <nav class="mt-8">
                <ul class="flex flex-row w-[90%] mx-auto justify-around">
                    <li>
                        <a href="/register">sign up</a>
                    </li>
                    <li>
                        <a href="/login">sign in</a>
                    </li>
                </ul>
            </nav>
        </div>
    </main>

@endsection
