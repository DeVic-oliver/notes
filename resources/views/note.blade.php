@extends('layouts.main')

@section('title', $note->title )

@section('header')
@include('layouts.header.menus.main-menu')
@endsection

@section('content')
    <div class="container-lg px-4 mt-11 grid grid-cols-1 lg:gap-6 lg:grid-cols-3">
        <main class="col-span-2 mt-8">
            <article class="grid grid-cols-1 gap-3 bg-white rounded-xl p-5 pb-8 relative border w-full">
                <h1 class="text-4xl text-center my-7 font-bold md:text-start">{{$note->title}}</h1>
                <p class="text-base lg:text-lg" >{{$note->description}}</p>
                <div class="flex flex-row mt-5">
                    <form action="/note/delete/{{$note->id}}" method="POST" class="w-[45%] mx-auto">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="default-btn btn-delete btn p-3 w-full">Deletar</button>
                    </form>
                    <form action="/note/edit/{{$note->id}}" method="GET" class="w-[45%] mx-auto">
                        @csrf
                        <button type="submit" class="default-btn btn p-3 w-full">Editar</button>
                    </form>
                </div>
            </article>
        </main>
        <aside class="mt-8">
            @include('webnotes-components.notes-list')
        </aside>
    </div>
@endsection