@extends('layouts.guest')

@section('meta')
<meta name="description" content="Ziko streamlines Google review responses with instant AI assistance, improving the quality of feedback and boosting online visibility effortlessly.">
@endsection


@section('content')
@include('components.guest.nav')




<div class="relative z-10 overflow-hidden pt-[120px] pb-[60px] md:pt-[130px] lg:pt-[160px] ">
    <div
      class="w-full h-px bg-gradient-to-r from-stroke/0 via-stroke  to-stroke/0 absolute left-0 bottom-0">
    </div>
    <div class="container">
      <div class="-mx-4 flex flex-wrap items-center">
        <div class="w-full px-4">
          <div class="text-center">
            <h1 class="mb-4 text-3xl font-bold text-dark  sm:text-4xl md:text-[40px] md:leading-[1.2]">
              Change Password</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  
  
  <section class="bg-[#F4F7FF] py-14 lg:py-20 ">
    <div class="container">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4">                           
            <div class="wow fadeInUp p-4 sm:p-8 bg-white shadow sm:rounded-lg ">             
                <div class="max-w-xl">
                    <section>

               
  
                      <header>
                        <h2 class="inline-block text-base text-dark ">
                          Change Password
                        </h2>
  
                        <p class="text-base text-body-secondary">
                          Fill up the form to change the password.
                        </p>
                      </header>
                      <form  method="POST" class="mt-6 space-y-6" method="POST" action="{{ route('password.store') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{  $request->route('token') }}" />
                        
                        <div>
                            <label class="inline-block bg-white  text-base text-body-secondary relative z-10" for="email" > Email
                            </label>
                            <input class="@error('email') is-invalid @enderror border-stroke  bg-transparent w-full rounded-md border py-3 px-5 text-base text-body-color  placeholder:text-dark-6 outline-none transition focus:border-primary  focus-visible:shadow-none"
                            type="email"  name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Type your email"id="email" />
                            @error('email')
                                <span class="text-base text-body-secondary " style="color: red;" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div>
                          <label class="inline-block bg-white  text-base text-body-secondary relative z-10" for="id_password1" > New Password
                          </label>
                          <input class=" @error('password') is-invalid @enderror border-stroke  bg-transparent w-full rounded-md border py-3 px-5 text-base text-body-color  placeholder:text-dark-6 outline-none transition focus:border-primary  focus-visible:shadow-none"
                          type="password" name="password" required autocomplete="new-password" placeholder="Type new password"
                            id="id_password1" />
                            @error('password')
                                <span class="text-base text-body-secondary " style="color: red;" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div>
                          <label
                            class="inline-block bg-white  text-base text-body-secondary relative z-10"
                            for="id_password2"
                          >
                            Confirm Password
                          </label>
                          <input
                          class="border-stroke  bg-transparent w-full rounded-md border py-3 px-5 text-base text-body-color  placeholder:text-dark-6 outline-none transition focus:border-primary  focus-visible:shadow-none"
                          type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Cofirm new password"
                            name="password2"
                          />
                        </div>
  
                        <div class="flex items-center gap-4">
                          <button
                            type="submit"
                            name="action"
                            class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest bg-primary text-base text-white hover:bg-blue-dark transition ease-in-out duration-150"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke-width="1.5"
                              stroke="currentColor"
                              class="w-6 h-6 pr-2"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z"
                              />
                            </svg>
  
                            <span>Change password</span>
                          </button>
                        </div>
                      </form>
  

                    </section>
                </div>  
            </div>  
          </div>
        </div>
      </div>
  </section>
  
  





@include('components.guest.footer')
@endsection