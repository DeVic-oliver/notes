@extends('layouts.main')

@section('title', 'Note Creation')

@section('header')
@include('layouts.header.menus.main-menu')
@endsection

@section('content')
<main class="container-lg px-4 mt-8">
    <h1 class="text-4xl text-center my-7 font-bold">Nova anotação</h1>
    <form action="/note/store" method="post" class="max-w-lg w-full mx-auto grid grid-cols-1 gap-6">
        @csrf
        <x-forms.note-form-base :is-admin="$admin" />
        <div class="text-center">
            <button type="submit" class="default-btn btn btn-dark p-3 w-[80%]">Criar</button>
        </div>
    </form>
</main>

@endsection