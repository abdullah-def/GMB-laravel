@extends('layouts.guest')

@section('meta')
<meta name="description" content="Ziko streamlines Google review responses with instant AI assistance, improving the quality of feedback and boosting online visibility effortlessly.">
@endsection


@section('content')
@include('components.guest.nav_home')



<!-- ====== Hero Section Start -->
<div id="home" class="relative overflow-hidden bg-primary pt-[120px] md:pt-[130px] lg:pt-[160px]">
    <div class="container">
      <div class="-mx-4 flex flex-wrap items-center">
        <div class="w-full px-4">
          <div class="hero-content wow fadeInUp mx-auto max-w-[780px] text-center" data-wow-delay=".2s">
            <h1
              class="mb-6 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-[1.2]">
              Automate Your Google Review Responses with the Latest AI Technology
            </h1>
            <p class="mx-auto mb-9 max-w-[600px] font-medium text-base text-white sm:text-lg sm:leading-[1.44]">
              Ziko streamlines Google review responses with instant AI assistance, improving the quality of feedback and boosting online visibility effortlessly.
            </p>
            <ul class="flex gap-5 flex-wrap items-center justify-center">
              <li>
                <a href="#pricing"
                  class="inline-flex items-center gap-4 justify-center rounded-md bg-white py-[14px] px-7 text-center text-base font-medium text-dark shadow-1 transition duration-300 ease-in-out hover:text-body-color hover:bg-gray-2">Get started today
                </a>
              </li>
            </ul>
          </div>
        </div>
  
        <div class="w-full px-4">
          <div class="wow fadeInUp relative z-10 mx-auto max-w-[920px]" data-wow-delay=".25s">
            <div class="mt-16">
              <img src="/assets/images/hero/hero-image.png" alt="hero" class="mx-auto max-w-full rounded-t-xl rounded-tr-xl" />
            </div>
            <div class="absolute bottom-0 -left-9 z-[-1]">
              <svg width="134" height="106" viewBox="0 0 134 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="1.66667" cy="104" r="1.66667" transform="rotate(-90 1.66667 104)" fill="white" />
                <circle cx="16.3333" cy="104" r="1.66667" transform="rotate(-90 16.3333 104)" fill="white" />
                <circle cx="31" cy="104" r="1.66667" transform="rotate(-90 31 104)" fill="white" />
                <circle cx="45.6667" cy="104" r="1.66667" transform="rotate(-90 45.6667 104)" fill="white" />
                <circle cx="60.3333" cy="104" r="1.66667" transform="rotate(-90 60.3333 104)" fill="white" />
                <circle cx="88.6667" cy="104" r="1.66667" transform="rotate(-90 88.6667 104)" fill="white" />
                <circle cx="117.667" cy="104" r="1.66667" transform="rotate(-90 117.667 104)" fill="white" />
                <circle cx="74.6667" cy="104" r="1.66667" transform="rotate(-90 74.6667 104)" fill="white" />
                <circle cx="103" cy="104" r="1.66667" transform="rotate(-90 103 104)" fill="white" />
                <circle cx="132" cy="104" r="1.66667" transform="rotate(-90 132 104)" fill="white" />
                <circle cx="1.66667" cy="89.3333" r="1.66667" transform="rotate(-90 1.66667 89.3333)" fill="white" />
                <circle cx="16.3333" cy="89.3333" r="1.66667" transform="rotate(-90 16.3333 89.3333)" fill="white" />
                <circle cx="31" cy="89.3333" r="1.66667" transform="rotate(-90 31 89.3333)" fill="white" />
                <circle cx="45.6667" cy="89.3333" r="1.66667" transform="rotate(-90 45.6667 89.3333)" fill="white" />
                <circle cx="60.3333" cy="89.3338" r="1.66667" transform="rotate(-90 60.3333 89.3338)" fill="white" />
                <circle cx="88.6667" cy="89.3338" r="1.66667" transform="rotate(-90 88.6667 89.3338)" fill="white" />
                <circle cx="117.667" cy="89.3338" r="1.66667" transform="rotate(-90 117.667 89.3338)" fill="white" />
                <circle cx="74.6667" cy="89.3338" r="1.66667" transform="rotate(-90 74.6667 89.3338)" fill="white" />
                <circle cx="103" cy="89.3338" r="1.66667" transform="rotate(-90 103 89.3338)" fill="white" />
                <circle cx="132" cy="89.3338" r="1.66667" transform="rotate(-90 132 89.3338)" fill="white" />
                <circle cx="1.66667" cy="74.6673" r="1.66667" transform="rotate(-90 1.66667 74.6673)" fill="white" />
                <circle cx="1.66667" cy="31.0003" r="1.66667" transform="rotate(-90 1.66667 31.0003)" fill="white" />
                <circle cx="16.3333" cy="74.6668" r="1.66667" transform="rotate(-90 16.3333 74.6668)" fill="white" />
                <circle cx="16.3333" cy="31.0003" r="1.66667" transform="rotate(-90 16.3333 31.0003)" fill="white" />
                <circle cx="31" cy="74.6668" r="1.66667" transform="rotate(-90 31 74.6668)" fill="white" />
                <circle cx="31" cy="31.0003" r="1.66667" transform="rotate(-90 31 31.0003)" fill="white" />
                <circle cx="45.6667" cy="74.6668" r="1.66667" transform="rotate(-90 45.6667 74.6668)" fill="white" />
                <circle cx="45.6667" cy="31.0003" r="1.66667" transform="rotate(-90 45.6667 31.0003)" fill="white" />
                <circle cx="60.3333" cy="74.6668" r="1.66667" transform="rotate(-90 60.3333 74.6668)" fill="white" />
                <circle cx="60.3333" cy="31.0001" r="1.66667" transform="rotate(-90 60.3333 31.0001)" fill="white" />
                <circle cx="88.6667" cy="74.6668" r="1.66667" transform="rotate(-90 88.6667 74.6668)" fill="white" />
                <circle cx="88.6667" cy="31.0001" r="1.66667" transform="rotate(-90 88.6667 31.0001)" fill="white" />
                <circle cx="117.667" cy="74.6668" r="1.66667" transform="rotate(-90 117.667 74.6668)" fill="white" />
                <circle cx="117.667" cy="31.0001" r="1.66667" transform="rotate(-90 117.667 31.0001)" fill="white" />
                <circle cx="74.6667" cy="74.6668" r="1.66667" transform="rotate(-90 74.6667 74.6668)" fill="white" />
                <circle cx="74.6667" cy="31.0001" r="1.66667" transform="rotate(-90 74.6667 31.0001)" fill="white" />
                <circle cx="103" cy="74.6668" r="1.66667" transform="rotate(-90 103 74.6668)" fill="white" />
                <circle cx="103" cy="31.0001" r="1.66667" transform="rotate(-90 103 31.0001)" fill="white" />
                <circle cx="132" cy="74.6668" r="1.66667" transform="rotate(-90 132 74.6668)" fill="white" />
                <circle cx="132" cy="31.0001" r="1.66667" transform="rotate(-90 132 31.0001)" fill="white" />
                <circle cx="1.66667" cy="60.0003" r="1.66667" transform="rotate(-90 1.66667 60.0003)" fill="white" />
                <circle cx="1.66667" cy="16.3336" r="1.66667" transform="rotate(-90 1.66667 16.3336)" fill="white" />
                <circle cx="16.3333" cy="60.0003" r="1.66667" transform="rotate(-90 16.3333 60.0003)" fill="white" />
                <circle cx="16.3333" cy="16.3336" r="1.66667" transform="rotate(-90 16.3333 16.3336)" fill="white" />
                <circle cx="31" cy="60.0003" r="1.66667" transform="rotate(-90 31 60.0003)" fill="white" />
                <circle cx="31" cy="16.3336" r="1.66667" transform="rotate(-90 31 16.3336)" fill="white" />
                <circle cx="45.6667" cy="60.0003" r="1.66667" transform="rotate(-90 45.6667 60.0003)" fill="white" />
                <circle cx="45.6667" cy="16.3336" r="1.66667" transform="rotate(-90 45.6667 16.3336)" fill="white" />
                <circle cx="60.3333" cy="60.0003" r="1.66667" transform="rotate(-90 60.3333 60.0003)" fill="white" />
                <circle cx="60.3333" cy="16.3336" r="1.66667" transform="rotate(-90 60.3333 16.3336)" fill="white" />
                <circle cx="88.6667" cy="60.0003" r="1.66667" transform="rotate(-90 88.6667 60.0003)" fill="white" />
                <circle cx="88.6667" cy="16.3336" r="1.66667" transform="rotate(-90 88.6667 16.3336)" fill="white" />
                <circle cx="117.667" cy="60.0003" r="1.66667" transform="rotate(-90 117.667 60.0003)" fill="white" />
                <circle cx="117.667" cy="16.3336" r="1.66667" transform="rotate(-90 117.667 16.3336)" fill="white" />
                <circle cx="74.6667" cy="60.0003" r="1.66667" transform="rotate(-90 74.6667 60.0003)" fill="white" />
                <circle cx="74.6667" cy="16.3336" r="1.66667" transform="rotate(-90 74.6667 16.3336)" fill="white" />
                <circle cx="103" cy="60.0003" r="1.66667" transform="rotate(-90 103 60.0003)" fill="white" />
                <circle cx="103" cy="16.3336" r="1.66667" transform="rotate(-90 103 16.3336)" fill="white" />
                <circle cx="132" cy="60.0003" r="1.66667" transform="rotate(-90 132 60.0003)" fill="white" />
                <circle cx="132" cy="16.3336" r="1.66667" transform="rotate(-90 132 16.3336)" fill="white" />
                <circle cx="1.66667" cy="45.3336" r="1.66667" transform="rotate(-90 1.66667 45.3336)" fill="white" />
                <circle cx="1.66667" cy="1.66683" r="1.66667" transform="rotate(-90 1.66667 1.66683)" fill="white" />
                <circle cx="16.3333" cy="45.3336" r="1.66667" transform="rotate(-90 16.3333 45.3336)" fill="white" />
                <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(-90 16.3333 1.66683)" fill="white" />
                <circle cx="31" cy="45.3336" r="1.66667" transform="rotate(-90 31 45.3336)" fill="white" />
                <circle cx="31" cy="1.66683" r="1.66667" transform="rotate(-90 31 1.66683)" fill="white" />
                <circle cx="45.6667" cy="45.3336" r="1.66667" transform="rotate(-90 45.6667 45.3336)" fill="white" />
                <circle cx="45.6667" cy="1.66683" r="1.66667" transform="rotate(-90 45.6667 1.66683)" fill="white" />
                <circle cx="60.3333" cy="45.3338" r="1.66667" transform="rotate(-90 60.3333 45.3338)" fill="white" />
                <circle cx="60.3333" cy="1.66707" r="1.66667" transform="rotate(-90 60.3333 1.66707)" fill="white" />
                <circle cx="88.6667" cy="45.3338" r="1.66667" transform="rotate(-90 88.6667 45.3338)" fill="white" />
                <circle cx="88.6667" cy="1.66707" r="1.66667" transform="rotate(-90 88.6667 1.66707)" fill="white" />
                <circle cx="117.667" cy="45.3338" r="1.66667" transform="rotate(-90 117.667 45.3338)" fill="white" />
                <circle cx="117.667" cy="1.66707" r="1.66667" transform="rotate(-90 117.667 1.66707)" fill="white" />
                <circle cx="74.6667" cy="45.3338" r="1.66667" transform="rotate(-90 74.6667 45.3338)" fill="white" />
                <circle cx="74.6667" cy="1.66707" r="1.66667" transform="rotate(-90 74.6667 1.66707)" fill="white" />
                <circle cx="103" cy="45.3338" r="1.66667" transform="rotate(-90 103 45.3338)" fill="white" />
                <circle cx="103" cy="1.66707" r="1.66667" transform="rotate(-90 103 1.66707)" fill="white" />
                <circle cx="132" cy="45.3338" r="1.66667" transform="rotate(-90 132 45.3338)" fill="white" />
                <circle cx="132" cy="1.66707" r="1.66667" transform="rotate(-90 132 1.66707)" fill="white" />
              </svg>
            </div>
            <div class="absolute -top-6 -right-6 z-[-1]">
              <svg width="134" height="106" viewBox="0 0 134 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="1.66667" cy="104" r="1.66667" transform="rotate(-90 1.66667 104)" fill="white" />
                <circle cx="16.3333" cy="104" r="1.66667" transform="rotate(-90 16.3333 104)" fill="white" />
                <circle cx="31" cy="104" r="1.66667" transform="rotate(-90 31 104)" fill="white" />
                <circle cx="45.6667" cy="104" r="1.66667" transform="rotate(-90 45.6667 104)" fill="white" />
                <circle cx="60.3333" cy="104" r="1.66667" transform="rotate(-90 60.3333 104)" fill="white" />
                <circle cx="88.6667" cy="104" r="1.66667" transform="rotate(-90 88.6667 104)" fill="white" />
                <circle cx="117.667" cy="104" r="1.66667" transform="rotate(-90 117.667 104)" fill="white" />
                <circle cx="74.6667" cy="104" r="1.66667" transform="rotate(-90 74.6667 104)" fill="white" />
                <circle cx="103" cy="104" r="1.66667" transform="rotate(-90 103 104)" fill="white" />
                <circle cx="132" cy="104" r="1.66667" transform="rotate(-90 132 104)" fill="white" />
                <circle cx="1.66667" cy="89.3333" r="1.66667" transform="rotate(-90 1.66667 89.3333)" fill="white" />
                <circle cx="16.3333" cy="89.3333" r="1.66667" transform="rotate(-90 16.3333 89.3333)" fill="white" />
                <circle cx="31" cy="89.3333" r="1.66667" transform="rotate(-90 31 89.3333)" fill="white" />
                <circle cx="45.6667" cy="89.3333" r="1.66667" transform="rotate(-90 45.6667 89.3333)" fill="white" />
                <circle cx="60.3333" cy="89.3338" r="1.66667" transform="rotate(-90 60.3333 89.3338)" fill="white" />
                <circle cx="88.6667" cy="89.3338" r="1.66667" transform="rotate(-90 88.6667 89.3338)" fill="white" />
                <circle cx="117.667" cy="89.3338" r="1.66667" transform="rotate(-90 117.667 89.3338)" fill="white" />
                <circle cx="74.6667" cy="89.3338" r="1.66667" transform="rotate(-90 74.6667 89.3338)" fill="white" />
                <circle cx="103" cy="89.3338" r="1.66667" transform="rotate(-90 103 89.3338)" fill="white" />
                <circle cx="132" cy="89.3338" r="1.66667" transform="rotate(-90 132 89.3338)" fill="white" />
                <circle cx="1.66667" cy="74.6673" r="1.66667" transform="rotate(-90 1.66667 74.6673)" fill="white" />
                <circle cx="1.66667" cy="31.0003" r="1.66667" transform="rotate(-90 1.66667 31.0003)" fill="white" />
                <circle cx="16.3333" cy="74.6668" r="1.66667" transform="rotate(-90 16.3333 74.6668)" fill="white" />
                <circle cx="16.3333" cy="31.0003" r="1.66667" transform="rotate(-90 16.3333 31.0003)" fill="white" />
                <circle cx="31" cy="74.6668" r="1.66667" transform="rotate(-90 31 74.6668)" fill="white" />
                <circle cx="31" cy="31.0003" r="1.66667" transform="rotate(-90 31 31.0003)" fill="white" />
                <circle cx="45.6667" cy="74.6668" r="1.66667" transform="rotate(-90 45.6667 74.6668)" fill="white" />
                <circle cx="45.6667" cy="31.0003" r="1.66667" transform="rotate(-90 45.6667 31.0003)" fill="white" />
                <circle cx="60.3333" cy="74.6668" r="1.66667" transform="rotate(-90 60.3333 74.6668)" fill="white" />
                <circle cx="60.3333" cy="31.0001" r="1.66667" transform="rotate(-90 60.3333 31.0001)" fill="white" />
                <circle cx="88.6667" cy="74.6668" r="1.66667" transform="rotate(-90 88.6667 74.6668)" fill="white" />
                <circle cx="88.6667" cy="31.0001" r="1.66667" transform="rotate(-90 88.6667 31.0001)" fill="white" />
                <circle cx="117.667" cy="74.6668" r="1.66667" transform="rotate(-90 117.667 74.6668)" fill="white" />
                <circle cx="117.667" cy="31.0001" r="1.66667" transform="rotate(-90 117.667 31.0001)" fill="white" />
                <circle cx="74.6667" cy="74.6668" r="1.66667" transform="rotate(-90 74.6667 74.6668)" fill="white" />
                <circle cx="74.6667" cy="31.0001" r="1.66667" transform="rotate(-90 74.6667 31.0001)" fill="white" />
                <circle cx="103" cy="74.6668" r="1.66667" transform="rotate(-90 103 74.6668)" fill="white" />
                <circle cx="103" cy="31.0001" r="1.66667" transform="rotate(-90 103 31.0001)" fill="white" />
                <circle cx="132" cy="74.6668" r="1.66667" transform="rotate(-90 132 74.6668)" fill="white" />
                <circle cx="132" cy="31.0001" r="1.66667" transform="rotate(-90 132 31.0001)" fill="white" />
                <circle cx="1.66667" cy="60.0003" r="1.66667" transform="rotate(-90 1.66667 60.0003)" fill="white" />
                <circle cx="1.66667" cy="16.3336" r="1.66667" transform="rotate(-90 1.66667 16.3336)" fill="white" />
                <circle cx="16.3333" cy="60.0003" r="1.66667" transform="rotate(-90 16.3333 60.0003)" fill="white" />
                <circle cx="16.3333" cy="16.3336" r="1.66667" transform="rotate(-90 16.3333 16.3336)" fill="white" />
                <circle cx="31" cy="60.0003" r="1.66667" transform="rotate(-90 31 60.0003)" fill="white" />
                <circle cx="31" cy="16.3336" r="1.66667" transform="rotate(-90 31 16.3336)" fill="white" />
                <circle cx="45.6667" cy="60.0003" r="1.66667" transform="rotate(-90 45.6667 60.0003)" fill="white" />
                <circle cx="45.6667" cy="16.3336" r="1.66667" transform="rotate(-90 45.6667 16.3336)" fill="white" />
                <circle cx="60.3333" cy="60.0003" r="1.66667" transform="rotate(-90 60.3333 60.0003)" fill="white" />
                <circle cx="60.3333" cy="16.3336" r="1.66667" transform="rotate(-90 60.3333 16.3336)" fill="white" />
                <circle cx="88.6667" cy="60.0003" r="1.66667" transform="rotate(-90 88.6667 60.0003)" fill="white" />
                <circle cx="88.6667" cy="16.3336" r="1.66667" transform="rotate(-90 88.6667 16.3336)" fill="white" />
                <circle cx="117.667" cy="60.0003" r="1.66667" transform="rotate(-90 117.667 60.0003)" fill="white" />
                <circle cx="117.667" cy="16.3336" r="1.66667" transform="rotate(-90 117.667 16.3336)" fill="white" />
                <circle cx="74.6667" cy="60.0003" r="1.66667" transform="rotate(-90 74.6667 60.0003)" fill="white" />
                <circle cx="74.6667" cy="16.3336" r="1.66667" transform="rotate(-90 74.6667 16.3336)" fill="white" />
                <circle cx="103" cy="60.0003" r="1.66667" transform="rotate(-90 103 60.0003)" fill="white" />
                <circle cx="103" cy="16.3336" r="1.66667" transform="rotate(-90 103 16.3336)" fill="white" />
                <circle cx="132" cy="60.0003" r="1.66667" transform="rotate(-90 132 60.0003)" fill="white" />
                <circle cx="132" cy="16.3336" r="1.66667" transform="rotate(-90 132 16.3336)" fill="white" />
                <circle cx="1.66667" cy="45.3336" r="1.66667" transform="rotate(-90 1.66667 45.3336)" fill="white" />
                <circle cx="1.66667" cy="1.66683" r="1.66667" transform="rotate(-90 1.66667 1.66683)" fill="white" />
                <circle cx="16.3333" cy="45.3336" r="1.66667" transform="rotate(-90 16.3333 45.3336)" fill="white" />
                <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(-90 16.3333 1.66683)" fill="white" />
                <circle cx="31" cy="45.3336" r="1.66667" transform="rotate(-90 31 45.3336)" fill="white" />
                <circle cx="31" cy="1.66683" r="1.66667" transform="rotate(-90 31 1.66683)" fill="white" />
                <circle cx="45.6667" cy="45.3336" r="1.66667" transform="rotate(-90 45.6667 45.3336)" fill="white" />
                <circle cx="45.6667" cy="1.66683" r="1.66667" transform="rotate(-90 45.6667 1.66683)" fill="white" />
                <circle cx="60.3333" cy="45.3338" r="1.66667" transform="rotate(-90 60.3333 45.3338)" fill="white" />
                <circle cx="60.3333" cy="1.66707" r="1.66667" transform="rotate(-90 60.3333 1.66707)" fill="white" />
                <circle cx="88.6667" cy="45.3338" r="1.66667" transform="rotate(-90 88.6667 45.3338)" fill="white" />
                <circle cx="88.6667" cy="1.66707" r="1.66667" transform="rotate(-90 88.6667 1.66707)" fill="white" />
                <circle cx="117.667" cy="45.3338" r="1.66667" transform="rotate(-90 117.667 45.3338)" fill="white" />
                <circle cx="117.667" cy="1.66707" r="1.66667" transform="rotate(-90 117.667 1.66707)" fill="white" />
                <circle cx="74.6667" cy="45.3338" r="1.66667" transform="rotate(-90 74.6667 45.3338)" fill="white" />
                <circle cx="74.6667" cy="1.66707" r="1.66667" transform="rotate(-90 74.6667 1.66707)" fill="white" />
                <circle cx="103" cy="45.3338" r="1.66667" transform="rotate(-90 103 45.3338)" fill="white" />
                <circle cx="103" cy="1.66707" r="1.66667" transform="rotate(-90 103 1.66707)" fill="white" />
                <circle cx="132" cy="45.3338" r="1.66667" transform="rotate(-90 132 45.3338)" fill="white" />
                <circle cx="132" cy="1.66707" r="1.66667" transform="rotate(-90 132 1.66707)" fill="white" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
  <!-- ====== Hero Section End -->
  
  <!-- ====== Features Section Start -->
  <section class="pt-20 pb-8 lg:pt-[120px] lg:pb-[70px] ">
    <div class="container">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4">
          <div class="mb-12 mx-auto max-w-[485px] lg:mb-[70px] text-center">
            <span class="mb-2 block text-lg font-semibold text-primary">
              AI-Powered Review Responses
            </span>
            <h2 class="mb-3 text-3xl font-bold text-dark  sm:text-4xl md:text-[40px] md:leading-[1.2]">
              Respond to Reviews Faster and Better
            </h2>
            <p class="text-base text-body-color ">
              Discover Effortless Customer Feedback Responses with Ziko AI: Your Smart Assistant to Craft and Submit Great Personalised Responses!
            </p>
          </div>
        </div>
      </div>
      <div class="-mx-4 flex flex-wrap">
  
        <div class="w-full px-4 md:w-1/2 lg:w-1/4">
          <div class="wow fadeInUp group mb-12" data-wow-delay=".1s">
            <div
              class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
              <span
                class="absolute top-0 left-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
              <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M30.5801 8.30514H27.9926C28.6113 7.85514 29.1176 7.34889 29.3426 6.73014C29.6801 5.88639 29.6801 4.48014 27.9363 2.84889C26.0801 1.04889 24.3926 1.04889 23.3238 1.33014C20.9051 1.94889 19.2738 4.76139 18.3738 6.78639C17.4738 4.76139 15.8426 2.00514 13.4238 1.33014C12.3551 1.04889 10.6676 1.10514 8.81133 2.84889C7.06758 4.53639 7.12383 5.88639 7.40508 6.73014C7.63008 7.34889 8.13633 7.85514 8.75508 8.30514H5.71758C4.08633 8.30514 2.73633 9.65514 2.73633 11.2864V14.9989C2.73633 16.5739 4.03008 17.8676 5.60508 17.9239V31.6489C5.60508 33.5614 7.18008 35.1926 9.14883 35.1926H27.5426C29.4551 35.1926 31.0863 33.6176 31.0863 31.6489V17.8676C32.4926 17.6426 33.5613 16.4051 33.5613 14.9426V11.2301C33.5613 9.59889 32.2113 8.30514 30.5801 8.30514ZM23.9426 3.69264C23.9988 3.69264 24.1676 3.63639 24.3363 3.63639C24.7301 3.63639 25.3488 3.80514 26.1926 4.59264C26.8676 5.21139 27.0363 5.66139 26.9801 5.77389C26.6988 6.56139 23.8863 7.40514 20.6801 7.74264C21.4676 5.99889 22.6488 4.03014 23.9426 3.69264ZM10.4988 4.64889C11.3426 3.86139 11.9613 3.69264 12.3551 3.69264C12.5238 3.69264 12.6363 3.74889 12.7488 3.74889C14.0426 4.08639 15.2801 5.99889 16.0676 7.79889C12.8613 7.46139 10.0488 6.61764 9.76758 5.83014C9.71133 5.66139 9.88008 5.26764 10.4988 4.64889ZM5.26758 14.9426V11.2301C5.26758 11.0051 5.43633 10.7801 5.71758 10.7801H30.5801C30.8051 10.7801 31.0301 10.9489 31.0301 11.2301V14.9426C31.0301 15.1676 30.8613 15.3926 30.5801 15.3926H5.71758C5.49258 15.3926 5.26758 15.2239 5.26758 14.9426ZM27.5426 32.6614H9.14883C8.58633 32.6614 8.13633 32.2114 8.13633 31.6489V17.9239H28.4988V31.6489C28.5551 32.2114 28.1051 32.6614 27.5426 32.6614Z"
                  fill="white" />
              </svg>
            </div>
            <h4 class="mb-3 text-xl font-bold text-dark ">
              Smart AI Assistant
            </h4>
            <p class="mb-8 text-body-color  lg:mb-9">
              Experience precision in every word with our Smart AI Assistant, expertly crafting and delivering optimized responses for you.
            </p>
            <a href="{{route('how_it_works')}}"
              class="text-base font-medium text-dark  hover:text-primary ">
              Learn More
            </a>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/4">
          <div class="wow fadeInUp group mb-12" data-wow-delay=".15s">
            <div
              class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
              <span
                class="absolute top-0 left-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
              <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M30.5998 1.01245H5.39981C2.98105 1.01245 0.956055 2.9812 0.956055 5.4562V30.6562C0.956055 33.075 2.9248 35.0437 5.39981 35.0437H30.5998C33.0186 35.0437 34.9873 33.075 34.9873 30.6562V5.39995C34.9873 2.9812 33.0186 1.01245 30.5998 1.01245ZM5.39981 3.48745H30.5998C31.6123 3.48745 32.4561 4.3312 32.4561 5.39995V11.1937H3.4873V5.39995C3.4873 4.38745 4.38731 3.48745 5.39981 3.48745ZM3.4873 30.6V13.725H23.0623V32.5125H5.39981C4.38731 32.5125 3.4873 31.6125 3.4873 30.6ZM30.5998 32.5125H25.5373V13.725H32.4561V30.6C32.5123 31.6125 31.6123 32.5125 30.5998 32.5125Z"
                  fill="white" />
              </svg>
            </div>
            <h4 class="mb-3 text-xl font-bold text-dark ">
              Automated Workflow
            </h4>
            <p class="mb-8 text-body-color  lg:mb-9">
              You can automate steps and receive notifications. Tailor your workflow for optimal efficiency and control in your customer response process.
            </p>
            <a href="{{route('how_it_works')}}"
              class="text-base font-medium text-dark  hover:text-primary ">
              Learn More
            </a>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/4">
          <div class="wow fadeInUp group mb-12" data-wow-delay=".2s">
            <div
              class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
              <span
                class="absolute top-0 left-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
              <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M33.5613 21.4677L31.3675 20.1177C30.805 19.7239 30.0175 19.9489 29.6238 20.5114C29.23 21.1302 29.455 21.8614 30.0175 22.2552L31.48 23.2114L18.1488 31.5927L4.76127 23.2114L6.22377 22.2552C6.84252 21.8614 7.01127 21.0739 6.61752 20.5114C6.22377 19.8927 5.43627 19.7239 4.87377 20.1177L2.68002 21.4677C2.11752 21.8614 1.72377 22.4802 1.72377 23.1552C1.72377 23.8302 2.06127 24.5052 2.68002 24.8427L17.08 33.8989C17.4175 34.1239 17.755 34.1802 18.1488 34.1802C18.5425 34.1802 18.88 34.0677 19.2175 33.8989L33.5613 24.8989C34.1238 24.5052 34.5175 23.8864 34.5175 23.2114C34.5175 22.5364 34.18 21.8614 33.5613 21.4677Z"
                  fill="white" />
                <path
                  d="M20.1175 20.4552L18.1488 21.6364L16.18 20.3989C15.5613 20.0052 14.83 20.2302 14.4363 20.7927C14.0425 21.4114 14.2675 22.1427 14.83 22.5364L17.4738 24.1677C17.6988 24.2802 17.9238 24.3364 18.1488 24.3364C18.3738 24.3364 18.5988 24.2802 18.8238 24.1677L21.4675 22.5364C22.0863 22.1427 22.255 21.3552 21.8613 20.7927C21.4675 20.2302 20.68 20.0614 20.1175 20.4552Z"
                  fill="white" />
                <path
                  d="M7.74252 18.0927L11.455 20.4552C11.68 20.5677 11.905 20.6239 12.13 20.6239C12.5238 20.6239 12.9738 20.3989 13.1988 20.0052C13.5925 19.3864 13.3675 18.6552 12.805 18.2614L9.09252 15.8989C8.47377 15.5052 7.74252 15.7302 7.34877 16.2927C6.95502 16.9677 7.12377 17.7552 7.74252 18.0927Z"
                  fill="white" />
                <path
                  d="M5.04252 16.1802C5.43627 16.1802 5.88627 15.9552 6.11127 15.5614C6.50502 14.9427 6.28002 14.2114 5.71752 13.8177L4.81752 13.2552L5.71752 12.6927C6.33627 12.2989 6.50502 11.5114 6.11127 10.9489C5.71752 10.3302 4.93002 10.1614 4.36752 10.5552L1.72377 12.1864C1.33002 12.4114 1.10502 12.8052 1.10502 13.2552C1.10502 13.7052 1.33002 14.0989 1.72377 14.3239L4.36752 15.9552C4.53627 16.1239 4.76127 16.1802 5.04252 16.1802Z"
                  fill="white" />
                <path
                  d="M8.41752 10.7239C8.64252 10.7239 8.86752 10.6677 9.09252 10.5552L12.805 8.1927C13.4238 7.79895 13.5925 7.01145 13.1988 6.44895C12.805 5.8302 12.0175 5.66145 11.455 6.0552L7.74252 8.4177C7.12377 8.81145 6.95502 9.59895 7.34877 10.1614C7.57377 10.4989 7.96752 10.7239 8.41752 10.7239Z"
                  fill="white" />
                <path
                  d="M16.18 6.05522L18.1488 4.81772L20.1175 6.05522C20.3425 6.16772 20.5675 6.22397 20.7925 6.22397C21.1863 6.22397 21.6363 5.99897 21.8613 5.60522C22.255 4.98647 22.03 4.25522 21.4675 3.86147L18.8238 2.23022C18.43 1.94897 17.8675 1.94897 17.4738 2.23022L14.83 3.86147C14.2113 4.25522 14.0425 5.04272 14.4363 5.60522C14.83 6.16772 15.6175 6.44897 16.18 6.05522Z"
                  fill="white" />
                <path
                  d="M23.4925 8.19267L27.205 10.5552C27.43 10.6677 27.655 10.7239 27.88 10.7239C28.2738 10.7239 28.7238 10.4989 28.9488 10.1052C29.3425 9.48642 29.1175 8.75517 28.555 8.36142L24.8425 5.99892C24.28 5.60517 23.4925 5.83017 23.0988 6.39267C22.705 7.01142 22.8738 7.79892 23.4925 8.19267Z"
                  fill="white" />
                <path
                  d="M34.5738 12.1864L31.93 10.5552C31.3675 10.1614 30.58 10.3864 30.1863 10.9489C29.7925 11.5677 30.0175 12.2989 30.58 12.6927L31.48 13.2552L30.58 13.8177C29.9613 14.2114 29.7925 14.9989 30.1863 15.5614C30.4113 15.9552 30.8613 16.1802 31.255 16.1802C31.48 16.1802 31.705 16.1239 31.93 16.0114L34.5738 14.3802C34.9675 14.1552 35.1925 13.7614 35.1925 13.3114C35.1925 12.8614 34.9675 12.4114 34.5738 12.1864Z"
                  fill="white" />
                <path
                  d="M24.1675 20.624C24.3925 20.624 24.6175 20.5677 24.8425 20.4552L28.555 18.0927C29.1738 17.699 29.3425 16.9115 28.9488 16.349C28.555 15.7302 27.7675 15.5615 27.205 15.9552L23.4925 18.3177C22.8738 18.7115 22.705 19.499 23.0988 20.0615C23.3238 20.4552 23.7175 20.624 24.1675 20.624Z"
                  fill="white" />
              </svg>
            </div>
            <h4 class="mb-3 text-xl font-bold text-dark ">
              Personalised Responses
            </h4>
            <p class="mb-8 text-body-color  lg:mb-9">
              Take your smart AI to the next level by adding personalized snippets, ensuring tailored engagements for all the different scenarios.
            </p>
            <a href="{{route('how_it_works')}}"
              class="text-base font-medium text-dark  hover:text-primary ">
              Learn More
            </a>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/2 lg:w-1/4">
          <div class="wow fadeInUp group mb-12" data-wow-delay=".25s">
            <div
              class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
              <span
                class="absolute top-0 left-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
              <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M12.355 2.0614H5.21129C3.29879 2.0614 1.72379 3.6364 1.72379 5.5489V12.6927C1.72379 14.6052 3.29879 16.1802 5.21129 16.1802H12.355C14.2675 16.1802 15.8425 14.6052 15.8425 12.6927V5.60515C15.8988 3.6364 14.3238 2.0614 12.355 2.0614ZM13.3675 12.7489C13.3675 13.3114 12.9175 13.7614 12.355 13.7614H5.21129C4.64879 13.7614 4.19879 13.3114 4.19879 12.7489V5.60515C4.19879 5.04265 4.64879 4.59265 5.21129 4.59265H12.355C12.9175 4.59265 13.3675 5.04265 13.3675 5.60515V12.7489Z"
                  fill="white" />
                <path
                  d="M31.0863 2.0614H23.9425C22.03 2.0614 20.455 3.6364 20.455 5.5489V12.6927C20.455 14.6052 22.03 16.1802 23.9425 16.1802H31.0863C32.9988 16.1802 34.5738 14.6052 34.5738 12.6927V5.60515C34.5738 3.6364 32.9988 2.0614 31.0863 2.0614ZM32.0988 12.7489C32.0988 13.3114 31.6488 13.7614 31.0863 13.7614H23.9425C23.38 13.7614 22.93 13.3114 22.93 12.7489V5.60515C22.93 5.04265 23.38 4.59265 23.9425 4.59265H31.0863C31.6488 4.59265 32.0988 5.04265 32.0988 5.60515V12.7489Z"
                  fill="white" />
                <path
                  d="M12.355 20.0051H5.21129C3.29879 20.0051 1.72379 21.5801 1.72379 23.4926V30.6364C1.72379 32.5489 3.29879 34.1239 5.21129 34.1239H12.355C14.2675 34.1239 15.8425 32.5489 15.8425 30.6364V23.5489C15.8988 21.5801 14.3238 20.0051 12.355 20.0051ZM13.3675 30.6926C13.3675 31.2551 12.9175 31.7051 12.355 31.7051H5.21129C4.64879 31.7051 4.19879 31.2551 4.19879 30.6926V23.5489C4.19879 22.9864 4.64879 22.5364 5.21129 22.5364H12.355C12.9175 22.5364 13.3675 22.9864 13.3675 23.5489V30.6926Z"
                  fill="white" />
                <path
                  d="M31.0863 20.0051H23.9425C22.03 20.0051 20.455 21.5801 20.455 23.4926V30.6364C20.455 32.5489 22.03 34.1239 23.9425 34.1239H31.0863C32.9988 34.1239 34.5738 32.5489 34.5738 30.6364V23.5489C34.5738 21.5801 32.9988 20.0051 31.0863 20.0051ZM32.0988 30.6926C32.0988 31.2551 31.6488 31.7051 31.0863 31.7051H23.9425C23.38 31.7051 22.93 31.2551 22.93 30.6926V23.5489C22.93 22.9864 23.38 22.5364 23.9425 22.5364H31.0863C31.6488 22.5364 32.0988 22.9864 32.0988 23.5489V30.6926Z"
                  fill="white" />
              </svg>
            </div>
            <h4 class="mb-3 text-xl font-bold text-dark ">
              Make it Truly Yours
            </h4>
            <p class="mb-8 text-body-color  lg:mb-9">
              Our AI assistant is user-friendly out of the box, yet offers you customizable rules for optimized efficiency and customer interactions.
            </p>
            <a href="{{route('how_it_works')}}"
              class="text-base font-medium text-dark  hover:text-primary ">
              Learn More
            </a>
          </div>
        </div>
  
      </div>
    </div>
  </section>
  <!-- ====== Features Section End -->
  
  <!-- ====== About Section Start -->
  <section id="about" class="bg-gray-1  pt-20 pb-8 lg:pt-[120px] lg:pb-[70px]">
    <div class="container">
      <div class="wow fadeInUp" data-wow-delay=".2s">
        <div class="-mx-4 flex flex-wrap items-center">
          <div class="w-full px-4 lg:w-1/2">
            <div class="mb-12 max-w-[540px] lg:mb-0">
              <h2
                class="mb-5 text-3xl font-bold leading-tight text-dark  sm:text-[40px] sm:leading-[1.2]">
                Effortless Excellence for Google Review Responses
              </h2>
              <p class="mb-10 text-base leading-relaxed text-body-color ">
                At Ziko.ai, we understand the challenges of enhancing customer interactions through Google reviews. Our AI simplifies crafting and posting great responses for busy business owners.
                <br> <br>
                Incorporating AI for Google customer feedback responses can be pivotal for business owners seeking efficiency and precision. The automated intelligence not only saves valuable time but promotes consistently crafted, thoughtful responses.
                <br> <br>
               Ziko isn't just about making things easier; it's about revolutionizing customer interactions with intelligent AI and adaptable personalization. Experience Ziko.ai firsthand and redefine your customer relationships.
              </p>
  
              <a href="#pricing"
                class="inline-flex items-center justify-center py-3 text-base font-medium text-center text-white border border-primary rounded-md px-7 bg-primary hover:bg-blue-dark hover:border-blue-dark">
                Get started today
              </a>
            </div>
          </div>
  
          <div class="w-full px-4 lg:w-1/2">
            <div class="flex flex-wrap -mx-2 sm:-mx-4 lg:-mx-2 xl:-mx-4">
              <div class="w-full px-2">
                <div class="mb-4 sm:mb-8 sm:h-[400px] md:h-[540px] lg:h-[400px] xl:h-[500px]">
  
                  <img src="/assets/images/basic/ziko-placeholder.jpg" data-src="/assets/images/about/ziko-ai-concept-art-1.png" alt="about image" class="lazyload object-cover object-center w-full h-full rounded-xl"  loading="lazy" />
  
                </div>
              </div>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== About Section End -->
  
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
  
  
  
  <!-- ====== FAQ Section Start -->
  <section class="relative z-20 overflow-hidden bg-white  pt-20 pb-8 lg:pt-[120px] lg:pb-[50px]">
    <div class="container mx-auto">
      <div class="flex flex-wrap -mx-4">
        <div class="w-full px-4">
          <div class="mx-auto mb-[60px] max-w-[520px] text-center">
            <span class="block mb-2 text-lg font-semibold text-primary">
              FAQ
            </span>
            <h2 class="text-dark  mb-3 text-3xl leading-[1.2] font-bold sm:text-4xl md:text-[40px]">
              Your Questions Answered
            </h2>
            <p class="mx-auto max-w-[485px] text-base text-body-color ">
              Explore our FAQ section for answers to your questions.
            </p>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap -mx-4">
        <div class="w-full px-4 lg:w-1/2">
          <div class="mb-12 flex lg:mb-[70px]">
            <div
              class="bg-primary mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
              <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                <path
                  d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" />
                <path
                  d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" />
                <path
                  d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" />
              </svg>
            </div>
            <div class="w-full">
              <h3 class="mb-6 text-xl font-semibold text-dark  sm:text-2xl lg:text-xl xl:text-2xl">
                Is there a Free Trial of Ziko AI available?
              </h3>
              <p class="text-base text-body-color ">
                Ziko.ai offers a 14-day refund period, giving you full access to all features of the platform. For inquiries or personalized packages, we suggest scheduling a demo with our team.
              </p>
            </div>
          </div>
          <div class="mb-12 flex lg:mb-[70px]">
            <div
              class="bg-primary mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
              <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                <path
                  d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" />
                <path
                  d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" />
                <path
                  d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" />
              </svg>
            </div>
            <div class="w-full">
              <h3 class="mb-6 text-xl font-semibold text-dark  sm:text-2xl lg:text-xl xl:text-2xl">
                Does it support Multiple Business Locations?
              </h3>
              <p class="text-base text-body-color ">
                Yes! Ziko.ai is crafted to support businesses with multiple locations. Our subscription plans provide flexible options for multiple business locations.
            </div>
          </div>
        </div>
        <div class="w-full px-4 lg:w-1/2">
          <div class="mb-12 flex lg:mb-[70px]">
            <div
              class="bg-primary mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
              <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                <path
                  d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" />
                <path
                  d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" />
                <path
                  d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" />
              </svg>
            </div>
            <div class="w-full">
              <h3 class="mb-6 text-xl font-semibold text-dark  sm:text-2xl lg:text-xl xl:text-2xl">
                For Local and eCommerce businesses?
              </h3>
              <p class="text-base text-body-color ">
                Yes! Ziko.ai is versatile and can effectively support businesses across various sectors, including eCommerce. It works for all types of businesses with a Google Business Profile.
              </p>
            </div>
          </div>
          <div class="mb-12 flex lg:mb-[70px]">
            <div
              class="bg-primary mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
              <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                <path
                  d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" />
                <path
                  d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" />
                <path
                  d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" />
              </svg>
            </div>
            <div class="w-full">
              <h3 class="mb-6 text-xl font-semibold text-dark  sm:text-2xl lg:text-xl xl:text-2xl">
                What subscription plans are available?
              </h3>
              <p class="text-base text-body-color ">
                Ziko.ai provides three subscription plans - Starter, Basic, and Pro - tailored to your business needs. You can contact us if you need a bigger plan for your company.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      <span class="absolute top-4 left-4 -z-[1]">
        <svg width="48" height="134" viewBox="0 0 48 134" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="45.6673" cy="132" r="1.66667" transform="rotate(180 45.6673 132)" fill="#13C296" />
          <circle cx="45.6673" cy="117.333" r="1.66667" transform="rotate(180 45.6673 117.333)" fill="#13C296" />
          <circle cx="45.6673" cy="102.667" r="1.66667" transform="rotate(180 45.6673 102.667)" fill="#13C296" />
          <circle cx="45.6673" cy="88.0001" r="1.66667" transform="rotate(180 45.6673 88.0001)" fill="#13C296" />
          <circle cx="45.6673" cy="73.3335" r="1.66667" transform="rotate(180 45.6673 73.3335)" fill="#13C296" />
          <circle cx="45.6673" cy="45.0001" r="1.66667" transform="rotate(180 45.6673 45.0001)" fill="#13C296" />
          <circle cx="45.6673" cy="16.0001" r="1.66667" transform="rotate(180 45.6673 16.0001)" fill="#13C296" />
          <circle cx="45.6673" cy="59.0001" r="1.66667" transform="rotate(180 45.6673 59.0001)" fill="#13C296" />
          <circle cx="45.6673" cy="30.6668" r="1.66667" transform="rotate(180 45.6673 30.6668)" fill="#13C296" />
          <circle cx="45.6673" cy="1.66683" r="1.66667" transform="rotate(180 45.6673 1.66683)" fill="#13C296" />
          <circle cx="31.0013" cy="132" r="1.66667" transform="rotate(180 31.0013 132)" fill="#13C296" />
          <circle cx="31.0013" cy="117.333" r="1.66667" transform="rotate(180 31.0013 117.333)" fill="#13C296" />
          <circle cx="31.0013" cy="102.667" r="1.66667" transform="rotate(180 31.0013 102.667)" fill="#13C296" />
          <circle cx="31.0013" cy="88.0001" r="1.66667" transform="rotate(180 31.0013 88.0001)" fill="#13C296" />
          <circle cx="31.0013" cy="73.3335" r="1.66667" transform="rotate(180 31.0013 73.3335)" fill="#13C296" />
          <circle cx="31.0013" cy="45.0001" r="1.66667" transform="rotate(180 31.0013 45.0001)" fill="#13C296" />
          <circle cx="31.0013" cy="16.0001" r="1.66667" transform="rotate(180 31.0013 16.0001)" fill="#13C296" />
          <circle cx="31.0013" cy="59.0001" r="1.66667" transform="rotate(180 31.0013 59.0001)" fill="#13C296" />
          <circle cx="31.0013" cy="30.6668" r="1.66667" transform="rotate(180 31.0013 30.6668)" fill="#13C296" />
          <circle cx="31.0013" cy="1.66683" r="1.66667" transform="rotate(180 31.0013 1.66683)" fill="#13C296" />
          <circle cx="16.3333" cy="132" r="1.66667" transform="rotate(180 16.3333 132)" fill="#13C296" />
          <circle cx="16.3333" cy="117.333" r="1.66667" transform="rotate(180 16.3333 117.333)" fill="#13C296" />
          <circle cx="16.3333" cy="102.667" r="1.66667" transform="rotate(180 16.3333 102.667)" fill="#13C296" />
          <circle cx="16.3333" cy="88.0001" r="1.66667" transform="rotate(180 16.3333 88.0001)" fill="#13C296" />
          <circle cx="16.3333" cy="73.3335" r="1.66667" transform="rotate(180 16.3333 73.3335)" fill="#13C296" />
          <circle cx="16.3333" cy="45.0001" r="1.66667" transform="rotate(180 16.3333 45.0001)" fill="#13C296" />
          <circle cx="16.3333" cy="16.0001" r="1.66667" transform="rotate(180 16.3333 16.0001)" fill="#13C296" />
          <circle cx="16.3333" cy="59.0001" r="1.66667" transform="rotate(180 16.3333 59.0001)" fill="#13C296" />
          <circle cx="16.3333" cy="30.6668" r="1.66667" transform="rotate(180 16.3333 30.6668)" fill="#13C296" />
          <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(180 16.3333 1.66683)" fill="#13C296" />
          <circle cx="1.66732" cy="132" r="1.66667" transform="rotate(180 1.66732 132)" fill="#13C296" />
          <circle cx="1.66732" cy="117.333" r="1.66667" transform="rotate(180 1.66732 117.333)" fill="#13C296" />
          <circle cx="1.66732" cy="102.667" r="1.66667" transform="rotate(180 1.66732 102.667)" fill="#13C296" />
          <circle cx="1.66732" cy="88.0001" r="1.66667" transform="rotate(180 1.66732 88.0001)" fill="#13C296" />
          <circle cx="1.66732" cy="73.3335" r="1.66667" transform="rotate(180 1.66732 73.3335)" fill="#13C296" />
          <circle cx="1.66732" cy="45.0001" r="1.66667" transform="rotate(180 1.66732 45.0001)" fill="#13C296" />
          <circle cx="1.66732" cy="16.0001" r="1.66667" transform="rotate(180 1.66732 16.0001)" fill="#13C296" />
          <circle cx="1.66732" cy="59.0001" r="1.66667" transform="rotate(180 1.66732 59.0001)" fill="#13C296" />
          <circle cx="1.66732" cy="30.6668" r="1.66667" transform="rotate(180 1.66732 30.6668)" fill="#13C296" />
          <circle cx="1.66732" cy="1.66683" r="1.66667" transform="rotate(180 1.66732 1.66683)" fill="#13C296" />
        </svg>
      </span>
      <span class="absolute bottom-4 right-4 -z-[1]">
        <svg width="48" height="134" viewBox="0 0 48 134" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="45.6673" cy="132" r="1.66667" transform="rotate(180 45.6673 132)" fill="#3758F9" />
          <circle cx="45.6673" cy="117.333" r="1.66667" transform="rotate(180 45.6673 117.333)" fill="#3758F9" />
          <circle cx="45.6673" cy="102.667" r="1.66667" transform="rotate(180 45.6673 102.667)" fill="#3758F9" />
          <circle cx="45.6673" cy="88.0001" r="1.66667" transform="rotate(180 45.6673 88.0001)" fill="#3758F9" />
          <circle cx="45.6673" cy="73.3333" r="1.66667" transform="rotate(180 45.6673 73.3333)" fill="#3758F9" />
          <circle cx="45.6673" cy="45.0001" r="1.66667" transform="rotate(180 45.6673 45.0001)" fill="#3758F9" />
          <circle cx="45.6673" cy="16.0001" r="1.66667" transform="rotate(180 45.6673 16.0001)" fill="#3758F9" />
          <circle cx="45.6673" cy="59.0001" r="1.66667" transform="rotate(180 45.6673 59.0001)" fill="#3758F9" />
          <circle cx="45.6673" cy="30.6668" r="1.66667" transform="rotate(180 45.6673 30.6668)" fill="#3758F9" />
          <circle cx="45.6673" cy="1.66683" r="1.66667" transform="rotate(180 45.6673 1.66683)" fill="#3758F9" />
          <circle cx="31.0006" cy="132" r="1.66667" transform="rotate(180 31.0006 132)" fill="#3758F9" />
          <circle cx="31.0006" cy="117.333" r="1.66667" transform="rotate(180 31.0006 117.333)" fill="#3758F9" />
          <circle cx="31.0006" cy="102.667" r="1.66667" transform="rotate(180 31.0006 102.667)" fill="#3758F9" />
          <circle cx="31.0006" cy="88.0001" r="1.66667" transform="rotate(180 31.0006 88.0001)" fill="#3758F9" />
          <circle cx="31.0008" cy="73.3333" r="1.66667" transform="rotate(180 31.0008 73.3333)" fill="#3758F9" />
          <circle cx="31.0008" cy="45.0001" r="1.66667" transform="rotate(180 31.0008 45.0001)" fill="#3758F9" />
          <circle cx="31.0008" cy="16.0001" r="1.66667" transform="rotate(180 31.0008 16.0001)" fill="#3758F9" />
          <circle cx="31.0008" cy="59.0001" r="1.66667" transform="rotate(180 31.0008 59.0001)" fill="#3758F9" />
          <circle cx="31.0008" cy="30.6668" r="1.66667" transform="rotate(180 31.0008 30.6668)" fill="#3758F9" />
          <circle cx="31.0008" cy="1.66683" r="1.66667" transform="rotate(180 31.0008 1.66683)" fill="#3758F9" />
          <circle cx="16.3341" cy="132" r="1.66667" transform="rotate(180 16.3341 132)" fill="#3758F9" />
          <circle cx="16.3341" cy="117.333" r="1.66667" transform="rotate(180 16.3341 117.333)" fill="#3758F9" />
          <circle cx="16.3341" cy="102.667" r="1.66667" transform="rotate(180 16.3341 102.667)" fill="#3758F9" />
          <circle cx="16.3341" cy="88.0001" r="1.66667" transform="rotate(180 16.3341 88.0001)" fill="#3758F9" />
          <circle cx="16.3338" cy="73.3333" r="1.66667" transform="rotate(180 16.3338 73.3333)" fill="#3758F9" />
          <circle cx="16.3338" cy="45.0001" r="1.66667" transform="rotate(180 16.3338 45.0001)" fill="#3758F9" />
          <circle cx="16.3338" cy="16.0001" r="1.66667" transform="rotate(180 16.3338 16.0001)" fill="#3758F9" />
          <circle cx="16.3338" cy="59.0001" r="1.66667" transform="rotate(180 16.3338 59.0001)" fill="#3758F9" />
          <circle cx="16.3338" cy="30.6668" r="1.66667" transform="rotate(180 16.3338 30.6668)" fill="#3758F9" />
          <circle cx="16.3338" cy="1.66683" r="1.66667" transform="rotate(180 16.3338 1.66683)" fill="#3758F9" />
          <circle cx="1.66732" cy="132" r="1.66667" transform="rotate(180 1.66732 132)" fill="#3758F9" />
          <circle cx="1.66732" cy="117.333" r="1.66667" transform="rotate(180 1.66732 117.333)" fill="#3758F9" />
          <circle cx="1.66732" cy="102.667" r="1.66667" transform="rotate(180 1.66732 102.667)" fill="#3758F9" />
          <circle cx="1.66732" cy="88.0001" r="1.66667" transform="rotate(180 1.66732 88.0001)" fill="#3758F9" />
          <circle cx="1.66732" cy="73.3333" r="1.66667" transform="rotate(180 1.66732 73.3333)" fill="#3758F9" />
          <circle cx="1.66732" cy="45.0001" r="1.66667" transform="rotate(180 1.66732 45.0001)" fill="#3758F9" />
          <circle cx="1.66732" cy="16.0001" r="1.66667" transform="rotate(180 1.66732 16.0001)" fill="#3758F9" />
          <circle cx="1.66732" cy="59.0001" r="1.66667" transform="rotate(180 1.66732 59.0001)" fill="#3758F9" />
          <circle cx="1.66732" cy="30.6668" r="1.66667" transform="rotate(180 1.66732 30.6668)" fill="#3758F9" />
          <circle cx="1.66732" cy="1.66683" r="1.66667" transform="rotate(180 1.66732 1.66683)" fill="#3758F9" />
        </svg>
      </span>
    </div>
  </section>
  <!-- ====== FAQ Section End -->
  
  <!-- ====== Blog Section Start -->
  <section id="blog" class="pt-20 pb-10 lg:pt-[120px] lg:pb-20 bg-white ">
    <div class="container mx-auto">
      <div class="flex flex-wrap justify-center -mx-4">
        <div class="w-full px-4">
          <div class="mx-auto mb-[60px] max-w-[485px] text-center">
            <span class="block mb-2 text-lg font-semibold text-primary">
              Explore Ziko AI Blogs
            </span>
            <h2 class="mb-4 text-3xl font-bold text-dark  sm:text-4xl md:text-[40px] md:leading-[1.2]">
              Latest Tips And Insights
            </h2>
            <p class="text-base text-body-color ">
              Stay ahead with fresh and informative content tailored to elevate your business's customer interactions.
            </p>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap -mx-4">
        @foreach ($posts as $item)

          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div class="wow fadeInUp group mb-10" data-wow-delay=".1s">
                <div class="mb-8 overflow-hidden rounded-[5px]">
                  <a href="{{route('blog.post', ['post'=>$item->slug])}}" class="block">
                    <img src="{{$item->getThumbnailUrl()}}"alt="image" class="w-full transition group-hover:rotate-6 group-hover:scale-125" />
                  </a>
                </div>
  
                <div>
                    <span
                      class="inline-block px-4 py-0.5 mb-6 text-xs font-medium leading-loose text-center text-white rounded-[5px] bg-primary">
                      {{$item->getReadingTime()}} min read . {{date('d-m-Y', strtotime($item->published_at));}}
                    </span>
  
                    <h3>
                      <a href="{{route('blog.post', ['post'=>$item->slug])}}"
                        class="inline-block mb-4 text-xl font-semibold text-dark  hover:text-primary  sm:text-2xl lg:text-xl xl:text-2xl">
                        {{$item->title }}
                        
                      </a>
                    </h3>
                    <p class="max-w-[370px] text-base text-body-color">
                      {!! \Illuminate\Support\Str::limit( $item->body, 80, '...') !!}
                    </p>
                    
                </div>
            </div>
          </div>

        @endforeach
      </div>
    </div>
  </section>
  <!-- ====== Blog Section End -->
  
  
  
  <!-- ====== Contact Start ====== -->
  <section id="contact" class="relative py-20 md:py-[120px]">
    <div class="absolute top-0 left-0 -z-[1] w-full  h-full"></div>
    <div class="bg-primary absolute top-0 left-0 -z-[1] h-1/2 w-full bg-[#E9F9FF] -700 lg:h-[45%] xl:h-1/2"></div>
    <div class="container px-4">
      <div class="-mx-4 flex flex-wrap items-center">
        <div class="w-full px-4 lg:w-7/12 xl:w-8/12">
          <div class="ud-contact-content-wrapper">
            <div class="ud-contact-title mb-12 lg:mb-[150px]">
              <span class="text-white mb-6 block text-base font-medium text-dark ">
                CONNECT WITH US
              </span>
              <h2 class="text-white max-w-[320px] text-[35px] leading-[1.14] font-semibold text-dark ">
                Let's Elevate Your Customer Interactions.
              </h2>
            </div>
            <div class="mb-12 flex flex-wrap justify-between lg:mb-0">
              <div class="mb-8 flex w-[330px] max-w-full">
                <div class="mr-6 text-[32px] text-primary">
                  <svg width="29" height="35" viewBox="0 0 29 35" class="fill-current">
                    <path
                      d="M14.5 0.710938C6.89844 0.710938 0.664062 6.72656 0.664062 14.0547C0.664062 19.9062 9.03125 29.5859 12.6406 33.5234C13.1328 34.0703 13.7891 34.3437 14.5 34.3437C15.2109 34.3437 15.8672 34.0703 16.3594 33.5234C19.9688 29.6406 28.3359 19.9062 28.3359 14.0547C28.3359 6.67188 22.1016 0.710938 14.5 0.710938ZM14.9375 32.2109C14.6641 32.4844 14.2812 32.4844 14.0625 32.2109C11.3828 29.3125 2.57812 19.3594 2.57812 14.0547C2.57812 7.71094 7.9375 2.625 14.5 2.625C21.0625 2.625 26.4219 7.76562 26.4219 14.0547C26.4219 19.3594 17.6172 29.2578 14.9375 32.2109Z" />
                    <path
                      d="M14.5 8.58594C11.2734 8.58594 8.59375 11.2109 8.59375 14.4922C8.59375 17.7188 11.2187 20.3984 14.5 20.3984C17.7812 20.3984 20.4062 17.7734 20.4062 14.4922C20.4062 11.2109 17.7266 8.58594 14.5 8.58594ZM14.5 18.4297C12.3125 18.4297 10.5078 16.625 10.5078 14.4375C10.5078 12.25 12.3125 10.4453 14.5 10.4453C16.6875 10.4453 18.4922 12.25 18.4922 14.4375C18.4922 16.625 16.6875 18.4297 14.5 18.4297Z" />
                  </svg>
                </div>
                <div>
                  <h5 class="mb-[18px] text-lg font-semibold text-white  sm:text-white md:text-white lg:text-primary">Our Location</h5>
                  <p class="text-base text-white  sm:text-white md:text-white lg:text-body-color">
                    348 Station St, Lalor VIC 3075, Australia
                  </p>
                </div>
              </div>
              <div class="mb-8 flex w-[330px] max-w-full">
                <div class="mr-6 text-[32px] text-primary">
                  <svg width="34" height="25" viewBox="0 0 34 25" class="fill-current">
                    <path
                      d="M30.5156 0.960938H3.17188C1.42188 0.960938 0 2.38281 0 4.13281V20.9219C0 22.6719 1.42188 24.0938 3.17188 24.0938H30.5156C32.2656 24.0938 33.6875 22.6719 33.6875 20.9219V4.13281C33.6875 2.38281 32.2656 0.960938 30.5156 0.960938ZM30.5156 2.875C30.7891 2.875 31.0078 2.92969 31.2266 3.09375L17.6094 11.3516C17.1172 11.625 16.5703 11.625 16.0781 11.3516L2.46094 3.09375C2.67969 2.98438 2.89844 2.875 3.17188 2.875H30.5156ZM30.5156 22.125H3.17188C2.51562 22.125 1.91406 21.5781 1.91406 20.8672V5.00781L15.0391 12.9922C15.5859 13.3203 16.1875 13.4844 16.7891 13.4844C17.3906 13.4844 17.9922 13.3203 18.5391 12.9922L31.6641 5.00781V20.8672C31.7734 21.5781 31.1719 22.125 30.5156 22.125Z" />
                  </svg>
                </div>
                <div>
                  <h5 class="mb-[18px] text-lg font-semibold text-white  sm:text-white md:text-white lg:text-primary">How Can We Help?</h5>
                  <p class="text-base text-white  sm:text-white md:text-white lg:text-body-color">support@ziko.ai</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full px-4 lg:w-5/12 xl:w-4/12">
          <div
            class="wow fadeInUp rounded-lg bg-white  py-10 px-8 shadow-testimonial  sm:py-12 sm:px-10 md:p-[60px] lg:p-10 lg:py-12 lg:px-10 2xl:p-[60px]"
            data-wow-delay=".2s
              ">
            <h3 class="mb-8 text-2xl font-semibold md:text-[28px] md:leading-[1.42] text-dark ">
              Send us a Message
            </h3>
            <form method="post" action="{{ route('ticket') }}">
              @csrf 
              <div class="mb-[22px]">
                <label for="full_name" class="block text-sm text-body-color  mb-4">Full Name*</label>
                <input type="text" name="name" id="full_name" placeholder="Adam Gelius" required
                  class="bg-transparent w-full text-body-color  placeholder:text-body-color/60 border-0 border-b border-[#f1f1f1]  pb-3 focus:border-primary focus:outline-none" />
              </div>
              <div class="mb-[22px]">
                <label for="email" class="block text-sm text-body-color  mb-4">Email*</label>
                <input type="email" name="email" id="email" placeholder="example@yourmail.com" required
                  class="bg-transparent w-full text-body-color  placeholder:text-body-color/60 border-0 border-b border-[#f1f1f1]  pb-3 focus:border-primary focus:outline-none" />
              </div>
              <div class="mb-[22px]">
                <label for="phone" class="block text-sm text-body-color  mb-4">Phone*</label>
                <input type="text" name="phone" id="phone" placeholder="+885 1254 5211 552" required
                  class="bg-transparent w-full text-body-color  placeholder:text-body-color/60 border-0 border-b border-[#f1f1f1]  pb-3 focus:border-primary focus:outline-none" />
              </div>
              <div class="mb-[30px]">
                <label for="message" class="block text-sm text-body-color  mb-4">Message*</label>
                <textarea name="body" id="message" rows="1" placeholder="type your message here" required
                  class="bg-transparent w-full text-body-color  placeholder:text-body-color/60 resize-none border-0 border-b border-[#f1f1f1]  pb-3 focus:border-primary focus:outline-none"></textarea>
              </div>
              <div class="mb-0">
                <button type="submit"
                  class="inline-flex items-center justify-center rounded-md bg-primary py-3 px-10 text-base font-medium text-white transition duration-300 ease-in-out hover:bg-blue-dark">
                  Send
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Contact End ====== -->




@include('components.guest.footer')
<script>
    // ==== for menu scroll
    const pageLink = document.querySelectorAll(".ud-menu-scroll");
  
    pageLink.forEach((elem) => {
      elem.addEventListener("click", (e) => {
        e.preventDefault();
        document.querySelector(elem.getAttribute("href")).scrollIntoView({
          behavior: "smooth",
          offsetTop: 1 - 60,
        });
      });
    });
  
    // section menu active
    function onScroll(event) {
      const sections = document.querySelectorAll(".ud-menu-scroll");
      const scrollPos =
        window.pageYOffset ||
        document.documentElement.scrollTop ||
        document.body.scrollTop;
  
      for (let i = 0; i < sections.length; i++) {
        const currLink = sections[i];
        const val = currLink.getAttribute("href");
        const refElement = document.querySelector(val);
        const scrollTopMinus = scrollPos + 73;
        if (
          refElement.offsetTop <= scrollTopMinus &&
          refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
        ) {
          document
            .querySelector(".ud-menu-scroll")
            .classList.remove("active");
          currLink.classList.add("active");
        } else {
          currLink.classList.remove("active");
        }
      }
    }
  
    window.document.addEventListener("scroll", onScroll);
  
    // Testimonial
    const testimonialSwiper = new Swiper('.testimonial-carousel', {
      slidesPerView: 1,
      spaceBetween: 30,
  
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
  
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        1280: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      },
    });
</script>

@endsection