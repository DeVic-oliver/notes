@extends('layouts.main')

@section('title', 'WebNotes Reminder')

@section('header')
@include('layouts.header.menus.main-menu')
@endsection

@section('content')

<main class="container-lg mt-8 mb-8 px-4">
    <h1 class="text-4xl text-center lg:text-start">My notes</h1>
    @if (is_countable($notes) && count($notes) > 0)
        <div class="grid grid-cols-1 gap-6 mx-auto mt-[40px] sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($notes['notes'] as $note)
                <x-notes.card :id="$note->id" :title="$note->title" :description="$note->description" {{ $showDelete(true) }}/>
            @endforeach    
        </div>
    @else
        <h2 class="mt-6 text-center text-lg lg:text-start">You don't have any notes!</h2>    
    @endif

</main>
@if ((is_countable($warnings['warnings']) && count($warnings['warnings']) > 0))
    <aside>
        <h3>Last admin warnings</h3>
        @foreach ($warnings['warnings'] as $warning)
            <x-notes.card :id="$warning->id" :title="$warning->title" :description="$warning->description"  {{ $showDelete(false) }} />
        @endforeach
    </aside>
@endif

@endsection
