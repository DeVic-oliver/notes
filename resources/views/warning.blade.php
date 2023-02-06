@extends('layouts.main')

@section('title', $warning->title )

@section('header')
@include('layouts.header.menus.main-menu')
@endsection

@section('content')
    <main class="">
        <div class="">
            <div class="">
                <h1>{{$warning->title}}</h1>
                <p>{{$warning->description}}</p>
            </div>
            @if($isAdmin)
                <div class="">
                    <form action="/note/delete/{{$warning->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete</button>
                    </form>
                    <form action="/note/edit/{{$warning->id}}" method="GET">
                        @csrf
                        <button type="submit">Edit</button>
                    </form>
                </div>
            @endif
        </div>
        <div class="">
            <h2 class="">More warnings</h2>
            <div class="">
                warnings list
            </div>
            <button>
                <a href="/dashboard">Go to Dashboard</a>
            </button>
        </div>
    </main>
@endsection