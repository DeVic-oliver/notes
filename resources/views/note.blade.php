@extends('layouts.main')

@section('title', $note->title)

@section('content')

<h1>{{$note->title}}</h1>
<p>{{$note->description}}</p>

@endsection