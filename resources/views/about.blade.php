<!-- resources/views/about.blade.php -->
@extends('layouts.app')

@section('content')
<div class="d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 text-white">
                <h1>Trusted Platform</h1>
                <p>txt</p>
                <div class="d-flex">
                    <div class="me-4">
                        <h3 class="text-info">+ 90k</h3>
                        <p>Active Users</p>
                    </div>
                    <div>
                        <h3 class="text-info">+ 99%</h3>
                        <p>Committed Users</p>
                    </div>
                </div>
                <a href="/" style="text-decoration: none;">
                    <button class="btn btn-secondary mt-3">
                        <svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M15.41 7.41 14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path></svg>
                        Previous
                    </button>
                </a>
            </div>
            <div class="col-md-7 text-end">
                <img src="{{ asset('images/about-us-hero.jpg') }}" class="img-fluid" style="margin-top: 10%; max-width: 100%;" alt="Illustration">
            </div>
        </div>
    </div>
</div>
@endsection
