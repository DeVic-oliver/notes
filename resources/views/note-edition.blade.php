@extends('layouts.main')

@section('title', 'Note edition')

@section('content')

    <main class="">
        <div>
            <h1>Edit note</h1>
            <form action="/note/update/{{$id}}" method="POST" class=>
                @csrf
                @method('PUT')
                <label for="note-title">Title</label>
                <input type="text" name="title" id="note-title">
                <br>
                <label for="note-description">Description</label>
                <textarea name="description" id="note-description" cols="30" rows="10"></textarea>
                <button type="submit" class="">Save</button>
            </form>
        </div>
       @include('webnotes-components.notes-list')
    </main>
    
@endsection