@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <div class="card bg-transparent text-white">
                <div class="card-body">
                    <h1 class="display-4  mb-3">Pay with debit card</h1>
                    <form id="payment-form" action="javascript:void(0);" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email@email.com" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="card-info">Card information:</label>
                            <input type="text" class="form-control mb-3" id="card-number" name="card-number" placeholder="Card Number" required>
                            <div class="d-flex mb-3">
                                <input type="text" class="form-control" id="expiry-date" name="expiry-date" placeholder="MM/YY" required>
                                <input type="text" class="form-control" id="cvc" name="cvc" placeholder="CVC" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="cardholder-name">Cardholder name:</label>
                            <input type="text" class="form-control" id="cardholder-name" name="cardholder-name" required>
                        </div>
                        <button type="submit" class="btn btn-secondary">Pay</button>
                    </form>
                </div>
            </div>
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
