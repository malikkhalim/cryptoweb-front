@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <div class="card bg-dark text-white">
                <div class="card-body">
                    <h1 class="display-4">Balance due: $300</h1>
                    <p>Select payment type:</p>
                    <div class="d-flex flex-column mt-3">
                        <a href="{{ route('pricing.credit-card') }}" class="btn btn-secondary mb-2 d-flex align-items-center">
                            <img src="{{ asset('images/credit-card.png') }}" alt="Credit card" class="img-fluid" style="max-width: 30px;">
                            <span class="ml-3">&nbsp Credit card</span>
                        </a>
                        <a href="{{ route('pricing.debit-card') }}" class="btn btn-secondary mb-2 d-flex align-items-center">
                            <img src="{{ asset('images/debit-card.png') }}" alt="Credit card" class="img-fluid" style="max-width: 30px;">
                            <span class="ml-3">&nbsp Debit card</span>
                        </a>
                        <a href="{{ route('pricing.paynow') }}" class="btn btn-secondary mb-2 d-flex align-items-center">
                            <img src="{{ asset('images/paynow.png') }}" alt="Credit card" class="img-fluid" style="max-width: 30px;">
                            <span class="ml-3">&nbsp Paynow</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card bg-info">
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
