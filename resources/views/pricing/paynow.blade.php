@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-5">Pay with Paynow</h1>
    <div class="row">
        <div class="col-lg-6 text-center">
            <img src="{{ asset('images/paynow-barcode.png') }}" alt="Credit card" class="img-fluid" style="max-width: 50%;">
        </div>
        <div class="col-lg-6">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <h2 class="text-dark">BILL</h2>
                    <hr>
                    <p class="text-dark">$200 / Year</p>
                    <hr>
                    <p class="text-dark">txt</p>
                    <hr>
                    <p class="text-dark">txt</p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
