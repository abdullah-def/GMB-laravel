@extends('layouts.guest')

@section('meta')
<meta name="description" content="Ziko streamlines Google review responses with instant AI assistance, improving the quality of feedback and boosting online visibility effortlessly.">
@endsection


@section('content')
@include('components.guest.navs')





<div class="relative z-10 overflow-hidden pt-[120px] pb-[60px] md:pt-[130px] lg:pt-[160px] ">
    <div
      class="w-full h-px bg-gradient-to-r from-stroke/0 via-stroke  to-stroke/0 absolute left-0 bottom-0">
    </div>
    <div class="container">
      <div class="-mx-4 flex flex-wrap items-center">
        <div class="w-full px-4">
          <div class="text-center">
            <h1 class="mb-4 text-3xl font-bold text-dark  sm:text-4xl md:text-[40px] md:leading-[1.2]">
            Reset password</h1>

          </div>
        </div>
      </div>
    </div>
</div>

<section class="bg-[#F4F7FF] py-14">
    <div class="container">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4">                           
            <div class="wow fadeInUp p-4 sm:p-8 bg-white shadow sm:rounded-lg ">             
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="inline-block text-base text-dark ">
                                Reset password
                            </h2>
                    
                            <p class="text-base text-body-secondary">
                                Fill up the form to reset the password.
                            </p>
                        </header>


                        <form method="POST" action="{{ route('password.email') }}" class="mt-6 space-y-6">
                            @csrf
         
                            <div>
                                <label class="inline-block bg-white  text-base text-body-secondary relative z-10" for="email">
                                    Email address
                                </label>
                                
                                <input  name="email" id="email" type="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus class="border-stroke  bg-transparent w-full rounded-md border py-3 px-5 text-base text-body-color  placeholder:text-dark-6 outline-none transition focus:border-primary  focus-visible:shadow-none  @error('email') is-invalid @enderror" />
                                @error('email')
                                    <span class="text-base text-body-secondary " style="color: red;" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror

                            </div>

                            <div class="flex items-center gap-4"> 
                                <button type="submit"  name="action" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest bg-primary text-base text-white hover:bg-blue-dark transition ease-in-out duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 pr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                                    </svg>
                                    
                                    <span>Reset password</span>
                                </button>
                    
                            </div>
                            
                            <div class="flex items-center gap-4">
                                <p class="inline-block text-base text-dark ">Not registered yet? 
                                    <a href="{{route('register')}}" class="font-medium inline-flex space-x-1 items-center text-primary hover:underline"><span>Register now </span><span><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg></span></a>
                                </p>
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