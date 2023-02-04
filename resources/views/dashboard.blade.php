@extends('layouts.main')

@section('title', 'WebNotes Reminder')

@section('head')
<link rel="stylesheet" href="/assets/css/tailwind-output/dashboard.css">
@endsection

@section('header')
@include('layouts.header.menus.main-menu')
@endsection

@section('content')

<main class="">
    <h1 class="text-large">My notes</h1>
    
    @if (is_countable($notes) && count($notes) > 0)
        <div class="">
            @foreach ($notes as $note)
                <article class="">
                    <div class="">
                        <h1>{{$note->title}}</h1>
                        <p>{{$note->description}}</p>
                    </div>
                    <form action="/note/delete/{{$note->id}}" method="POST" class="">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete</button>
                    </form>
                    <div class="">
                        <form action="/note/{{$note->id}}" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-primary">Visualizar</button>
                        </form>
                        <form action="/note/edit/{{$note->id}}" method="GET">
                            @csrf
                            <button type="submit">editar</button>
                        </form>
                    </div>
                </article>
            @endforeach    
        </div>
    @else
        <div class="">
            <h2>You don't have any notes!</h2>    
        </div>
    @endif

</main>
@if ((is_countable($warnings) && count($warnings) > 0))
    <aside>
        <h3>Last admin warnings</h3>
        @foreach ($warnings as $warning)
            <article class="">
                <div class="">
                    <h1>{{$warning->title}}</h1>
                    <p>{{$warning->description}}</p>
                </div>
                <div class="">
                    <form action="/note/{{$warning->id}}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-primary">Visualizar</button>
                    </form>
                </div>
            </article>
        @endforeach
    </aside>
@endif

@endsection
