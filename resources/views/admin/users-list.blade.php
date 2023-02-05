@extends('layouts.main')

@section('title', 'Users')

@section('header')
@include('layouts.header.menus.admin-main-menu')
@endsection

@section('content')

<h1>Webnotes registered users</h1>

@if(count($users) > 0)
<table>
    <thead>
        <td>#id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Quantity of webnotes</td>
        <td>Role</td>
        <td>Actions</td>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->getQuantityOfNotesCreated()}}</td>
                <td>{{$user->role}}</td>
                <td>
                    <form action="/admin/users/{{$user->id}}" method="get">
                        @csrf
                        <button type="submit">Edit</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@else
    <h3>There is no users right now!</h3>
@endif
@endsection