@extends('layouts.app')

@section('content')
<div class="container mt-5 text-center">
    <h1 class="display-4">Payment successful!</h1>
    <div class="success-icon mt-4">
        <img src="{{ asset('images/checkmark.png') }}" alt="Checkmark" class="checkmark-animation">
    </div>
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
