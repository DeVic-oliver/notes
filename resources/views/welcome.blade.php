@extends('layouts.main')
@section('title', 'Web Notes')
@section('header')
<header class="bg-white p-6 mb-[60px]">
    <nav class="container-lg grid grid-cols-2 justify-between">

        <div>
            <img src="/img/post-it-logo.png" alt="Post it icons created by Freepik - Flaticon" srcset="" class="w-14">
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
        <div id="mobile-menu" class="mobile-menu z-50 border-l-2 border-solid">
            <div id="close-mobile-menu" class="relative">
                <img src="/assets/img/svg/xmark-solid.svg" alt="" srcset="" class="absolute top-7 right-7 w-5">
            </div>
            <nav class="relative top-16">
                <ul class="">
                    <li>
                        <a href="/register" class="">sign up</a>
                    </li>
                    <li>
                        <a href="/login" class="">sign in</a>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</header>
@endsection

@section('content')
    <main class="lg:max-w-[1130px] mx-auto w-full grid grid-cols-1 lg:grid-cols-2 justify-center px-8 md:px-8 lg:px-4">
        <div class="">
            <iframe class="rounded-xl mx-auto w-full h-full sm:w-[360px] sm:h-[215px] lg:w-[460px] lg:h-[215px] xl:w-[560px] xl:h-[315px] " src="https://www.youtube.com/embed/FJG5l6dfzp0" title="YouTube video player" frameborder="0" allow="" allowfullscreen></iframe></div>
        <div class="pt-8 pb-8 lg:pt-0 lg:pb-0 lg:pl-8 lg:pr-8 lg:justify-self-center self-center">
            <div class="w-[80%] mx-auto lg:w-full">
                <h1 class="text-xl text-center font-bold lg:text-start lg:text-4xl">Welcome to web notes</h1>
                <h2 class="text-lg text-center lg:text-start">Create some notes to remember anything</h2>
            </div>
            <nav class="mt-8 h-auto">
                <ul class="h-auto flex flex-row w-[90%] mx-auto justify-center sm:max-w-xs sm:justify-center lg:justify-start lg:w-full lg:mx-0">
                    <li>
                        <a href="/login" class="default-btn btn hover:bg-blue-300 duration-300">sign in</a>
                    </li>
                    <li>
                        <a href="/register" class="default-btn btn-dark hover:bg-gray-600 duration-300 ml-6">sign up</a>
                    </li>
                </ul>
            </nav>
        </div>
    </main>
@endsection
