@extends('layouts.guest')

@section('content')
<div class="container-fluid bg-300 dark__bg-1200">
    <div class="bg-holder bg-auth-card-overlay" style="background-image:url(/assets/img/bg/37.png);"></div>
    <!--/.bg-holder-->
    <div class="row flex-center position-relative min-vh-100 g-0 py-5">
        <div class="col-11 col-sm-10 col-xl-8">
            <div class="card border border-200 auth-card">
                <div class="card-body pe-md-0">
                    <div class="row align-items-center gx-0 gy-7">
                        <div
                            class="col-auto bg-100 dark__bg-1100 rounded-3 position-relative overflow-hidden auth-title-box">
                            <div class="bg-holder" style="background-image:url(/assets/img/bg/38.png);"></div>
                            <!--/.bg-holder-->
                            <div
                                class="position-relative px-4 px-lg-7 pt-7 pb-7 pb-sm-5 text-center text-md-start pb-lg-7">
                                <h3 class="mb-3 text-black fs-1">ZIKO AI Authentication</h3>
                                <p class="text-700">Give yourself some hassle-free automation process with the
                                    uniqueness of ZIKO AI!</p>
                                <ul class="list-unstyled mb-0 w-max-content w-md-auto mx-auto">
                                    <li class="d-flex align-items-center"><span
                                            class="uil uil-check-circle text-success me-2"></span><span
                                            class="text-700 fw-semi-bold">Fast</span></li>
                                    <li class="d-flex align-items-center"><span
                                            class="uil uil-check-circle text-success me-2"></span><span
                                            class="text-700 fw-semi-bold">Simple</span></li>
                                    <li class="d-flex align-items-center"><span
                                            class="uil uil-check-circle text-success me-2"></span><span
                                            class="text-700 fw-semi-bold">Smart</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="position-relative z-index--1 mb-6 d-none d-md-block text-center mt-md-5">
                                <img class="auth-title-box-img d-dark-none"
                                    src="/assets/img/spot-illustrations/auth.png" alt="">
                                <img class="auth-title-box-img d-light-none"
                                    src="/assets/img/spot-illustrations/auth-dark.png" alt="">
                            </div>
                        </div>
                        <div class="col mx-auto">
                            <div class="auth-form-box">
                                <div class="text-center ">
                                    <a class="d-flex flex-center text-decoration-none mb-4" href="{{ route('home') }}">
                                        <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block">
                                            <img class="d-dark-none" src="/assets/img/icons/logo-black.svg"
                                                alt="ZIKO AI" width="150">
                                            <img class="d-light-none" src="/assets/img/icons/logo-white.svg"
                                                alt="ZIKO AI" width="150">
                                        </div>
                                    </a>
                                    <h4 class="text-1000">Forgot your password?</h4>
                                    <p class="text-700 mb-5">Enter your email below and we will send you
                                        a reset link</p>
                                        
                                        @if ($errors->has('email'))
                                        <div class="mb-1" style=" text-align: justify; ">
                                            <span
                                                style="width: 100%; margin-top: 0.25rem; font-size: 75%;
                                                color: #ed2000; display: block;"
                                                role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        </div>
                                            
                                        @endif
                                        <form class="d-flex align-items-center mb-5" method="POST" action="{{ route('password.email') }}">
                                            @csrf
                                            <input class="form-control flex-1 @error('email') is-invalid @enderror" name="email" id="email" type="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            

                                            <button class="btn btn-primary ms-2">
                                                Send
                                                <span class="fas fa-chevron-right ms-2"></span>
                                            </button>
                                            
                                           
                                        </form>
                                       
                                        <a class="fs--1 fw-bold" href="{{route('contact')}}">Still having problems?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


