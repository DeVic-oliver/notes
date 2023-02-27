@extends('layouts.main')

@section('title', 'Note edition')
@section('header')
@include('layouts.header.menus.main-menu')
@endsection
@section('content')

    <div class="container-lg px-4 mt-11 grid grid-cols-1 gap-6 lg:grid-cols-3">
        <main class="col-span-2">
            <h1 class="text-4xl text-center my-7 font-bold md:text-start">EDIT NOTE</h1>
            <form action="/note/update/{{$id}}" method="POST" class="max-w-3xl w-full">
                @csrf
                @method('PUT')
                <x-forms.note-form-base :is-admin="$admin"/>
                <div class="text-center mt-6 md:text-end">
                    <button type="submit" class="btn default-btn w-36 md:w-28">Save</button>
                </div>
            </form>
        </main>
        <aside class="mt-8">
            <div>
                <h1>NOTE NOTE</h1>
                <h1>NOTE NOTE</h1>
                <h1>NOTE NOTE</h1>
                <h1>NOTE NOTE</h1>
            </div>
            @include('webnotes-components.notes-list')
        </aside>
    </div>
        
@endsection