@extends('layouts.main')

@section('title', 'User edition')

@section('header')
@include('layouts.header.menus.admin-main-menu')
@endsection

@section('content')
    <h1>Edit: {{$user->name}}</h1>
    <form action="/admin/users/edit/{{$user->id}}" method="post">
        @csrf
        @method('PUT')
        <span>Fake input: {{$user->name}}</span>
        <span>Fake input: {{$user->email}}</span>
        <select name="user_role" id="">
            <option value="subscriber">Subscriber</option>
            <option value="administrator">Administrator</option>
        </select>
        <button type="submit">Save</button>
    </form>
    <form action="/admin/users/delete/{{$user->id}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete this user</button>
    </form>
@endsection