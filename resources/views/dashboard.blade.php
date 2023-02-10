@extends('layouts.main')

@section('title', 'WebNotes Reminder')

@section('header')
@include('layouts.header.menus.main-menu')
@endsection

@section('content')

<main class="container-lg mt-8 mb-8 px-4">
    <h1 class="text-4xl text-center lg:text-start">My notes</h1>
    @if (is_countable($notes) && count($notes) > 0)
        <div class="grid grid-cols-1 gap-6 mx-auto mt-[40px] sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($notes as $note)
                <article class="grid grid-cols-1 gap-3 bg-white rounded-xl p-5 pb-8 relative border w-60 mx-auto sm:w-full">
                    <div class="">
                        <h1 class="font-bold text-lg mt-[25px]">{{$note->title}}</h1>
                        <p class="text-base mt-[15px] mb-[15px]">{{$note->description}}</p>
                    </div>
                    <form action="/note/delete/{{$note->id}}" method="POST" class="absolute top-0 right-[10px]">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-amber-50 relative px-3 py-1 top-3 right-2 rounded-full">x</button>
                    </form>
                    <div class="flex flex-row w-full mx-auto mt-5 text-center justify-around">
                        <form action="/note/edit/{{$note->id}}" method="GET" class="w-[45%] text-center">
                            @csrf
                            <button type="submit" class="default-btn btn p-3 w-full">Editar</button>
                        </form>
                        <form action="/note/{{$note->id}}" method="GET" class="w-[45%]">
                            @csrf
                            <button type="submit" class="default-btn btn p-3 w-full">Ver</button>
                        </form>
                    </div>
                </article>
            @endforeach    
        </div>
    @else
        <h2 class="mt-6 text-center text-lg lg:text-start">You don't have any notes!</h2>    
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
                    <form action="/warnings/{{$warning->id}}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-primary">Visualizar</button>
                    </form>
                </div>
            </article>
        @endforeach
    </aside>
@endif

@endsection
