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
                                    class="position-relative px-4 px-lg-7 pt-7 pb-7 pb-sm-5 text-center text-md-start pb-lg-7 pb-md-7">
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
                                <div class="position-relative z-index--1 mb-6 d-none d-md-block text-center mt-md-15">
                                    <img class="auth-title-box-img d-dark-none"
                                        src="/assets/img/spot-illustrations/auth.png" alt="">
                                    <img class="auth-title-box-img d-light-none"
                                        src="/assets/img/spot-illustrations/auth-dark.png" alt="">
                                </div>
                            </div>

                            <div class="col mx-auto">
                                <div class="auth-form-box">
                                    <div class="text-center mb-7">
                                        <a class="d-flex flex-center text-decoration-none mb-6" href="{{ route('home') }}">
                                            <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block">
                                                <img class="d-dark-none" src="/assets/img/icons/logo-black.svg"
                                                    alt="ZIKO AI" width="150">
                                                <img class="d-light-none" src="/assets/img/icons/logo-white.svg"
                                                    alt="ZIKO AI" width="150">
                                            </div>
                                        </a>
                                        <h3 class="text-1000">Sign Up</h3>
                                        <p class="text-700">Complete your account sign up</p>
                                    </div>




                                    {{-- form --}}
                                    <form method="post" action="{{ route('google.callback.signup') }}">
                                        @csrf

                                        <div class="mb-3 text-start">
                                            <label class="form-label" for="name">Name</label>
                                            <input class="form-control" id="name" name="name"
                                                value="{{ $name }}" type="text" placeholder="Name">
                                        </div>
                                        <div class="mb-3 text-start">
                                            <label class="form-label" for="email">Email
                                                address</label>
                                            <input class="form-control" id="email" type="email" name="email"
                                                value="{{ $email }}" placeholder="name@example.com">
                                        </div>

                                        <div class="row g-3 mb-3">
                                            <div class="col-xl-6"><label class="form-label" for="password">Password</label>
                                                <input
                                                    class="form-control form-icon-input @error('password') is-invalid @enderror"
                                                    id="password" type="password" name="password" placeholder="Password"
                                                    required autocomplete="new-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-xl-6"><label class="form-label" for="confirmPassword">Confirm
                                                    Password</label>
                                                <input
                                                    class="form-control form-icon-input @error('password') is-invalid @enderror"
                                                    id="confirmPassword" type="password" placeholder="Confirm Password"
                                                    name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="termsService" type="checkbox" required>
                                            <label class="form-label fs--1 text-none" for="termsService">I accept the
                                                <a href="#!">terms </a>and <a href="#!">privacy
                                                    policy</a>
                                            </label>
                                        </div>

                                        <button type="submit" class="btn btn-primary w-100 mb-3">Sign up</button>



                                    </form>
                                    <div class="text-center">
                                        <a class="fs--1 fw-bold" href="{{ route('login') }}">Sign in to an existing
                                            account
                                        </a>
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
