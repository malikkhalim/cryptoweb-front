@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <div class="card bg-transparent text-white">
                <div class="card-body text-center">
                    <img src="{{ asset('images/call-center.png') }}" alt="Illustration" class="img-fluid mb-3" style="max-width: 300px;">
                    <h1 class="display-4">Pricing</h1>
                    <p>txt</p>
                    <div class="d-flex justify-content-center mt-3">
                        <a href="/">
                            <button class="btn btn-secondary me-3">
                                <svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M15.41 7.41 14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path></svg>
                                Previous
                            </button>
                        </a>
                        <a href="{{ route('pricing.bill') }}">
                            <button class="btn btn-info">
                                <svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M8.59 16.59 13.17 12 8.59 7.41 10 6l6 6-6 6z"></path></svg>
                                Next
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card bg-secondary text-white">
                <div class="card-body">
                    <h2 class="text-info">BILL</h2>
                    <hr>
                    <p>txt</p>
                    <hr>
                    <p>txt</p>
                    <hr>
                    <p>txt</p>
                    <hr>
                    <p>txt</p>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <h2 class="text-dark">BILL</h2>
                    <hr>
                    <p>txt</p>
                    <hr>
                    <p>txt</p>
                    <hr>
                    <p>txt</p>
                    <hr>
                    <p>txt</p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
