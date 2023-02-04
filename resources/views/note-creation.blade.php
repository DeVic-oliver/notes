@extends('layouts.main')

@section('title', 'Note Creation')

@section('header')
@include('layouts.header.menus.main-menu')
@endsection

@section('content')

<form action="/note/store" method="post">
    @csrf
    <label for="note-title">Title</label>
    <input type="text" name="title" id="note-title">
    <br>
    @if($admin)
        <select name="type" id="">
            <option value="reminder">Reminder</option>
            <option value="warning">Warning</option>
        </select>
        <br>
    @endif
    <label for="note-description">Description</label>
    <textarea name="description" id="note-description" cols="30" rows="10"></textarea>
    <button type="submit" class="">Create</button>
</form>

@endsection