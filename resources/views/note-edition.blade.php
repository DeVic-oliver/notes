@extends('layouts.main')

@section('title', 'Note edition')
@section('header')
@include('layouts.header.menus.main-menu')
@endsection
@section('content')

    <div class="grid grid-cols-1 lg:grid-cols-3">
        <main class="col-span-2">
            <h1>Edit note</h1>
            <form action="/note/update/{{$id}}" method="POST" class=>
                @csrf
                @method('PUT')
                <x-forms.note-form-base :is-admin="$admin"/>
                <button type="submit" class="">Save</button>
            </form>
        </main>
        <aside class="">
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