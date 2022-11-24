@extends('layouts.main')
@section('title','Forgot-password')
@section('content')
<div class="col-md-6 my-3 offset-md-3">
    <h1 class="my-5 text-center">Forgot password</h1>
    <div>
        <div>
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        </div>
    </div>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{old('email')}}" required autofocus>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>


        <button type="submit" class="btn btn-outline-secondary">Email Password Reset Link</button>

    </form>
</div>
@endsection