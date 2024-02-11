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
              Sign In</h1>
            <p class="mb-5 text-base text-body-color ">
              Welcome back
            </p>

            <ul class="flex items-center justify-center gap-[10px]">
              <li>
                <a href="{{route('home')}}"
                  class="flex items-center gap-[10px] text-base font-medium text-dark ">
                  Home
                </a>
              </li>
              <li>
                <a href="" class="flex items-center gap-[10px] text-base font-medium text-body-color">
                  <span class="text-body-color "> / </span>
                  Sign In
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ====== Banner Section End -->

  <!-- ====== Forms Section Start -->
  <section class="bg-[#F4F7FF] py-14 lg:py-20 ">
    <div class="container">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4">
          <div class="wow fadeInUp relative mx-auto max-w-[525px] overflow-hidden rounded-lg bg-white  py-14 px-8 text-center sm:px-12 md:px-[60px]"
            data-wow-delay=".15s">
            <div class="mb-10 text-center">
              <a href="{{route('home')}}" class="mx-auto inline-block max-w-[160px]">
                <img src="/assets/images/logo/logo.svg" alt="logo"  />
              </a>
            </div>
            

            
            @if ($errors->has('email'))
                <div class="rounded-lg bg-red-light-6 px-[18px] py-4 shadow-[0px_2px_10px_0px_rgba(0,0,0,0.08)] mb-[22px]" >
                    @if ($errors->has('email'))
                        <p class="flex items-center text-left text-sm font-medium text-[#BC1C21]">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            @endif

            
            <form method="POST" action="{{route('login')}}">
                @csrf
   
              <div class="mb-[22px]">
                <input id="email" type="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" required autocomplete="email" autofocus
                class="border-stroke  bg-transparent w-full rounded-md border py-3 px-5 text-base text-body-color  placeholder:text-dark-6 outline-none transition focus:border-primary  focus-visible:shadow-none @error('email') is-invalid @enderror" />
              </div>
              <div class="mb-[22px]">
                <input id="password" type="password" name="password" placeholder="Password" required autocomplete="current-password"
                class="border-stroke  bg-transparent w-full rounded-md border py-3 px-5 text-base text-body-color  placeholder:text-dark-6 outline-none transition focus:border-primary  focus-visible:shadow-none @error('password') is-invalid @enderror" />
                </div>
              <div class="mb-9">
                <button type="submit"
                  class="border-primary w-full cursor-pointer rounded-md border bg-primary py-3 px-5 text-base text-white transition duration-300 ease-in-out hover:bg-blue-dark" >
                  Sign In
                </button>
                </div>
            </form>


            <span class="relative z-1 block text-center mb-7">
              <span class="block absolute -z-1 left-0 top-1/2 h-px w-full bg-stroke -3"></span>
              <span class="inline-block px-3 bg-white  text-base text-body-secondary relative z-10">Connect With</span>
            </span>

            <ul class="-mx-2 mb-9 flex justify-between">
              <li class="w-full px-2">
                <a href="{{ route('google.redirect') }}"
                  class="flex h-11 items-center justify-center rounded-md bg-[#D64937] transition hover:bg-opacity-90">
                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M17.8477 8.17132H9.29628V10.643H15.4342C15.1065 14.0743 12.2461 15.5574 9.47506 15.5574C5.95916 15.5574 2.8306 12.8821 2.8306 9.01461C2.8306 5.29251 5.81018 2.47185 9.47506 2.47185C12.2759 2.47185 13.9742 4.24567 13.9742 4.24567L15.7024 2.47185C15.7024 2.47185 13.3783 0.000145544 9.35587 0.000145544C4.05223 -0.0289334 0 4.30383 0 8.98553C0 13.5218 3.81386 18 9.44526 18C14.4212 18 17.9967 14.7141 17.9967 9.79974C18.0264 8.78198 17.8477 8.17132 17.8477 8.17132Z"
                      fill="white" />
                  </svg>
                  <span class="w-5/6 px-4 py-3  text-white " >Sign in with Google</span >
                </a>
              </li>
            </ul>
            
            

            <a href="{{ route('password.request') }}" class="mb-2 inline-block text-base text-dark  hover:text-primary ">
              Forget Password?
            </a>
            <p class="text-base text-body-secondary">
              Not a member yet?
              <a href="{{ route('register') }}" class="text-primary hover:underline">
                Sign Up
              </a>
            </p>

            <div>
              <span class="absolute top-1 right-1">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="1.39737" cy="38.6026" r="1.39737" transform="rotate(-90 1.39737 38.6026)"
                    fill="#3056D3" />
                  <circle cx="1.39737" cy="1.99122" r="1.39737" transform="rotate(-90 1.39737 1.99122)"
                    fill="#3056D3" />
                  <circle cx="13.6943" cy="38.6026" r="1.39737" transform="rotate(-90 13.6943 38.6026)"
                    fill="#3056D3" />
                  <circle cx="13.6943" cy="1.99122" r="1.39737" transform="rotate(-90 13.6943 1.99122)"
                    fill="#3056D3" />
                  <circle cx="25.9911" cy="38.6026" r="1.39737" transform="rotate(-90 25.9911 38.6026)"
                    fill="#3056D3" />
                  <circle cx="25.9911" cy="1.99122" r="1.39737" transform="rotate(-90 25.9911 1.99122)"
                    fill="#3056D3" />
                  <circle cx="38.288" cy="38.6026" r="1.39737" transform="rotate(-90 38.288 38.6026)" fill="#3056D3" />
                  <circle cx="38.288" cy="1.99122" r="1.39737" transform="rotate(-90 38.288 1.99122)" fill="#3056D3" />
                  <circle cx="1.39737" cy="26.3057" r="1.39737" transform="rotate(-90 1.39737 26.3057)"
                    fill="#3056D3" />
                  <circle cx="13.6943" cy="26.3057" r="1.39737" transform="rotate(-90 13.6943 26.3057)"
                    fill="#3056D3" />
                  <circle cx="25.9911" cy="26.3057" r="1.39737" transform="rotate(-90 25.9911 26.3057)"
                    fill="#3056D3" />
                  <circle cx="38.288" cy="26.3057" r="1.39737" transform="rotate(-90 38.288 26.3057)" fill="#3056D3" />
                  <circle cx="1.39737" cy="14.0086" r="1.39737" transform="rotate(-90 1.39737 14.0086)"
                    fill="#3056D3" />
                  <circle cx="13.6943" cy="14.0086" r="1.39737" transform="rotate(-90 13.6943 14.0086)"
                    fill="#3056D3" />
                  <circle cx="25.9911" cy="14.0086" r="1.39737" transform="rotate(-90 25.9911 14.0086)"
                    fill="#3056D3" />
                  <circle cx="38.288" cy="14.0086" r="1.39737" transform="rotate(-90 38.288 14.0086)" fill="#3056D3" />
                </svg>
              </span>
              <span class="absolute left-1 bottom-1">
                <svg width="29" height="40" viewBox="0 0 29 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="2.288" cy="25.9912" r="1.39737" transform="rotate(-90 2.288 25.9912)" fill="#3056D3" />
                  <circle cx="14.5849" cy="25.9911" r="1.39737" transform="rotate(-90 14.5849 25.9911)"
                    fill="#3056D3" />
                  <circle cx="26.7216" cy="25.9911" r="1.39737" transform="rotate(-90 26.7216 25.9911)"
                    fill="#3056D3" />
                  <circle cx="2.288" cy="13.6944" r="1.39737" transform="rotate(-90 2.288 13.6944)" fill="#3056D3" />
                  <circle cx="14.5849" cy="13.6943" r="1.39737" transform="rotate(-90 14.5849 13.6943)"
                    fill="#3056D3" />
                  <circle cx="26.7216" cy="13.6943" r="1.39737" transform="rotate(-90 26.7216 13.6943)"
                    fill="#3056D3" />
                  <circle cx="2.288" cy="38.0087" r="1.39737" transform="rotate(-90 2.288 38.0087)" fill="#3056D3" />
                  <circle cx="2.288" cy="1.39739" r="1.39737" transform="rotate(-90 2.288 1.39739)" fill="#3056D3" />
                  <circle cx="14.5849" cy="38.0089" r="1.39737" transform="rotate(-90 14.5849 38.0089)"
                    fill="#3056D3" />
                  <circle cx="26.7216" cy="38.0089" r="1.39737" transform="rotate(-90 26.7216 38.0089)"
                    fill="#3056D3" />
                  <circle cx="14.5849" cy="1.39761" r="1.39737" transform="rotate(-90 14.5849 1.39761)"
                    fill="#3056D3" />
                  <circle cx="26.7216" cy="1.39761" r="1.39737" transform="rotate(-90 26.7216 1.39761)"
                    fill="#3056D3" />
                </svg>
              </span>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Forms Section End -->
  


@include('components.guest.footer')
@endsection