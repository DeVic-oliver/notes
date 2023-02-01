@extends('layouts.main')

@section('title', 'Note Creation')

@section('content')

<form action="/note/store" method="post">
    @csrf
    <label for="note-title">Title</label>
    <input type="text" name="title" id="note-title">
    <br>
    <label for="note-description">Description</label>
    <textarea name="description" id="note-description" cols="30" rows="10"></textarea>
    <button type="submit" class="">Create</button>
</form>

@endsection