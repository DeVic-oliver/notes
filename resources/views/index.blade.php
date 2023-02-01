@extends('layouts.main')

@section('title', 'WebNotes Reminder')

@section('content')

<h1>My notes</h1>

@if (is_countable($notes) && count($notes) > 0)
    @foreach ($notes as $note)
        <div style="border:1px solid #119955">
            <h1>{{$note->title}}</h1>
            <p>{{$note->description}}</p>
            <form action="/note/{{$note->id}}" method="GET">
                @csrf
                <button type="submit" class="btn btn-primary">Visualizar</button>
            </form>
            <form action="/note/delete/{{$note->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">delete</button>
            </form>
        </div>
    @endforeach    
@else
    <h2>You don't have any notes!</h2>    
@endif

@endsection