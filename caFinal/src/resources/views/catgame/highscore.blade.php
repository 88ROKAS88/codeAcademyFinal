@extends('layouts.main')
@section('title','Cat game highscore')
@section('content')
<h1 class="my-4 text-center">The Cat Game high score</h1>
@if ($score != null)
<h2 class="text-end"> Your score: {{ $score }} </h2>
@endif
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">LVL 1</th>
            <th scope="col">LVL 2</th>
            <th scope="col">LVL 3</th>
            <th scope="col">OVERALL</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($highscores as $highscore)
        <tr @class(['table-secondary'=> Auth::user() && Auth::user()->name == $highscore->user_name ]) >
            <th scope="row"> {{$loop->index+1}}</th>
            <td> {{ $highscore->user_name }}</td>
            <td>{{ $highscore->lvl1 }}</td>
            <td>{{ $highscore->lvl2 }}</td>
            <td>{{ $highscore->lvl3 }}</td>
            <td>{{ $highscore->overall }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection