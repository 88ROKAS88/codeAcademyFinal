@extends('layouts.main')
@section('title','Cat game credits')
@section('content')
<h1>Cat game credits</h1>
<div>
    resources <br />
    starting idea how to create game - <a href="https://www.youtube.com/watch?v=w-OKdSHRlfA">https://www.youtube.com/watch?v=w-OKdSHRlfA</a> <br />
    how to make animations with JS - <a href="https://www.youtube.com/watch?v=_3WsTJvNbJg">https://www.youtube.com/watch?v=_3WsTJvNbJg</a> <br />
    <br />
    links - will be usefull <br />
    different stylesheet for different pages in laravel <br />
    https://stackoverflow.com/questions/41374816/different-stylesheet-for-different-pages-in-laravel <br />

    @if(\Request::is("games/credits"))
    CREDITS
    @endif

</div>
@endsection