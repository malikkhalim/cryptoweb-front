<!-- resources/views/login.blade.php -->
@extends('layouts.app')

@section('content')
<div class="d-flex">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card bg-transparent">
                    <div class="card-body text-center">
                        <img src="{{ asset('images/user-icon.png') }}" alt="User Icon" class="img-fluid rounded-circle" width="100">
                        <h2 class="mb-5">Sign in</h2>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group mb-4">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email :" required>
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password : " required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
                        </form>
                        <p class="mt-5">
                            Don’t have an account yet? <br> <a href="{{ route('register') }}">Sign up now</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
