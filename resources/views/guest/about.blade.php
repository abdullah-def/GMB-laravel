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
            About Us</h1>
    

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
                About us
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ====== Banner Section End -->

<!-- ====== About Section Start -->
<section id="about" class="bg-gray-1  pt-20 pb-8 lg:pt-[120px] lg:pb-[70px]">
  <div class="container">
    <div class="wow fadeInUp" data-wow-delay=".2s">
      <div class="-mx-4 flex flex-wrap items-center">
        <div class="w-full px-4 lg:w-1/2">
          <div class="mb-12 max-w-[540px] lg:mb-0">
            <h2 class="mb-5 text-3xl font-bold leading-tight text-dark  sm:text-[40px] sm:leading-[1.2]">
              Effortless Excellence for Google Review Responses
            </h2>
            <p class="mb-10 text-base leading-relaxed text-body-color">
              At Ziko.ai, we understand the challenges of enhancing customer interactions through Google reviews. Our AI simplifies crafting and posting great responses for busy business owners.
              <br> <br>
              Incorporating AI for Google customer feedback responses can be pivotal for business owners seeking efficiency and precision. The automated intelligence not only saves valuable time but promotes consistently crafted, thoughtful responses.
              <br> <br>
              Ziko isn't just about making things easier; it's about revolutionizing customer interactions with intelligent AI and adaptable personalization. Experience Ziko.ai firsthand and redefine your customer relationships.
            </p>

            <a href="{{route('dashbord')}}"
              class="inline-flex items-center justify-center py-3 text-base font-medium text-center text-white border border-primary rounded-md px-7 bg-primary hover:bg-blue-dark hover:border-blue-dark">
              Get started today
            </a>
          </div>
        </div>

        <div class="w-full px-4 lg:w-1/2">
          <div class="flex flex-wrap -mx-2 sm:-mx-4 lg:-mx-2 xl:-mx-4">
            <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
              <div class="mb-4 sm:mb-8 sm:h-[400px] md:h-[540px] lg:h-[400px] xl:h-[500px]">
                <img src="/assets/images/about/about-image-01.jpg" alt="about image"
                  class="object-cover object-center w-full h-full" />
              </div>
            </div>

            <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
              <div class="mb-4 sm:mb-8 sm:h-[220px] md:h-[346px] lg:mb-4 lg:h-[225px] xl:mb-8 xl:h-[310px]">
                <img src="/assets/images/about/about-image-02.jpg" alt="about image"
                  class="object-cover object-center w-full h-full" />
              </div>

              <div
                class="bg-primary relative z-10 mb-4 flex items-center justify-center overflow-hidden py-12 px-6 sm:mb-8 sm:h-[160px] sm:p-5 lg:mb-4 xl:mb-8">
                <div>
                  <span class="block text-5xl font-extrabold text-white">
                    09
                  </span>
                  <span class="block text-base font-semibold text-white">
                    We have
                  </span>
                  <span class="block text-base font-medium text-white text-opacity-70">
                    Years of experience
                  </span>
                </div>
                <div>
                  <span class="absolute top-0 left-0 -z-10">
                    <svg width="106" height="144" viewBox="0 0 106 144" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <rect opacity="0.1" x="-67" y="47.127" width="113.378" height="131.304"
                        transform="rotate(-42.8643 -67 47.127)" fill="url(#paint0_linear_1416_214)" />
                      <defs>
                        <linearGradient id="paint0_linear_1416_214" x1="-10.3111" y1="47.127" x2="-10.3111"
                          y2="178.431" gradientUnits="userSpaceOnUse">
                          <stop stop-color="white" />
                          <stop offset="1" stop-color="white" stop-opacity="0" />
                        </linearGradient>
                      </defs>
                    </svg>
                  </span>
                  <span class="absolute top-0 right-0 -z-10">
                    <svg width="130" height="97" viewBox="0 0 130 97" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect opacity="0.1" x="0.86792" y="-6.67725" width="155.563" height="140.614"
                        transform="rotate(-42.8643 0.86792 -6.67725)" fill="url(#paint0_linear_1416_215)" />
                      <defs>
                        <linearGradient id="paint0_linear_1416_215" x1="78.6495" y1="-6.67725" x2="78.6495"
                          y2="133.937" gradientUnits="userSpaceOnUse">
                          <stop stop-color="white" />
                          <stop offset="1" stop-color="white" stop-opacity="0" />
                        </linearGradient>
                      </defs>
                    </svg>
                  </span>
                  <span class="absolute bottom-0 right-0 -z-10">
                    <svg width="175" height="104" viewBox="0 0 175 104" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <rect opacity="0.1" x="175.011" y="108.611" width="101.246" height="148.179"
                        transform="rotate(137.136 175.011 108.611)" fill="url(#paint0_linear_1416_216)" />
                      <defs>
                        <linearGradient id="paint0_linear_1416_216" x1="225.634" y1="108.611" x2="225.634" y2="256.79"
                          gradientUnits="userSpaceOnUse">
                          <stop stop-color="white" />
                          <stop offset="1" stop-color="white" stop-opacity="0" />
                        </linearGradient>
                      </defs>
                    </svg>
                  </span>
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

<!-- ====== CTA Section Start -->
<section class="relative z-10 overflow-hidden bg-primary py-20 lg:py-[115px]">
  <div class="container mx-auto">
    <div class="relative overflow-hidden">
      <div class="flex flex-wrap items-stretch -mx-4">
        <div class="w-full px-4">
          <div class="mx-auto max-w-[570px] text-center">
            <h2 class="mb-2.5 text-3xl font-bold md:leading-[1.44] text-white md:text-[38px]">
              <span>What Are You Looking For?</span>
              <span class="font-normal text-3xl md:text-[40px]"> Get Started Now </span>
            </h2>
            <p class="mb-6 mx-auto max-w-[515px] text-base leading-[1.5] text-white">
              Effortless Excellence for Google Review Responses
              At Ziko.ai, we understand the challenges of enhancing customer interactions through Google reviews.
            </p>
            <a href="{{route('plans')}}"
              class="inline-block py-3 text-base font-medium text-white transition border border-transparent rounded-md bg-secondary px-7 hover:bg-[#0BB489]">
              Start using Ziko
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>
    <span class="absolute top-0 left-0">
      <svg width="495" height="470" viewBox="0 0 495 470" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="55" cy="442" r="138" stroke="white" stroke-opacity="0.04" stroke-width="50" />
        <circle cx="446" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20" />
        <path d="M245.406 137.609L233.985 94.9852L276.609 106.406L245.406 137.609Z" stroke="white"
          stroke-opacity="0.08" stroke-width="12" />
      </svg>
    </span>
    <span class="absolute bottom-0 right-0">
      <svg width="493" height="470" viewBox="0 0 493 470" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="462" cy="5" r="138" stroke="white" stroke-opacity="0.04" stroke-width="50" />
        <circle cx="49" cy="470" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20" />
        <path d="M222.393 226.701L272.808 213.192L259.299 263.607L222.393 226.701Z" stroke="white"
          stroke-opacity="0.06" stroke-width="13" />
      </svg>
    </span>
  </div>
</section>
<!-- ====== CTA Section End -->



@include('components.guest.footer')
@endsection