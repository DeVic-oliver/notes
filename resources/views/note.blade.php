@extends('layouts.main')

@section('title', $note->title )

@section('content')

<h1>{{$note->title}}</h1>
<p>{{$note->description}}</p>

<form action="/note/delete/{{$note->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">delete</button>
</form>
<form action="/note/edit/{{$note->id}}" method="GET">
    @csrf
    <button type="submit">editar</button>
</form>

@endsection