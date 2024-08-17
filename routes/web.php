<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\SuccessController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/pricing', [PricingController::class, 'index'])->name('pricing.index');
Route::get('/pricing/bill', [PricingController::class, 'bill'])->name('pricing.bill');
Route::get('/pricing/credit-card', [PricingController::class, 'creditCard'])->name('pricing.credit-card');
Route::get('/pricing/debit-card', [PricingController::class, 'debitCard'])->name('pricing.debit-card');
Route::get('/pricing/paynow', [PricingController::class, 'paynow'])->name('pricing.paynow');

Route::get('/success-payment', [SuccessController::class, 'index'])->name('index');
Route::get('/success-signup', [SuccessController::class, 'signup'])->name('signup');

