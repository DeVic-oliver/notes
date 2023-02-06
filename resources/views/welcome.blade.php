@extends('layouts.main')
@section('title', 'Web Notes')
@section('head')
@endsection

<header class="bg-black md:bg-white text-gray-800 min-h-fit flex items-center py-5">
    <nav class="grid grid-cols-2 justify-between xl:container lg:mx-auto sm:w-full sm:px-8">
        <div>
            <img src="/img/post-it-logo.png" alt="Post it icons created by Freepik - Flaticon" srcset="" class="w-14 sm:w-24">
        </div>
        <ul class="flex font-medium justify-around ml-auto items-center">
            <li class="mr-6">
                <a href="/register" class="hover:font-bold hover:underline transition-all">sign up</a>
            </li>
            <li>
                <a href="/login" class="hover:font-bold hover:underline transition-all">sign in</a>
            </li>
        </ul>

        <div class="open-panner min-w">O</div>

        <div class="mobile-panner">
            <div class="close-panner">X</div>
            <ul class="flex font-medium justify-around ml-auto items-center">
                <li class="mr-6">
                    <a href="/register" class="hover:font-bold hover:underline transition-all">sign up</a>
                </li>
                <li>
                    <a href="/login" class="hover:font-bold hover:underline transition-all">sign in</a>
                </li>
            </ul>
        </div>

    </nav>
</header>

@section('content')

    <main class="xl:container mx-auto mt-10 mb-10 grid grid-cols-2 md:grid-cols-1 justify-center">
        <div class="">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/FJG5l6dfzp0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="">
            <h1 class="text-3xl font-bold underline">Welcome to web notes</h1>
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
