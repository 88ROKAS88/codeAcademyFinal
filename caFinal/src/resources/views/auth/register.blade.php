@extends('layouts.main')
@section('title','Register')
@section('content')
<div class="col-md-6 my-3 offset-md-3">
    <h1 class="my-5 text-center">Register</h1>
    <div> @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div>
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        </div>
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input class="form-control @error('name') is-invalid @enderror " id="name" type="text" name="name" value="{{old('name')}}" required autofocus>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{old('email')}}" required autofocus>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password">


        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm password</label>
            <input id="password_confirmation" class="form-control @error('password') is-invalid @enderror" type="password" name="password_confirmation" required>

        </div>


        <button type="submit" class="btn btn-outline-secondary">Register</button>

        <a class="mx-3 text-dark" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>
    </form>
</div>
@endsection