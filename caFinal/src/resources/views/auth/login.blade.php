@extends('layouts.main')
@section('title','Login')
@section('content')
<div class="col-md-6 my-3 offset-md-3">
    <h1 class="my-5 text-center">Login</h1>
    <div>
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input id="email" class="form-control " type="email" name="email" value="{{old('email')}}" required autofocus>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password">
        </div>
        <div class="mb-3 form-check">
            <input name="remember" class="form-check-input" id="remember_me" type="checkbox">
            <label class="form-check-label" for="remember_me">Remember me</label>
        </div>
        <button type="submit" class="btn btn-outline-secondary">Log in</button>

        @if (Route::has('password.request'))
        <a class="mx-3 text-dark" href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
        </a>
        @endif
    </form>
</div>
@endsection