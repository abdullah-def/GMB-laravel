@extends('layouts.guest')

@section('content')
<section class="bg-white pb-8" id="home">
    <div class="container-small hero-header-container px-lg-7 px-xxl-3">
      <div class="row align-items-center">
        <div class="col-12 col-lg-auto order-0 order-md-1 text-end order-1">
          <div class="position-relative p-5 p-md-7 d-lg-none">
            <div class="bg-holder" style="background-image:url(/assets/img/bg/bg-23.png);background-size:contain;"></div>
            <!--/.bg-holder-->
            <div class="position-relative"><img class="w-100 shadow-lg d-dark-none rounded-2" src="/assets/img/bg/bg-31.png" alt="hero-header"><img class="w-100 shadow-lg d-light-none rounded-2" src="/assets/img/bg/bg-30.png" alt="hero-header"></div>
          </div>
          <div class="hero-image-container position-absolute top-0 bottom-0 end-0 d-none d-lg-block">
            <div class="position-relative h-100 w-100">
              <div class="position-absolute h-100 top-0 d-flex align-items-center end-0 hero-image-container-bg">
                <img class="pt-7 pt-md-0 w-100" src="/assets/img/bg/bg-1-2.png" alt="hero-header"></div>
              <div class="position-absolute h-100 top-0 d-flex align-items-center end-0">
                <img class="pt-7 pt-md-0 w-100 shadow-lg d-dark-none rounded-2" src="/assets/img/bg/bg-28.png" alt="hero-header">
                <img class="pt-7 pt-md-0 w-100 shadow-lg d-light-none rounded-2" src="/assets/img/bg/bg-29.png" alt="hero-header">
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 text-lg-start text-center pt-8 pb-6 order-0 position-relative">

          <h1 class="fs-5 fs-lg-6 fs-md-7 fs-lg-6 fs-xl-7 fs fw-black mb-4"><span class="text-primary me-3">Automate</span>Your<br>Google Review Responses with the Latest AI Technology</h1>
          <p class="mb-5">Ziko streamlines Google review responses with instant AI assistance, improving the quality of feedback and boosting online visibility effortlessly.</p><a class="btn btn-lg btn-primary rounded-pill me-3" href="{{route('register')}}" role="button">Get started today</a>
        </div>
      </div>
    </div>
</section>

<!-- ============================================-->
      <!-- <section> begin ============================-->
<section class="py-5 pt-xl-13 bg-white">
  <div class="container-small px-lg-7 px-xxl-3">
    <div class="row g-0">
      <div class="col-6 col-md-3">
        <div class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end"><img class="w-100" src="/assets/img/brand2/Kfc_logo-500x281.png" alt=""></div>
      </div>
      <div class="col-6 col-md-3">
        <div class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end-md"><img class="w-100" src="/assets/img/brand2/Hilton_logo_PNG4.png" alt=""></div>
      </div>
      <div class="col-6 col-md-3">
        <div class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end border-end-md"><img class="w-100" src="/assets/img/brand2/Holiday_Inn_Express_logo_PNG12.png" alt=""></div>
      </div>
      <div class="col-6 col-md-3">
        <div class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-bottom border-end-lg-0"><img class="w-100" src="/assets/img/brand2/IHG_logo_PNG6.png" alt=""></div>
      </div>
      <div class="col-6 col-md-3">
        <div class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end border-bottom border-bottom-md-0"><img class="w-100" src="/assets/img/brand2/Five-Guys-Logo.png" alt=""></div>
      </div>
      <div class="col-6 col-md-3">
        <div class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end-md border-bottom border-bottom-md-0"><img class="w-100" src="/assets/img/brand2/Haagen_Datz_logo_PNG3.png" alt=""></div>
      </div>
      <div class="col-6 col-md-3">
        <div class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end"><img class="w-100" src="/assets/img/brand2/dunkin_donuts_logo_PNG1.png" alt=""></div>
      </div>
      <div class="col-6 col-md-3">
        <div class="p-2 p-lg-5 d-flex flex-center h-100 border-1 border-dashed border-end-lg-0"><img class="w-100" src="/assets/img/brand2/Subway_logo_PNG1.png" alt=""></div>
      </div>
    </div>
  </div><!-- end of .container-->
</section><!-- <section> close ============================-->
<!-- ============================================-->



<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="pt-15 pb-0" id="feature">
  <div class="container-small px-lg-7 px-xxl-3">
    <div class="position-relative z-index-2">
      <div class="row">
        <div class="col-lg-6 text-center text-lg-start pe-xxl-3">
          <h4 class="text-primary fw-bolder mb-4">Features</h4>
          <h2 class="mb-3 text-black lh-base">AI-Powered Review Responses: Respond <br class="d-md-none">to Reviews Faster and Better</h2>
          <p class="mb-5">Discover Effortless Customer Feedback Responses with Ziko AI: Your Smart Assistant to Craft and Submit Great Personalised Responses!</p><a class="btn btn-lg btn-outline-primary rounded-pill me-2" href="{{ route('how_it_works') }}" role="button">Find out more<i class="fa-solid fa-angle-right ms-2"></i></a>
        </div>

        <div class="col-sm-6 col-lg-3 mt-7 text-center text-lg-start">
          <div class="h-100 d-flex flex-column justify-content-between">
            <div class="border-start-lg border-dashed ps-4"><img class="mb-4" src="/assets/img/icons/illustrations/bolt.png" width="48" height="48" alt="">
              <div>
                <h5 class="fw-bolder mb-2">Lightning Speed</h5>
                <p class="fw-semi-bold lh-sm">Present everything you need in one place within minutes! Grow with ZIKO AI!</p>
              </div>
              
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 mt-7 text-center text-lg-start">
          <div class="h-100 d-flex flex-column">
            <div class="border-start-lg border-dashed ps-4"><img class="mb-4" src="/assets/img/icons/illustrations/pie.png" width="48" height="48" alt="">
              <div>
                <h5 class="fw-bolder mb-2">Smart AI Assistant</h5>
                <p class="fw-semi-bold lh-sm">Experience precision in every word with our Smart AI Assistant, expertly crafting and delivering optimized responses for you.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-12 align-items-center justify-content-between text-center text-lg-start mb-6 mb-lg-0">
        <div class="col-lg-5"><img class="feature-image img-fluid mb-9 mb-lg-0 d-dark-none" src="/assets/img/spot-illustrations/22_2.png" alt=""><img class="feature-image img-fluid mb-9 mb-lg-0 d-light-none" src="/assets/img/spot-illustrations/dark_22.png" alt=""></div>
        <div class="col-lg-6">
          <h6 class="text-primary mb-2 ls-2">AUTOMATION</h6>
          <h3 class="fw-bolder mb-3">Automated Workflow</h3>
          <p class="mb-4 px-md-7 px-lg-0">You can automate steps and receive notifications. Tailor your workflow for optimal efficiency and control in your customer response process.</p><a class="btn btn-link me-2 p-0 fs--1" href="{{'how_it_works'}}" role="button">Learn More<i class="fa-solid fa-angle-right ms-2"></i></a>
        </div>
      </div>

      <div class="row mt-2 align-items-center justify-content-between text-center text-lg-start mb-6 mb-lg-0">
        <div class="col-lg-5 order-0 order-lg-1"><img class="feature-image img-fluid mb-9 mb-lg-0 d-dark-none" src="/assets/img/spot-illustrations/23_2.png" height="394" alt=""><img class="feature-image img-fluid mb-9 mb-lg-0 d-light-none" src="/assets/img/spot-illustrations/dark_23.png" height="394" alt=""></div>
        <div class="col-lg-6">
          <h6 class="text-primary mb-2 ls-2">REPLY</h6>
          <h3 class="fw-bolder mb-3">Personalised Responses</h3>
          <p class="mb-4 px-md-7 px-lg-0">Take your smart AI to the next level by adding personalized snippets, ensuring tailored engagements for all the different scenarios.</p><a class="btn btn-link me-2 p-0 fs--1" href="{{'how_it_works'}}" role="button">Learn More<i class="fa-solid fa-angle-right ms-2"></i></a>
        </div>
      </div>

      <div class="row mt-2 align-items-center justify-content-between text-center text-lg-start mb-6 mb-lg-0">
        <div class="col-lg-5"><img class="feature-image img-fluid mb-9 mb-lg-0 d-dark-none" src="/assets/img/spot-illustrations/24_2.png" height="394" alt=""><img class="feature-image img-fluid mb-9 mb-lg-0 d-light-none" src="/assets/img/spot-illustrations/dark_24.png" height="394" alt=""></div>
        <div class="col-lg-6 text-center text-lg-start">
          <h6 class="text-primary mb-2 ls-2">DEPENDABILITY</h6>
          <h3 class="fw-bolder mb-3">Make it Truly Yours</h3>
          <p class="mb-4 px-md-7 px-lg-0">Our AI assistant is user-friendly out of the box, yet offers you customizable rules for optimized efficiency and customer interactions.</p><a class="btn btn-link me-2 p-0 fs--1" href="{{'how_it_works'}}" role="button">Learn More<i class="fa-solid fa-angle-right ms-2"></i></a>
        </div>
      </div>

    </div>
  </div>
  <!-- end of .container-->
</section>
<!-- <section> close ============================-->
<!-- ============================================-->

<div class="position-relative">
  <div class="bg-holder z-index-2 d-none d-md-block" style="background-image:url(/assets/img/bg/13.png);background-size:auto;background-position:right;"></div>
  <!--/.bg-holder-->
  <div class="bg-holder z-index-2 d-none d-md-block d-lg-none d-xl-block" style="background-image:url(/assets/img/bg/bg-12.png);background-size:auto;background-position:left;"></div>
  <!--/.bg-holder-->
  <div class="bottom-0 start-0 end-0 bg-white"><svg class="w-100 text-soft" viewbox="0 0 1920 368" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M1920 0.44L0 367.74V0H1920V0.44Z" fill="currentColor"></path>
    </svg></div>
  <section class="pb-0 bg-white overflow-hidden position-static">
    <div class="container-small px-lg-7 px-xxl-3">
      <div class="row">
        <div class="col-lg-6 mb-6 text-center text-lg-start z-index-2">
          <h4 class="text-primary fw-bolder mb-3">Testimonial</h4> 
          <h2 class="mb-3 text-black">More than 2 Thousands happy<br>Customers and counting</h2> 
          <p class="mb-5">We revolutionize digital customer interactions through smart AI, <br class="d-none d-sm-block">crafting and posting thoughtful responses, saving time for busy <br class="d-none d-sm-block">business owners. leave us the responsibility of responding to customers<br class="d-none d-sm-block">We scrutinize every review and always make the customer happy.</p>
        </div>

        <div class="col-lg-6 z-index-2">
          <div class="carousel slide" id="carouselExampleIndicators" data-bs-ride="carousel">
            <div class="carousel-inner">

              <div class="carousel-item active">
                <div class="row g-1 g-lg-0 g-xl-1 pb-lg-3 pb-xl-0 ps-lg-1 ps-xl-0">
                  <div class="col-lg-6 col-xl-5 text-center">
                    <div class="testimonial-avatar-container d-inline-block position-relative">
                      <div class="bg-holder" style="background-image:url(/assets/img/bg/bg-2.png);background-size:contain;"></div>
                      <!--/.bg-holder-->
                      <img class="rounded-3 mb-lg-0 opacity-100 position-relative" src="/assets/img/team/61.webp" width="153" height="153" alt="">
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-7 text-center text-lg-start">
                    <div class="mb-4 light"><span class="fa fa-star text-primary"></span><span class="fa fa-star text-primary"></span><span class="fa fa-star text-primary"></span><span class="fa fa-star text-primary"></span><span class="fa fa-star text-primary"></span></div>
                    <h3 class="fs-1 fs-xl-2 mb-5 lh-sm me-md-7 me-lg-0">Brilliant app! Will definitely going to be my first choice starting from today</h3>
                    <h6>Monica Gomez</h6>
                    <h6 class="fw-normal">Client Service Consultant, Subway</h6>
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <div class="row g-1 g-lg-0 g-xl-1 pb-lg-3 pb-xl-0 ps-lg-1 ps-xl-0">
                  <div class="col-lg-6 col-xl-5 text-center">
                    <div class="testimonial-avatar-container d-inline-block position-relative">
                      <div class="bg-holder" style="background-image:url(/assets/img/bg/bg-2.png);background-size:contain;"></div>
                      <!--/.bg-holder-->
                      <img class="rounded-3 mb-lg-0 opacity-100 position-relative" src="/assets/img/team/8.webp" width="154" alt="">
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-7 text-center text-lg-start">
                    <div class="mb-4 light"><span class="fa fa-star text-primary"></span><span class="fa fa-star text-primary"></span><span class="fa fa-star text-primary"></span><span class="fa fa-star text-primary"></span><span class="fa fa-star text-primary"></span></div>
                    <h3 class="fs-1 fs-xl-2 mb-5 lh-sm me-md-7 me-lg-0">“Excellent to work with and comfortable to customize. This is what I was looking for till the date!”</h3>
                    <h6>Marc Chiasson</h6>
                    <h6 class="fw-normal">Customer support, KFC</h6>
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <div class="row g-1 g-lg-0 g-xl-1 pb-lg-3 pb-xl-0 ps-lg-1 ps-xl-0">
                  <div class="col-lg-6 col-xl-5 text-center">
                    <div class="testimonial-avatar-container d-inline-block position-relative">
                      <div class="bg-holder" style="background-image:url(/assets/img/bg/bg-2.png);background-size:contain;"></div>
                      <!--/.bg-holder-->
                      <img class="rounded-3 mb-lg-0 opacity-100 position-relative" src="/assets/img/team/35.webp" width="154" alt="">
                    </div>
                  </div>
                  <div class="col-lg-6 col-xl-7 text-center text-lg-start">
                    <div class="mb-4 light"><span class="fa fa-star text-primary"></span><span class="fa fa-star text-primary"></span><span class="fa fa-star text-primary"></span><span class="fa fa-star text-primary"></span><span class="fa fa-star text-primary"></span></div>
                    <h3 class="fs-1 fs-xl-2 mb-5 lh-sm me-md-7 me-lg-0">“Ziko ai is all you can ask for. This is perfect fit for everything you might want to work on!”</h3>
                    <h6>Axel Barry</h6>
                    <h6 class="fw-normal">Technical Support Engineer, Hilton</h6>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<div class="position-relative">
  <div class="bg-holder world-map-bg" style="background-image:url(/assets/img/bg/bg-13.png);"></div>
  <!--/.bg-holder-->
  <div class="bg-holder z-index-2 opacity-25" style="background-image:url(/assets/img/bg/bg-right-21.png);background-size:auto;background-position:right;"></div>
  <!--/.bg-holder-->
  <div class="bg-holder z-index-2 mt-9 opacity-25" style="background-image:url(/assets/img/bg/bg-left-21.png);background-size:auto;background-position:left;"></div>
  <!--/.bg-holder-->
  <svg class="w-100 text-white position-relative" preserveaspectratio="none" viewbox="0 0 1920 368" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M1920 0.44L0 367.74V0H1920V0.44Z" fill="currentColor"></path>
  </svg>
  <section class="overflow-hidden z-index-2">
    <div class="container-small light px-lg-7 px-xxl-3">
      <div class="position-relative">
        <div class="row mb-6">
          <div class="col-xl-6 text-center text-md-start">
            <h2 class="text-white mb-2">Being used by thousands of users</h2>
            <h1 class="fs-md-5 fs-xl-6 fw-black text-gradient-info text-uppercase mb-4 mb-md-0">WORLDWIDE</h1>
          </div>  
          <div class="col-xl-6 text-center text-md-start">
            <p class="text-white">You can get all the reports, data analysis, and growth maps you need with the help of ZIKO's power, and you may review and modify them whenever you want. These features make this dashboard outstanding.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-8 text-center text-md-start mb-6 mb-xl-0">
            <div class="d-md-flex justify-content-md-between">

              <div class="mb-6 mb-md-0 me-4">
                <h1 class="display-1 text-white fw-bolder" data-countup='{"endValue":2000,"duration":5,"suffix":"+"}'>0 <span>+</span></h1>
                <p class="text-white">We have more than 2000 happy customers</p>
              </div>

              <div class="mb-6 mb-md-0 me-4">
                <h1 class="display-1 text-white fw-bolder" data-countup='{"endValue":308,"duration":5,"suffix":"k"}'>0</h1>
                <p class="text-white">We have 308+ answered reviews.</p>
              </div>

              <div class="mb-6 mb-md-0 me-4">
                <h1 class="display-1 text-white fw-bolder" data-countup='{"endValue":12,"duration":0.5}'>0</h1>
                <p class="text-white">We have won 12 awards so<br class="d-md-none d-lg-block">far with great success. </p>
              </div>

            </div>
          </div>
          <div class="col-xl-4 text-center text-md-start"><img class="img-fluid" src="/assets/img/generic/capterra.png" alt=""></div>
        </div>
      </div>
    </div>
  </section>
  <svg class="text-white w-100 position-relative" viewbox="0 0 1920 368" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 368L1920 0.730011L1920 368L0 368Z" fill="currentColor"></path>
  </svg>




</div>





<section class="bg-white pb-lg-6 pb-xl-8" id="faq">
  <div class="bg-holder d-dark-none" style="background-image:url(/assets/img/bg/bg-5.png);background-size:auto;"></div>
  <!--/.bg-holder-->
  <div class="bg-holder d-light-none" style="background-image:url(/assets/img/bg/bg-dark-5.png);background-size:auto;"></div>
  <!--/.bg-holder-->
  <div class="bg-holder" style="background-image:url(/assets/img/bg/bg-left-5.png);background-position:left;background-size:auto;"></div>
  <!--/.bg-holder-->
  <div class="bg-holder" style="background-image:url(/assets/img/bg/bg-right-6.png);background-position:right;background-size:auto;"></div>
  <!--/.bg-holder-->
  <div class="container-small position-relative px-lg-7 px-xxl-3">
    <div class="row text-center text-sm-start">
      <div class="col-12 ">
        <h4 class="text-primary fw-bolder mb-3">Faq</h4>
        <h2>Your Questions Answered</h2>
      </div>
      
    </div>
    

    <div class="row gx-xl-8 gx-xxl-11 gy-6 faq">
      <div class="col-md-6 col-xl-5 col-xxl-4">
        <div class="faq-sidebar offcanvas offcanvas-start bg-soft z-index-5 w-100" id="faq-offcanvas" data-bs-backdrop="false" data-vertical-category-offcanvas="data-vertical-category-offcanvas"style="background-color: transparent !important;">
          <ul class="faq-category-tab nav nav-tabs mb-10 mb-md-5 pb-3 pt-2 w-100 w-sm-75 w-md-100 mx-auto" style=" background-color: transparent !important; ">
           
          </ul>
          <div class="faq-subcategory-tab nav nav-tabs w-sm-75 w-md-100 mx-auto mb-4" id="faq-subcategory-tab" style="width: 90%">
            <div class="nav-item w-100 popular mb-3" role="presentation"><button class="category nav-link btn bg-white w-100 px-3 pt-4 pb-3 fs-0 active" id="tab-sale-101" data-bs-toggle="tab" data-bs-target="#sale-101" type="button" role="tab" aria-selected="false" data-vertical-category-tab="data-vertical-category-tab"><span class="category-icon text-800 fs-2 fa-solid fa-chart-pie"></span><span class="d-block fs-2 fw-bolder lh-1 text-900 mt-3 mb-2">Sales</span><span class="d-block text-900 fw-normal mb-0 fs--1">Questions regarding subscriptions and payments.</span></button></div>

            <div class="nav-item w-100  mb-3" role="presentation"><button class="category nav-link btn bg-white w-100 px-3 pt-4 pb-3 fs-0" id="tab-notification-101" data-bs-toggle="tab" data-bs-target="#notification-101" type="button" role="tab" aria-selected="false" data-vertical-category-tab="data-vertical-category-tab"><span class="category-icon text-800 fs-2 fa-solid fa-bell"></span><span class="d-block fs-2 fw-bolder lh-1 text-900 mt-3 mb-2">Notification</span><span class="d-block text-900 fw-normal mb-0 fs--1">Check and get all the necessary notices on the same page and board. Learn the FAQs here.</span></button></div>
            <div class="nav-item w-100  mb-3" role="presentation"><button class="category nav-link btn bg-white w-100 px-3 pt-4 pb-3 fs-0" id="tab-networking-101" data-bs-toggle="tab" data-bs-target="#networking-101" type="button" role="tab" aria-selected="false" data-vertical-category-tab="data-vertical-category-tab"><span class="category-icon text-800 fs-2 fa-solid fa-circle-nodes"></span><span class="d-block fs-2 fw-bolder lh-1 text-900 mt-3 mb-2">Networking</span><span class="d-block text-900 fw-normal mb-0 fs--1">See the questions about the support network</span></button></div>
            <div class="nav-item w-100 popular mb-3" role="presentation"><button class="category nav-link btn bg-white w-100 px-3 pt-4 pb-3 fs-0" id="tab-customize-101" data-bs-toggle="tab" data-bs-target="#customize-101" type="button" role="tab" aria-selected="false" data-vertical-category-tab="data-vertical-category-tab"><span class="category-icon text-800 fs-2 fa-solid fa-sliders"></span><span class="d-block fs-2 fw-bolder lh-1 text-900 mt-3 mb-2">Customize</span><span class="d-block text-900 fw-normal mb-0 fs--1">Customization related questions  for simple and easy assistance.</span></button></div>
            <div class="nav-item w-100  mb-3" role="presentation"><button class="category nav-link btn bg-white w-100 px-3 pt-4 pb-3 fs-0" id="tab-marketing-101" data-bs-toggle="tab" data-bs-target="#marketing-101" type="button" role="tab" aria-selected="false" data-vertical-category-tab="data-vertical-category-tab"><span class="category-icon text-800 fs-2 fa-solid fa-bullhorn"></span><span class="d-block fs-2 fw-bolder lh-1 text-900 mt-3 mb-2">Marketing</span><span class="d-block text-900 fw-normal mb-0 fs--1">Get all the marketing related questions answered here.</span></button></div>
            <div class="nav-item w-100  mb-3" role="presentation"><button class="category nav-link btn bg-white w-100 px-3 pt-4 pb-3 fs-0" id="tab-our-vision-101" data-bs-toggle="tab" data-bs-target="#our-vision-101" type="button" role="tab" aria-selected="false" data-vertical-category-tab="data-vertical-category-tab"><span class="category-icon text-800 fs-2 fa-solid fa-peace"></span><span class="d-block fs-2 fw-bolder lh-1 text-900 mt-3 mb-2">Our Vision</span><span class="d-block text-900 fw-normal mb-0 fs--1">We provide solutions to respond to reviews in an economically efficient manner. Learn more about these FAQs here</span></button></div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-7 col-xxl-8 mt-md-7">
        <div class="faq-subcategory-content tab-content">
          <div class="empty-header d-none d-md-block" style=" background-color: transparent !important; "></div><button class="btn btn-link d-md-none my-6 fs-0 ps-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#faq-offcanvas"> <span class="fa-solid fa-chevron-left fs--1 me-2" data-fa-transform="up-2"></span>Categories</button>
          
          <div class="tab-pane fade active show" id="sale-101">
            <ul class="list-inline mb-0">

              <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-0 text-primary"></span>
                <div>
                  <h4 class="mb-3 text-1000">How can I purchase your services?</h4>
                  <p class="mb-0 text-700">You can mail us at support@ziko.ai or go to our<a href="{{route('plans')}}"> services page</a>  to directly choose and pay to buy the services we provide.</p>
                </div>
              </li>
              <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-0 text-primary"></span>
                <div>
                  <h4 class="mb-3 text-1000">How much do your service cost?</h4>
                  <p class="mb-0 text-700">Our services can be availed at a minimum cost. Please visit<a href="{{route('plans')}}"> Pricing page</a> to get insights into the better purchase plans.</p>
                </div>
              </li>
              <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-0 text-primary"></span>
                <div>
                  <h4 class="mb-3 text-1000">Do you offer any money-back guarantee?</h4>
                  <p class="mb-0 text-700">We offer refunds to customers who are eligible to get one under our terms and conditions, as well as our policies. Please read our <a href="{{route('refund')}}"> returns policy </a></p>
                </div>
              </li>

            </ul>
            <hr class="text-300">
            <ul class="faq-list list-inline">
              <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                <div>
                  <h4 class="mb-3 text-1000">Do you offer any customer service for your customers?</h4>
                  <p class="mb-0 text-700">We do. We have an enthusiastic team of customer service providers to help you resolve any relevant issues that might arise while using the services. Please contact support@ziko.ai for further info or go to <a href="{{route('contact')}}"> contact page </a></p>
                </div>
              </li>
              <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                <div>
                  <h4 class="mb-3 text-1000">Do you offer any demo/trial version of your services?</h4>
                  <p class="mb-0 text-700">No, we don’t avail any prebooking or trial option. You can contact our support team for further info. </p>
                </div>
              </li>
              <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                <div>
                  <h4 class="mb-3 text-1000">What currencies does Ziko Ai work with?</h4>
                  <p class="mb-0 text-700">We use Stripe as our payment gateway. You can find out the supported currencies through <a href="https://stripe.com/docs/currencies"> this link</a></p>
                </div>
              </li>
              <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                <div>
                  <h4 class="mb-3 text-1000">How can I dropship with Ziko Ai?</h4>
                  <p class="mb-0 text-700">We currently do not support drop shipping, but please <a href="{{route('contact')}}">contact </a> us if you have offers that can be presented</p>
                </div>
              </li>
              {{-- <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                <div>
                  <h4 class="mb-3 text-1000">What is Phoenix and how does it work?</h4>
                  <p class="mb-0 text-700">We allow the return of all items within 30 days of your original order’s date. I</p>
                </div>
              </li> --}}
              
            </ul>
          </div>

          <div class="tab-pane fade" id="notification-101">
            <ul class="list-inline mb-0">
              <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-0 text-primary"></span>
                <div>
                  <h4 class="mb-3 text-1000">Do you allow customized notification option?</h4>
                  <p class="mb-0 text-700">Yes, you can customize and select the topics that you want to be notified about and remove the ones you think are unnecessary. </p>
                </div>
              </li>
              <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-0 text-primary"></span>
                <div>
                  <h4 class="mb-3 text-1000">Are my notifications secure?</h4>
                  <p class="mb-0 text-700">Yes, we take data security seriously and all the information, including your notification types and other things, are protected and cannot be shared.</p>
                </div>
              </li>
            </ul>
            <hr class="text-300">
            <ul class="faq-list list-inline">
              <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                <div>
                  <h4 class="mb-3 text-1000">Do you allow direct actions on your notification?</h4>
                  <p class="mb-0 text-700">Depending on the notification type, and your settings and privacy settings. Please remember, we do not allow open sharing of notifications.</p>
                </div>
              </li>
              <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                <div>
                  <h4 class="mb-3 text-1000">Do you allow multi-device notification?</h4>
                  <p class="mb-0 text-700">Certainly! No need to worry about getting notified about anything as you can log in to multiple devices and get notified according to your preferred way.</p>
                </div>
              </li>

              
            </ul>
          </div>

          <div class="tab-pane fade" id="networking-101">
            <ul class="list-inline mb-0">
              <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-0 text-primary"></span>
                <div>
                  <h4 class="mb-3 text-1000">What are some best features for networking coming with Ziko Ai?</h4>
                  <p class="mb-0 text-700">We have a network of support team ready to answer all your questions and also solve all the problems you may encounter</p>
                </div>
              </li>
              <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-0 text-primary"></span>
                <div>
                  <h4 class="mb-3 text-1000">How can I utilize networking to gain insights into what ziko can offer me?</h4>
                  <p class="mb-0 text-700">First, you can read the Frequently Asked Questions section here, and you can also look at our <a href="{{route('blog')}}"> blog</a> so that you always know what is new, and also to learn about the services that we provide, and if you have any questions, do not hesitate to <a href="{{route('contact')}}"> contact us</a></p>
                </div>
              </li>
            </ul>
            <hr class="text-300">
            <ul class="faq-list list-inline">
              <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                <div>
                  <h4 class="mb-3 text-1000">Are there any specific configuration process applied to use the networking of your site?</h4>
                  <p class="mb-0 text-700">No, you can just use it as is. Yet, we recommend adjusting the page as you need, so you get the optimized feed to see.</p>
                </div>
              </li>
              <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                <div>
                  <h4 class="mb-3 text-1000">How can I use networking to generate leads and attract new customers or clients?</h4>
                  <p class="mb-0 text-700">We respond to reviews intelligently, which always makes your customer satisfied with the service you provide.</p>
                </div>
              </li>
              <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                <div>
                  <h4 class="mb-3 text-1000">How can I effectively network with customers and clients?</h4>
                  <p class="mb-0 text-700">Use our app page to build any networking and see yourself grow with enhanced and better networking options.</p>
                </div>
              </li>
              <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                <div>
                  <h4 class="mb-3 text-1000">What graphs can I use to build strong relationships with customers and clients?</h4>
                  <p class="mb-0 text-700">We provide a set of graphs that show the extent of the customer’s satisfaction with the service you provide, and of course we analyze the reviews accurately so that we can provide you with reports that help you make a decision.</p>
                </div>
              </li>
            </ul>
          </div>
         
          <div class="tab-pane fade" id="customize-101">
            <ul class="list-inline mb-0">
              <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-0 text-primary"></span>
                <div>
                  <h4 class="mb-3 text-1000">Can I customize the app as needed?</h4>
                  <p class="mb-0 text-700">Yes, you can just go to: settings&gt;Rule and customize according to your needs with easy filters and checkbox from the given ones. </p>
                </div>
              </li>
              <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-0 text-primary"></span>
                <div>
                  <h4 class="mb-3 text-1000">Does it support Multiple Business Locations?</h4>
                  <p class="mb-0 text-700">Yes! Ziko.ai is crafted to support businesses with multiple locations. Our subscription plans provide flexible options for multiple business locations.</p>
                </div>
              </li>
            </ul>
            <hr class="text-300">
            <ul class="faq-list list-inline">
              <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                <div>
                  <h4 class="mb-3 text-1000">Can I integrate third-party extensions or plugins into the e-commerce?</h4>
                  <p class="mb-0 text-700">At the moment it is not possible but don't worry we are working on it.</p>
                </div>
              </li>
              
              
              
            </ul>
          </div>
         
          <div class="tab-pane fade" id="marketing-101">
            <ul class="list-inline mb-0">
              <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-0 text-primary"></span>
                <div>
                  <h4 class="mb-3 text-1000">We all know that good customer reviews can be a great way of building customer trust in your brand, but did you know that they can also impact your SEO?</h4>
                  <p class="mb-0 text-700">Google reviews, in particular, can play a big part in the success of your SEO strategy and how well your website ranks for your target search terms. Google factors in customer reviews, both positive and negative, when ranking websites.</p>
                </div>
              </li>
              <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-0 text-primary"></span>
                <div>
                  <h4 class="mb-3 text-1000">Does responding to reviews help with search engine optimization?</h4>
                  <p class="mb-0 text-700">since responding to reviews shows your positive reviewers that you appreciate their kind words, and it shows your negative reviewers that you care enough about them to try and resolve their issues. It's also a good SEO strategy.</p>
                </div>
              </li>
            </ul>
            <hr class="text-300">
            <ul class="faq-list list-inline">
              
              <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                <div>
                  <h4 class="mb-3 text-1000">Can responding to reviews increase sales?</h4>
                  <p class="mb-0 text-700">Businesses that reply to more than 25% of their reviews earn 35% more revenue on average. Responding to reviews is only really the beginning though. If you really want to prove to people that you're taking their opinions seriously, you need to take action.</p>
                </div>
              </li>
              <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                <div>
                  <h4 class="mb-3 text-1000">Can the indicators you provide be useful in marketing?</h4>
                  <p class="mb-0 text-700">Of course, we provide you with a set of indicators that can display the extent of customer satisfaction and also what are the weak points based on customer opinions.</p>
                </div>
              </li>
              
            </ul>
          </div>
         
          <div class="tab-pane fade" id="our-vision-101">
            <ul class="list-inline mb-0">
              <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-0 text-primary"></span>
                <div>
                  <h4 class="mb-3 text-1000">What solutions do you offer?</h4>
                  <p class="mb-0 text-700">At Ziko.ai, we understand the challenges of enhancing customer interactions through Google reviews. Our AI simplifies crafting and posting great responses for busy business owners.</p>
                </div>
              </li>
              <li class="d-flex gap-2 mb-6"><span class="fa-solid fa-star fs-0 text-primary"></span>
                <div>
                  <h4 class="mb-3 text-1000">What techniques do you use to respond to reviews?</h4>
                  <p class="mb-0 text-700">We use a combination of AI engines including ChatGPT-4 for example</p>
                </div>
              </li>
            </ul>
            <hr class="text-300">
            <ul class="faq-list list-inline">
              <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                <div>
                  <h4 class="mb-3 text-1000">How do you ensure customer satisfaction?</h4>
                  <p class="mb-0 text-700">We sift through reviews and give you a summary of our customer satisfaction score.</p>
                </div>
              </li>
              <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                <div>
                  <h4 class="mb-3 text-1000">What are the guarantees on protecting my data?</h4>
                  <p class="mb-0 text-700">We have an information security team that always works to protect your data. We also do not collect any sensitive data from customers about their activity or any passwords.</p>
                </div>
              </li>
              <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                <div>
                  <h4 class="mb-3 text-1000">How can you get started with Ziko Ai?</h4>
                  <p class="mb-0 text-700">You can start by creating an account and then choose a plan that is suitable for you. We will allow you to download our Chrome extension and begin the process of responding to reviews directly.</p>
                </div>
              </li>
              <li class="d-flex mt-6"><span class="fa-solid fa-circle"></span>
                <div>
                  <h4 class="mb-3 text-1000">All languages supported</h4>
                  <p class="mb-0 text-700">Our AI Assistant speaks the language of your customers - and can even translate for you if you have to respond in a foreign language.</p>
                </div>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

{{-- payment --}}
<section class="bg-white pt-lg-0 pt-xl-8" id="pricing">
  <div class="bg-holder d-none d-md-block" style="background-image:url(/assets/img/bg/bg-left-15.png);background-position:left;background-size:auto;"></div>
  <!--/.bg-holder-->
  <div class="bg-holder d-none d-md-block" style="background-image:url(/assets/img/bg/bg-right-15.png);background-position:right;background-size:auto;"></div>
  <!--/.bg-holder-->
  <div class="container-small position-relative px-lg-7 px-xxl-3">
    <div class="row">
      <div class="col-12 mb-4 text-center text-sm-start">
        <h4 class="text-primary fw-bolder mb-3">Pricing</h4>
        <h2>Choose the best deal for you</h2>
      </div>
      <div class="col-md-6 text-center text-sm-start">
      </div>
    </div>
    <div class="row pt-2 g-3 g-xl-0">
      <form method="GET" action="{{route('plans.show')}}">
        @csrf
        <div class="tabs mb-7" id="checkradio">
            <ul class="nav nav-underline nav-tabs mb-3" id="nav-tab" role="tablist">
              <li class="nav-item" role="presentation"><button class="nav-link" id="pills-year-tab" data-bs-toggle="pill" data-bs-target="#pills-year" type="button" role="tab" aria-controls="pills-year" aria-selected="false">Yearly</button></li>
              <li class="nav-item" role="presentation"><button class="nav-link active" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab" aria-controls="pills-month" aria-selected="true">Monthly</button></li>
            </ul>
            <input type="hidden" id="price_list" name="slug"  value="{{$plans[0]->slug}}"/>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-month" role="tabpanel" aria-labelledby="pills-month-tab">
                    <div class="row g-3">
                    
                        <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                            <div class="h-100">
                                <input class="pricing-plan-radio d-none" type="radio" name="pricingMonthly" value="startupname" checked="checked" id="startup" >
                                
                            <div class="position-relative h-100"><label class="stretched-link" for="startup"></label>
                                
                                <div class="card h-100 overflow-hidden cursor-pointer">
                                <div class="bg-holder d-dark-none" style="background-image:url(/assets/img/bg/8.png);background-position:left bottom;background-size:auto;"></div>
                                <!--/.bg-holder-->
                                <div class="bg-holder d-light-none" style="background-image:url(/assets/img/bg/8-dark.png);background-position:left bottom;background-size:auto;"></div>
                                <!--/.bg-holder-->
                                <div class="card-body d-flex flex-column justify-content-between position-relative">
                                    <div class="d-flex justify-content-between">
                                    <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                        <div class="d-sm-flex align-items-center mb-3">
                                        <h3 class="mb-0">Startup</h3>
                                        </div>
                                        <p class="fs--1 text-700">For individuals who are interested <br> in giving it a shot first.</p>
                                        <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                            <h4 class="fw-bolder me-1">$40</h4>
                                            <h5 class="fs--1 fw-normal text-700 ms-1">Per month</h5>
                                        </div>
                                    </div><img class="d-dark-none" src="/assets/img/spot-illustrations/rocket.png" width="54" height="54" alt=""><img class="d-light-none" src="/assets/img/spot-illustrations/rocket-dark.png" width="54" height="54" alt="">
                                    </div>
                                    <div class="row flex-1 justify-content-end">
                                    <div class="col-sm-8 col-md-12">
                                        <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                        <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-200">
                                            <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">For 1 Google Business</span></li>
                                            <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">100 AI Assisted Responses</span></li>
                                            <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">3 Custom Rules</span></li>
                                            <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">0.40$ per add. answer</span></li>
                                        </ul>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                            <div class="h-100">
                                <input class="pricing-plan-radio d-none" type="radio"  name="pricingMonthly"  value="standardname" id="standard">
                                
                            <div class="position-relative h-100"><label class="stretched-link" for="standard"></label>
                                <div class="card h-100 overflow-hidden cursor-pointer">
                                <div class="bg-holder d-dark-none" style="background-image:url(/assets/img/bg/9.png);background-position:left bottom;background-size:auto;"></div>
                                <!--/.bg-holder-->
                                <div class="bg-holder d-light-none" style="background-image:url(/assets/img/bg/9-dark.png);background-position:left bottom;background-size:auto;"></div>
                                <!--/.bg-holder-->
                                <div class="card-body d-flex flex-column justify-content-between position-relative">
                                    <div class="d-flex justify-content-between">
                                    <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                        <div class="d-sm-flex align-items-center mb-3">
                                        <h3 class="mb-0">Standard</h3>
                                        </div>
                                        <p class="fs--1 text-700">For teams that need to create <br> project plans with confidence.</p>
                                        <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                        <h4 class="fw-bolder me-1">$70</h4>
                                        <h5 class="fs--1 fw-normal text-700 ms-1">Per month</h5>
                                        </div>
                                    </div><img class="d-dark-none" src="/assets/img/spot-illustrations/bag-2.png" width="54" height="54" alt=""><img class="d-light-none" src="/assets/img/spot-illustrations/bag-2-dark.png" width="54" height="54" alt="">
                                    </div>
                                    <div class="row flex-1 justify-content-end">
                                    <div class="col-sm-8 col-md-12">
                                        <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                        <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-200">
                                            <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">For 2 Google Business</span></li>
                                            <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">200 AI Assisted Responses</span></li>
                                            <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">5 Custom Rules</span></li>
                                            <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">0.35$ per add. answer</span></li>
                                        </ul>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                            <div class="h-100">
                                <input class="pricing-plan-radio d-none pricing-plan-recommended" type="radio" name="pricingMonthly" value="businessPlusname" id="businessPlus">
                                

                            <div class="position-relative h-100"><label class="stretched-link" for="businessPlus"></label>
                                <div class="card h-100 overflow-hidden cursor-pointer bg-warning-soft border-warning warning-boxshadow pricing-business-plus">
                                <div class="bg-holder d-dark-none" style="background-image:url(/assets/img/bg/bg-11.png);background-position:left bottom;background-size:auto;"></div>
                                <!--/.bg-holder-->
                                <div class="bg-holder d-light-none" style="background-image:url(/assets/img/bg/bg-11-dark.png);background-position:left bottom;background-size:auto;"></div>
                                <!--/.bg-holder-->
                                <div class="card-body d-flex flex-column justify-content-between position-relative">
                                    <div class="d-flex justify-content-between">
                                    <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                        <div class="d-sm-flex d-md-block d-lg-flex align-items-center mb-3">
                                        <h3 class="mb-0">Business Plus</h3><span class="badge ms-sm-3 ms-md-0 ms-lg-3 text-uppercase fs--2 bg-warning">recommended</span>
                                        </div>
                                        <p class="fs--1 text-700">For teams that need to manage <br> work across initiatives.</p>
                                        <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                        <h4 class="fw-bolder me-1">$140</h4>
                                        <h5 class="fs--1 fw-normal text-700 ms-1">Per month</h5>
                                        </div>
                                    </div><img class="d-dark-none" src="/assets/img/spot-illustrations/star.png" width="54" height="54" alt=""><img class="d-light-none" src="/assets/img/spot-illustrations/star-dark.png" width="54" height="54" alt="">
                                    </div>
                                    <div class="row flex-1 justify-content-end">
                                    <div class="col-sm-8 col-md-12">
                                        <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                        <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-warning-300">
                                            <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">For 5 Google Business</span></li>
                                            <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">500 AI Assisted Responses</span></li>
                                            <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">7 Custom Rules</span></li>
                                            <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">0.28$ per add. answer</span></li>
                                        </ul>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                            <div class="h-100">
                            <div class="position-relative h-100"><label class="stretched-link" for="enterprise"></label>
                                <div class="card h-100 overflow-hidden cursor-pointer">
                                <div class="bg-holder d-dark-none" style="background-image:url(/assets/img/bg/10.png);background-position:left bottom;background-size:auto;"></div>
                                <!--/.bg-holder-->
                                <div class="bg-holder d-light-none" style="background-image:url(/assets/img/bg/10-dark.png);background-position:left bottom;background-size:auto;"></div>
                                <!--/.bg-holder-->
                                <div class="card-body d-flex flex-column justify-content-between position-relative">
                                    <div class="d-flex justify-content-between">
                                    <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                        <div class="d-sm-flex align-items-center mb-3">
                                        <h3 class="mb-0">Enterprise</h3>
                                        </div>
                                        <p class="fs--1 text-700">For organizations that need <br> additional security and support.</p>
                                        <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                        <h4 class="fw-bolder me-1 ">Custom pricing</h4>
                                        <h5 class="fs--1 fw-normal text-700 ms-1">Contact Sales</h5>
                                        </div>
                                    </div><img class="d-dark-none" src="/assets/img/spot-illustrations/shield-2.png" width="54" height="54" alt=""><img class="d-light-none" src="/assets/img/spot-illustrations/shield-2-dark.png" width="54" height="54" alt="">
                                    </div>
                                    <div class="row flex-1 justify-content-end">
                                    <div class="col-sm-8 col-md-12">
                                        <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                        <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-200">

                                        </ul>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContentYear">
                <div class="tab-pane fade" id="pills-year" role="tabpanel" aria-labelledby="pills-year-tab">
                    <div class="row g-3">

                        <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                            <div class="h-100">
                                <input class="pricing-plan-radio d-none" type="radio" name="pricingMonthly" value="startupYearlyname" id="startupYearly" >
                                <div class="position-relative h-100"><label class="stretched-link" for="startupYearly"></label>
                                <div class="card h-100 overflow-hidden cursor-pointer">
                                <div class="bg-holder d-dark-none" style="background-image:url(/assets/img/bg/8.png);background-position:left bottom;background-size:auto;"></div>
                                <!--/.bg-holder-->
                                <div class="bg-holder d-light-none" style="background-image:url(/assets/img/bg/8-dark.png);background-position:left bottom;background-size:auto;"></div>
                                <!--/.bg-holder-->
                                <div class="card-body d-flex flex-column justify-content-between position-relative">
                                    <div class="d-flex justify-content-between">
                                    <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                        <div class="d-sm-flex align-items-center mb-3">
                                        <h3 class="mb-0">Startup</h3>
                                        </div>
                                        <p class="fs--1 text-700">For individuals who are interested <br> in giving it a shot first.</p>
                                        <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                            <h4 class="fw-bolder me-1">$35</h4>
                                            <h5 class="fs--1 fw-normal text-700 ms-1">Per year</h5>
                                        </div>
                                    </div><img class="d-dark-none" src="/assets/img/spot-illustrations/rocket.png" width="54" height="54" alt=""><img class="d-light-none" src="/assets/img/spot-illustrations/rocket-dark.png" width="54" height="54" alt="">
                                    </div>
                                    <div class="row flex-1 justify-content-end">
                                    <div class="col-sm-8 col-md-12">
                                        <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                        <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-200">
                                          <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">For 1 Google Business</span></li>
                                          <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">100 AI Assisted Responses</span></li>
                                          <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">3 Custom Rules</span></li>
                                          <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">0.35$ per add. answer</span></li>
                                        </ul>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                            <div class="h-100">
                                <input class="pricing-plan-radio d-none" type="radio" name="pricingMonthly" value="standardYearlyname" id="standardYearly">
                                
                            <div class="position-relative h-100"><label class="stretched-link" for="standardYearly"></label>
                                <div class="card h-100 overflow-hidden cursor-pointer">
                                <div class="bg-holder d-dark-none" style="background-image:url(/assets/img/bg/9.png);background-position:left bottom;background-size:auto;"></div>
                                <!--/.bg-holder-->
                                <div class="bg-holder d-light-none" style="background-image:url(/assets/img/bg/9-dark.png);background-position:left bottom;background-size:auto;"></div>
                                <!--/.bg-holder-->
                                <div class="card-body d-flex flex-column justify-content-between position-relative">
                                    <div class="d-flex justify-content-between">
                                    <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                        <div class="d-sm-flex align-items-center mb-3">
                                        <h3 class="mb-0">Standard</h3>
                                        </div>
                                        <p class="fs--1 text-700">For teams that need to create <br> project plans with confidence.</p>
                                        <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                        <h4 class="fw-bolder me-1">$60</h4>
                                        <h5 class="fs--1 fw-normal text-700 ms-1">Per year</h5>
                                        </div>
                                    </div><img class="d-dark-none" src="/assets/img/spot-illustrations/bag-2.png" width="54" height="54" alt=""><img class="d-light-none" src="/assets/img/spot-illustrations/bag-2-dark.png" width="54" height="54" alt="">
                                    </div>
                                    <div class="row flex-1 justify-content-end">
                                    <div class="col-sm-8 col-md-12">
                                        <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                        <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-200">
                                          <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">For 2 Google Business</span></li>
                                          <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">200 AI Assisted Responses</span></li>
                                          <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">5 Custom Rules</span></li>
                                          <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">0.30$ per add. answer</span></li>
                                        </ul>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                            <div class="h-100">
                                <input class="pricing-plan-radio d-none pricing-plan-recommended" type="radio" name="pricingMonthly" value="businessPlusYearlyname" id="businessPlusYearly">
                            
                                <div class="position-relative h-100"><label class="stretched-link" for="businessPlusYearly"></label>
                                <div class="card h-100 overflow-hidden cursor-pointer bg-warning-soft border-warning warning-boxshadow pricing-business-plus">
                                <div class="bg-holder d-dark-none" style="background-image:url(/assets/img/bg/bg-11.png);background-position:left bottom;background-size:auto;"></div>
                                <!--/.bg-holder-->
                                <div class="bg-holder d-light-none" style="background-image:url(/assets/img/bg/bg-11-dark.png);background-position:left bottom;background-size:auto;"></div>
                                <!--/.bg-holder-->
                                <div class="card-body d-flex flex-column justify-content-between position-relative">
                                    <div class="d-flex justify-content-between">
                                    <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                        <div class="d-sm-flex align-items-center mb-3">
                                        <h3 class="mb-0">Business Plus</h3><span class="badge ms-sm-3 text-uppercase fs--2 bg-warning">recommended</span>
                                        </div>
                                        <p class="fs--1 text-700">For teams that need to manage <br> work across initiatives.</p>
                                        <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                        <h4 class="fw-bolder me-1">$110</h4>
                                        <h5 class="fs--1 fw-normal text-700 ms-1">Per year</h5>
                                        </div>
                                    </div><img class="d-dark-none" src="/assets/img/spot-illustrations/star.png" width="54" height="54" alt=""><img class="d-light-none" src="/assets/img/spot-illustrations/star-dark.png" width="54" height="54" alt="">
                                    </div>
                                    <div class="row flex-1 justify-content-end">
                                    <div class="col-sm-8 col-md-12">
                                        <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                        <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-200">
                                          <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">For 5 Google Business</span></li>
                                          <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">500 AI Assisted Responses</span></li>
                                          <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">7 Custom Rules</span></li>
                                          <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">0.22$ per add. answer</span></li>
                                        </ul>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                            <div class="h-100">
                            <div class="position-relative h-100"><label class="stretched-link" for="enterprise"></label>
                                <div class="card h-100 overflow-hidden cursor-pointer">
                                <div class="bg-holder d-dark-none" style="background-image:url(/assets/img/bg/10.png);background-position:left bottom;background-size:auto;"></div>
                                <!--/.bg-holder-->
                                <div class="bg-holder d-light-none" style="background-image:url(/assets/img/bg/10-dark.png);background-position:left bottom;background-size:auto;"></div>
                                <!--/.bg-holder-->
                                <div class="card-body d-flex flex-column justify-content-between position-relative">
                                    <div class="d-flex justify-content-between">
                                    <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                        <div class="d-sm-flex align-items-center mb-3">
                                        <h3 class="mb-0">Enterprise</h3>
                                        </div>
                                        <p class="fs--1 text-700">For organizations that need <br> additional security and support.</p>
                                        <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                        <h4 class="fw-bolder me-1 ">Custom pricing</h4>
                                        <h5 class="fs--1 fw-normal text-700 ms-1">Contact Sales</h5>
                                        </div>
                                    </div><img class="d-dark-none" src="/assets/img/spot-illustrations/shield-2.png" width="54" height="54" alt=""><img class="d-light-none" src="/assets/img/spot-illustrations/shield-2-dark.png" width="54" height="54" alt="">
                                    </div>
                                    <div class="row flex-1 justify-content-end">
                                    <div class="col-sm-8 col-md-12">
                                        <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                        <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-200">
                                           
                                        </ul>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div>
            <p class="fw-semi-bold">You can get your money back within 7 days <br class="d-none d-sm-block d-lg-none">after subscribing. </p>
            <div class="d-grid d-sm-flex">
                <button type="submit" class="btn btn-lg btn-primary d-sm-flex align-items-center mb-3 mb-sm-0 me-sm-3 px-sm-8">Subscribe Now<span class="fas fa-angle-right ms-1"></span></button></div>
        </div>
      </form>
    </div>
    {{-- {{$plans[0]}} --}}
    <script>
      document.getElementById("checkradio").addEventListener('click', function (event) {
          const cars = [
          ['startupname','{{$plans[0]->slug}}'],['standardname','{{$plans[2]->slug}}'],['businessPlusname','{{$plans[4]->slug}}'],
          ['startupYearlyname','{{$plans[1]->slug}}'],['standardYearlyname','{{$plans[3]->slug}}'],['businessPlusYearlyname','{{$plans[5]->slug}}']];

          if ( event.target && event.target.matches("input[type='radio']") ) {
              if (event.target.value == cars[0][0]){
                  document.getElementById("price_list").value = cars[0][1];
                  
              }
              else if (event.target.value == cars[1][0]){
                  document.getElementById("price_list").value = cars[1][1];
              }
              else if (event.target.value == cars[2][0]){
                  document.getElementById("price_list").value = cars[2][1];
              }
              else if (event.target.value == cars[3][0]){
                  document.getElementById("price_list").value = cars[3][1];
              }
              else if (event.target.value == cars[4][0]){
                  document.getElementById("price_list").value = cars[4][1];
              }
              else if (event.target.value == cars[5][0]){
                  document.getElementById("price_list").value = cars[5][1];
              }

            
          }
      });
    </script>
  </div>
</section>


<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="bg-white" id="blog">
  <div class="container-small px-lg-7 px-xxl-3">
    <div class="row">
      <div class="col-12 mb-4 text-center text-sm-start">
        <h4 class="text-primary fw-bolder mb-3">Blog</h4>
        <h2>Latest articles</h2>
      </div>
      <div class="col-lg-6 text-center text-sm-start">
        <p>Stay ahead with fresh and informative content tailored to elevate your business's customer interactions.</p>
      </div>
     
    </div>
    <div class="row h-100 g-3 justify-content-center">

      

      @foreach ($posts as $item)
        <div class="col-sm-6 col-lg-4 mb-3 mb-md-0">
          <div class="card text-white h-100"><img class="rounded-top h-100 fit-cover" src="{{ $item->image}}" alt="...">
            <div class="card-body rounded-top">
              <div class="d-flex align-items-cente mb-3">

                <div class="d-flex align-items-center me-3">
                  <span class="fa-solid fa-eye text-500 me-1"></span><span class="text-900 fs--2 lh-1">{{$item->views()}}</span>
                </div>

                <div class="d-flex align-items-center me-3">
                  <span class="fa-solid fa-heart text-500 me-1"></span><span class="text-900 fs--2 lh-1">{{$item->likes()->count()}}</span>
                </div>

                <div class="d-flex align-items-center">
                  <span class="fa-solid fa-comment text-500 me-1"></span><span class="text-900 fs--2 lh-1">{{$item->comments()->count()}}</span>
                </div>

              </div>
              {{-- cat --}}
              @if ( count($item->categories) > 0)
                  
              <a href="{{route('blog.category', ['category'=>$item->categories[0]->slug])}}"><span class="badge badge-phoenix badge-phoenix-primary mb-2">{{$item->categories[0]->title}}</span></a>
              @endif
              <h4 class="fw-bold mb-3 lh-sm line-clamp-2">{{$item->title}}</h4>
              <a class="btn-link px-0 d-flex align-items-center fs--1 fw-bold" href="{{route('blog.post', ['post'=>$item->slug])}}" role="button">Read more<span class="fa-solid fa-angle-right ms-2"></span></a>
            </div>
          </div>
        </div>
      @endforeach
     
    </div>
    <div class="text-center mt-6"><a class="btn btn-outline-primary" href="{{route('blog')}}">View All<span class="fa-solid fa-angle-right ms-2"></span></a></div>
  </div><!-- end of .container-->
</section><!-- <section> close ============================-->
<!-- ============================================-->




<section id="contact">
  <div class="bg-holder z-index-2" style="background-image:url(/assets/img/bg/bg-left-17.png);background-size:auto;background-position:left center;"></div>
  <!--/.bg-holder-->
  <div class="bg-holder z-index-2" style="background-image:url(/assets/img/bg/bg-right-17.png);background-size:auto;background-position:right center;"></div>
  <!--/.bg-holder-->
  <div class="position-absolute top-0 end-0 start-0"><svg class="w-100 text-white" preserveaspectratio="none" viewbox="0 0 1920 368" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M1920 0.44L0 367.74V0H1920V0.44Z" fill="currentColor"></path>
    </svg></div>
    <div class="position-absolute bottom-0 end-0 start-0"><svg class="text-white w-100" viewbox="0 0 1920 368" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 368L1920 0.730011L1920 368L0 368Z" fill="currentColor"></path>
    </svg></div>


  <div class="container-small position-relative py-1 px-lg-7 px-xxl-3" style="z-index:10">
    <div class="row">
      <div class="col-12 mb-4 text-center text-sm-start">
        <h4 class="text-primary fw-bolder mb-3">Contact</h4>
        <h2>Let's Elevate Your Customer Interactions.</h2>
      </div>
      <div class="col-md-6 text-center text-sm-start">
      </div>
    </div>


    <div class="row g-5 g-lg-5">
            <div class="col-md-6 mb-5 mb-md-0 text-center text-md-start">
              <h4 class="mb-3">Stay connected</h4>
              <p class="mb-5">Stay connected with ZIKO AI's Help Center; ZIKO AI is available for your necessities at all times.</p>
              <div class="d-flex flex-column align-items-center align-items-md-start gap-3 gap-md-0">
                
                <div class="d-md-flex align-items-center">
                  <div class="icon-wrapper shadow-info"><span class="uil uil-envelope text-primary light fs-4 z-index-1 ms-2"></span></div>
                  <div class="flex-1 ms-3"><a class="fw-semi-bold text-900" href="mailto:support@ziko.ai">support@ziko.ai</a></div>
                </div>
                <div class="mb-6 d-md-flex align-items-center">
                  <div class="icon-wrapper shadow-info"><span class="uil uil-map-marker text-primary light fs-4 z-index-1 ms-2"></span></div>
                  <div class="flex-1 ms-3"><span class="fw-semi-bold text-900">348 Station St, Lalor VIC 3075, Australia</span></div>
                </div>
                <div class="d-flex">
                  <a href="https://www.facebook.com/"><span class="fa-brands fa-facebook fs-2 text-primary me-3"></span></a>
                  <a href="https://twitter.com/"><span class="fa-brands fa-twitter fs-2 text-primary me-3"></span></a>
                  <a href="https://www.linkedin.com/"><span class="fa-brands fa-linkedin-in fs-2 text-primary"></span></a></div>
              </div>
            </div>
            <div class="col-md-6 text-center text-md-start">
              <h3 class="mb-3">Drop us a line</h3>
              <p class="mb-7">If you have any query or suggestion , we are open to learn from you, Lets talk, reach us anytime.</p>
              <form class="row g-4" method="post" action="{{ route('ticket') }}">
                @csrf
                <div class="col-12"><input class="form-control bg-white" type="text" name="name" placeholder="Name" required="required"></div>
                <div class="col-12"><input class="form-control bg-white" type="email" name="email" placeholder="Email" required="required"></div>
                <div class="col-12"><textarea class="form-control bg-white" rows="6" name="body" placeholder="Message" required="required"></textarea></div>
                <div class="col-12 d-grid"><button class="btn btn-outline-primary" type="submit">Submit</button></div>
                <div class="feedback"></div>
              </form>
            </div>
          </div>
    </div>
</section>



<!-- ============================================-->
<!-- <section> begin ============================-->
<section class="bg-white pb-0">
  <div class="container-small px-lg-7 px-xxl-3">
    <div class="row justify-content-center">
      <div class="col-12 text-center">
        <div class="card py-md-9 px-md-13 border-0 z-index-1 shadow-lg cta-card">
          <div class="bg-holder" style="background-image:url(/assets/img/bg/bg-18.png);background-position:right;background-size:auto;"></div>
          <!--/.bg-holder-->
          <div class="card-body position-relative"><img class="img-fluid mb-5 d-dark-none" src="/assets/img/spot-illustrations/27.png" width="210" alt="..."><img class="img-fluid mb-5 d-light-none" src="/assets/img/spot-illustrations/dark_27.png" width="210" alt="...">
            <div class="d-flex align-items-center fw-bold justify-content-center mb-3">
              <p class="mb-0">AI-Powered Review Responses Respond to Reviews Faster and Better </p>

            </div>
            <h1 class="fs-2 fs-sm-4 fs-lg-6 fw-bolder lh-sm mb-3">Join<span class="gradient-text-primary mx-2">ZIKO Ai</span><span>Today</span></h1>
            <form class="d-flex justify-content-center mb-3 px-xxl-12"method="post" action="{{ route('newsletter-subscriptions.store') }}">
              @csrf
              <div class="d-grid d-sm-block"></div>
              <input class="form-control me-3" name="email" id="ctaEmail1" type="email" placeholder="Email" aria-describedby="ctaEmail1">
              <button class="btn btn-primary" type="submit">Subscribe</button>
            </form>
            <p>Best support in the world, Only ZIKO AI can ensure </p>
          </div>
        </div>
      </div>
    </div>
  </div><!-- end of .container-->
</section><!-- <section> close ============================-->
<!-- ============================================-->

<div class="position-relative">
  <div class="bg-holder footer-bg" style="background-image:url(/assets/img/bg/bg-19.png);background-size:auto;"></div>
  <!--/.bg-holder-->
  <div class="bg-holder" style="background-image:url(/assets/img/bg/bg-right-20.png);background-position:right;background-size:auto;"></div>
  <!--/.bg-holder-->
  <div class="bg-holder" style="background-image:url(/assets/img/bg/bg-left-20.png);background-position:left;background-size:auto;"></div>
  <!--/.bg-holder-->
  <div class="position-relative"><svg class="w-100 text-white" preserveaspectratio="none" viewbox="0 0 1920 368" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M1920 0.44L0 367.74V0H1920V0.44Z" fill="currentColor"></path>
    </svg>

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="footer-default">
      <div class="container-small px-lg-7 px-xxl-3">
        <div class="row position-relative">
          <div class="col-12 col-sm-12 col-lg-5 mb-4 order-0 order-sm-0">
            <a href="{{route('home')}}" >
                <img class="d-dark-none" src="/assets/img/icons/logo-black.svg" alt="ZIKO AI" width="100">
                <img class="d-light-none" src="/assets/img/icons/logo-white.svg" alt="ZIKO AI" width="100">
            </a>
            <p class="text-white opacity-50 light mt-3">We revolutionize digital customer<br> interactions through smart AI, crafting <br>and posting thoughtful responses, saving <br>time for busy business owners.</p>
          </div>
          <div class="col-lg-7">
            <div class="row justify-content-between">
              <div class="col-6 col-sm-4 col-lg-3 mb-3 order-2 order-sm-1">
                <div class="border-dashed border-start border-primary-300 ps-3" style="--phoenix-border-opacity: .2;">
                  <h5 class="fw-bolder mb-2 text-light light">Help</h5>
                  <ul class="list-unstyled mb-3">
                    <li class="mb-1"><a class="text-500 hover-text-100 light" href="{{route('about')}}">About</a></li>
                    <li class="mb-1"><a class="text-500 hover-text-100 light" href="{{route('contact')}}">Contact</a></li>
                    <li class="mb-1"><a class="text-500 hover-text-100 light" href="{{route('knowledgebase')}}">Knowledgebase</a></li>
                    <li class="mb-1"><a class="text-500 hover-text-100 light" href="{{route('how_it_works')}}">How It Works</a></li>

                  </ul>
                </div>
                <div class="border-dashed border-start border-primary-300 ps-3" style="--phoenix-border-opacity: .2;">
                  <h5 class="lh-lg fw-bolder mb-2 text-light light">Follow</h5>
                  <ul class="list-unstyled mb-2">
                    <li class="mb-1"><a class="text-500 hover-text-100 light" href="https://www.facebook.com/">Facebook</a></li>
                    <li class="mb-1"><a class="text-500 hover-text-100 light" href="https://twitter.com/">Twitter</a></li>
                    <li class="mb-1"><a class="text-500 hover-text-100 light" href="https://linkedin.com/">Linkedin</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-lg-3 mb-3 order-3 order-sm-2">
                <div class="border-dashed border-start border-primary-300 ps-3" style="--phoenix-border-opacity: .2;">
                  <h5 class="lh-lg fw-bold text-light mb-2 light">Support</h5>
                  <ul class="list-unstyled mb-md-2">
                    
                    <li class="mb-1"><a class="text-500 hover-text-100 light" href="#!">Contact</a></li>
                    <li class="mb-1"><a class="text-500 hover-text-100 light" href="{{route('blog')}}">Blog</a></li>
                    <li class="mb-1"><a class="text-500 hover-text-100 light" href="#faq">FAQ</a></li>
                    <li class="mb-1"><a class="text-500 hover-text-100 light" href="{{route('plans')}}">Pricing</a></li>

                  </ul>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-lg-3 mb-3 order-3 order-sm-2">
                <div class="border-dashed border-start border-primary-300 ps-3" style="--phoenix-border-opacity: .2;">
                  <h5 class="lh-lg fw-bold text-light mb-2 light"> Terms</h5>
                  <ul class="list-unstyled mb-md-2">
                    <li class="mb-1"><a class="text-500 hover-text-100 light" href="{{route('policy')}}">Privacy</a></li>
                    <li class="mb-1"><a class="text-500 hover-text-100 light" href="{{route('terms')}}">Terms</a></li>
                    <li class="mb-1"><a class="text-500 hover-text-100 light" href="{{route('refund')}}">Refund</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->

  </div>
</div>

@endsection