@extends('layouts.main')
@section('title', 'Web Notes')
@section('head')
<link rel="stylesheet" href="/assets/css/welcome.css">
@endsection

<header class="">
    <nav class="">
        <div clas="">
            Logo
        </div>
        <ul>
            <li>
                <a href="/register">sign up</a>
            </li>
            <li>
                <a href="/login">sign in</a>
            </li>
        </ul>
    </nav>
</header>

@section('content')

    <main class="">
        <div class="">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/FJG5l6dfzp0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div>
            <h1>Welcome to web notes</h1>
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
