<!-- resources/views/contact.blade.php -->
@extends('layouts.app')

@section('content')
<div class="d-flex align-items-center" style="height: 60vh;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-white">We're here to help</h1>
                <div class="accordion accordion-flush mt-3" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                qn 1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="text-white">This is the information for question 1.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                qn 2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="text-white">This is the information for question 2.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                qn 3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="text-white">This is the information for question 3.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 d-flex justify-content-start">
                    <button class="btn btn-secondary me-3">
                        <svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M15.41 7.41 14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path></svg>
                        Previous
                    </button>
                    <button class="btn btn-info">
                        <svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M8.59 16.59 13.17 12 8.59 7.41 10 6l6 6-6 6z"></path></svg>
                        Next
                    </button>
                </div>
            </div>
            <div class="col-md-6 text-end align-self-end">
                <img src="{{ asset('images/phone.png') }}" class="img-fluid" alt="Phone" style="max-width: 70%;">
            </div>
        </div>
    </div>
</div>
@endsection
