@extends('layouts.main')

@section('title', 'Note Creation')

@section('header')
@include('layouts.header.menus.main-menu')
@endsection

@section('content')

<form action="/note/store" method="post">
    @csrf
    <x-forms.note-form-base :is-admin="$admin" />
    <button type="submit" class="">Create</button>
</form>

@endsection