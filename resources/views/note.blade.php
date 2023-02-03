@extends('layouts.main')

@section('title', $note->title )

@section('content')
    <main class="">
        <div class="">
            <div class="">
                <h1>{{$note->title}}</h1>
                <p>{{$note->description}}</p>
            </div>
            <div class="">
                <form action="/note/delete/{{$note->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">delete</button>
                </form>
                <form action="/note/edit/{{$note->id}}" method="GET">
                    @csrf
                    <button type="submit">Edit</button>
                </form>
            </div>
        </div>
        @include('webnotes-components.notes-list')
    </main>
@endsection