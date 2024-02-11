@extends('layouts.guest')

@section('meta')
<meta name="description" content="Ziko streamlines Google review responses with instant AI assistance, improving the quality of feedback and boosting online visibility effortlessly.">
@endsection


@section('content')
@include('components.guest.nav')


  <!-- ====== Pricing Section Start -->
<section id="pricing"
  class="relative z-20 overflow-hidden bg-white  pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
  <div class="container mx-auto">
    <div class="-mx-4 flex flex-wrap">
      <div class="w-full px-4">
        <div class="mx-auto mb-[60px] max-w-[510px] text-center">
          <span class="mb-2 block text-lg font-semibold text-primary">
            Flexible Business Plans
          </span>
          <h2 class="mb-3 text-3xl font-bold text-dark  sm:text-4xl md:leading-[1.2] md:text-[40px]">
            Flexibility for All Your Business Profiles
          </h2>
          <p class="text-base text-body-color ">
            Experience Ziko AI with a complimentary trial before choosing a subscription plan. Get started for free today!
          </p>
        </div>
      </div>
    </div>
    <div class="-mx-4 flex flex-wrap justify-center">
      
      
        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
          <div
            class="relative z-10 mb-10 overflow-hidden rounded-xl bg-white  py-10 px-8 shadow-pricing sm:p-12 lg:py-10 lg:px-6 xl:p-14">
            <span class="mb-5 block text-xl font-medium text-dark ">
              Ziko AI Starter
            </span>
            <h2 class="mb-11 text-4xl font-semibold text-dark  xl:leading-[1.21] xl:text-[42px]">
              <span class="text-xl font-medium">$</span>
              <span class="-ml-1 -tracking-[2px]">49.00</span>
              <span class="text-base font-normal text-body-color ">
                /month
              </span>
            </h2>
            <div class="mb-[50px]">
              <h5 class="mb-5 text-lg font-medium text-dark ">Features</h5>
              <div class="flex flex-col gap-[14px]">
                
                <p class="text-base text-body-color ">
                  100 AI Assisted Responses
                </p>
                
                <p class="text-base text-body-color ">
                  0.40$ per add. answer
                </p>
              </div>
            </div>
            <form method="GET" action="{{route('plans.show')}}">
              @csrf
              <input type="hidden" id="price_list" name="slug"  value="{{$plans[0]->slug}}"/>
              <button class="inline-block rounded-md bg-primary py-3 px-7 text-center text-base font-medium text-white transition hover:bg-blue-dark" type="submit" >Start Now</button>
            </form>
          </div>
        </div>
      


        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
          <div
            class="relative z-10 mb-10 overflow-hidden rounded-xl bg-white  py-10 px-8 shadow-pricing sm:p-12 lg:py-10 lg:px-6 xl:p-14">

            <span class="mb-5 block text-xl font-medium text-dark ">
              Ziko AI Standard
            </span>
            <h2 class="mb-11 text-4xl font-semibold text-dark  xl:leading-[1.21] xl:text-[42px]">
              <span class="text-xl font-medium">$</span>
              <span class="-ml-1 -tracking-[2px]">79.00</span>
              <span class="text-base font-normal text-body-color ">
                /month
              </span>
            </h2>
            <div class="mb-[50px]">
              <h5 class="mb-5 text-lg font-medium text-dark ">Features</h5>
              <div class="flex flex-col gap-[14px]">
                
                <p class="text-base text-body-color ">
                  200 AI Assisted Responses
                </p>
              
                <p class="text-base text-body-color ">
                  0.35$ per add. answer
                </p>
              </div>
            </div>
            <form method="GET" action="{{route('plans.show')}}">
              @csrf
              <input type="hidden" id="price_list" name="slug"  value="{{$plans[1]->slug}}"/>
              <button class="inline-block rounded-md bg-primary py-3 px-7 text-center text-base font-medium text-white transition hover:bg-blue-dark" type="submit" >Start Now</button>
            </form>
          </div>
        </div>


      
        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
          <div
            class="relative z-10 mb-10 overflow-hidden rounded-xl bg-white  py-10 px-8 shadow-pricing sm:p-12 lg:py-10 lg:px-6 xl:p-14">
            <p
              class="absolute right-[-50px] top-[60px] inline-block -rotate-90 rounded-tl-md rounded-bl-md bg-primary py-2 px-5 text-base font-medium text-white">
              Recommended
            </p>
            <span class="mb-5 block text-xl font-medium text-dark ">
              Ziko AI Business
            </span>
            <h2 class="mb-11 text-4xl font-semibold text-dark  xl:leading-[1.21] xl:text-[42px]">
              <span class="text-xl font-medium">$</span>
              <span class="-ml-1 -tracking-[2px]">169.00</span>
              <span class="text-base font-normal text-body-color ">
                /month
              </span>
            </h2>
            <div class="mb-[50px]">
              <h5 class="mb-5 text-lg font-medium text-dark ">Features</h5>
              <div class="flex flex-col gap-[14px]">
                
                <p class="text-base text-body-color ">
                  500 AI Assisted Responses
                </p>
                
                <p class="text-base text-body-color ">
                  0.28$ per add. answer
                </p>
              </div>
            </div>
            <form method="GET" action="{{route('plans.show')}}">
              @csrf
              <input type="hidden" id="price_list" name="slug"  value="{{$plans[2]->slug}}"/>
              <button class="inline-block rounded-md bg-primary py-3 px-7 text-center text-base font-medium text-white transition hover:bg-blue-dark" type="submit" >Start Now</button>
            </form>

          </div>
        </div>


    </div>
  </div>
</section>
<!-- ====== Pricing Section End -->


@include('components.guest.footer')
@endsection