<!-- resources/views/register.blade.php -->
@extends('layouts.app')

@section('content')
<div class="d-flex">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card bg-transparent">
                    <div class="card-body text-center">
                        <h2 style="margin-bottom: 5rem;">Sign up here</h2>
                        <form id="signup" action="javascript:void(0);" method="POST">
                        @csrf
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name : " required>
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email : " required>
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password : " required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign Up</button>
                        </form>
                        <p class="mt-5">
                            Already have an account?<br><a href="{{ route('login') }}">Sign in now</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    