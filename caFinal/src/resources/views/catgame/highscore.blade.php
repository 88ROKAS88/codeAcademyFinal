@extends('layouts.main')
@section('title','Cat game highscore')
@section('content')
<h1 class="my-4 text-center">Cat game highscore</h1>
@if ($score != null)
<h1> Your score: {{ $score }} </h1>
@endif
<table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">LVL 1</th>
            <th scope="col">LVL 2</th>
            <th scope="col">LVL 3</th>
            <th scope="col">OVERALL</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($highscores as $highscore)

        <tr>
            <th scope="row">{{ $highscore->user_name }}</th>
            <td>{{ $highscore->lvl1 }}</td>
            <td>{{ $highscore->lvl2 }}</td>
            <td>{{ $highscore->lvl3 }}</td>
            <td>{{ $highscore->overall }}</td>
        </tr>

        @endforeach
    </tbody>
</table>
@endsection