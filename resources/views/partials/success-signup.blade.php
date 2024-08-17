@extends('layouts.app')

@section('content')
<div class="container mt-5 text-center">
    <div class="success-icon">
        <img src="{{ asset('images/checkmark.png') }}" alt="Checkmark" class="checkmark-animation">
    </div>
    <h2 style="font-size: 3rem;" >Account Created Successfully</h2>
    <a class="btn btn-danger rounded-pill mt-4" href="/login">Sign In</a>
</div>

<style>

    .success-icon {
        display: flex;
        justify-content: center;
        align-items: center;
        max-width: 30%;
        height: auto;
        margin: 0 auto;
    }
    .checkmark-animation {
        max-width: 100%;
        height: auto;
        animation: rotate-checkmark 1s ease-in-out;
    }
    @keyframes rotate-checkmark {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
</style>
@endsection
