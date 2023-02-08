@extends('layouts.main')
@section('title', 'Web Notes')
@section('head')
@endsection

<header class="bg-[#fff] mb-12 px-6 py-8">
    <nav class="grid grid-cols-2 justify-between">

        <div>
            <img src="/img/post-it-logo.png" alt="Post it icons created by Freepik - Flaticon" srcset="" class="w-14 sm:w-24">
        </div>

        <ul class="hidden flex flex-row justify-around">
            <li class="mr-6">
                <a href="/register" class="hover:font-bold hover:underline transition-all">sign up</a>
            </li>
            <li>
                <a href="/login" class="hover:font-bold hover:underline transition-all">sign in</a>
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

    <main class="grid grid-cols-1 justify-center px-8">
        <div class="">
            <iframe class="w-full" src="https://www.youtube.com/embed/FJG5l6dfzp0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="">
            <h1 class="">Welcome to web notes</h1>
            <h2>Create some notes to remember anything</h2>
            <nav class="">
                <ul>
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
