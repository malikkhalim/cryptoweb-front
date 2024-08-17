<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        return view('pricing.index');
    }

    public function bill()
    {
        return view('pricing.bill');
    }

    public function creditCard()
    {
        return view('pricing.credit-card');
    }

    public function debitCard()
    {
        return view('pricing.debit-card');
    }

    public function paynow()
    {
        return view('pricing.paynow');
    }
}
