<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('content')
<div class="d-flex">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 text-white">
                <h1>Best & Easiest</h1>
                <h2>Text here</h2>
                <p>test</p>
                <a href="/about-us" style="text-decoration: none;">
                    <button class="btn btn-info">
                        <svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M8.59 16.59 13.17 12 8.59 7.41 10 6l6 6-6 6z"></path></svg>
                        Next
                    </button>
                </a>
            </div>
            <div class="col-md-8">
                <img src="{{ asset('images/laptop.png') }}" class="img-fluid" alt="Illustration">
            </div>
        </div>
    </div>
</div>
@endsection
