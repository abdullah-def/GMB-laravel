@if(!Route::is('home') )



<!-- ============================================-->
      <!-- <section> begin ============================-->
        
        @if(Route::is('about') )
        <section class="bg-100 dark__bg-1100 py-9 " >
        @else
          <section class="bg-100 dark__bg-1100 py-9  mt-5" >
        @endif
          <div class="container-small">
            <div class="row justify-content-between gy-4">
              <div class="col-12 col-lg-4">
                <div class="d-flex align-items-center mb-3">
                  <a href="{{route('home')}}" >
                    <img class="d-dark-none" src="/assets/img/icons/logo-black.svg" alt="ZIKO AI" width="100">
                    <img class="d-light-none" src="/assets/img/icons/logo-white.svg" alt="ZIKO AI" width="100">
                </a>
                </div>
                <p class="text-700 mb-1 fw-semi-bold lh-sm fs--1">We revolutionize digital customer interactions through smart AI, crafting and posting thoughtful responses, saving time for busy business owners.</p>
              </div>
              <div class="col-6 col-md-auto">
                <h5 class="fw-bolder mb-3">Help</h5>
                <div class="d-flex flex-column">
                  <a class="text-700 fw-semi-bold fs--1 mb-1" href="{{route('about')}}">About</a>
                  <a class="text-700 fw-semi-bold fs--1 mb-1" href="{{route('contact')}}">Contact</a>
                  <a class="text-700 fw-semi-bold fs--1 mb-1" href="{{route('knowledgebase')}}">Knowledgebase</a>
                  <a class="text-700 fw-semi-bold fs--1 mb-1" href="{{route('how_it_works')}}">How It Works</a></div>
              </div>
              <div class="col-6 col-md-auto">
                <h5 class="fw-bolder mb-3">Stay Connected</h5>
                <div class="d-flex flex-column">
                  <a class="text-700 fw-semi-bold fs--1 mb-1" href="{{route('blog')}}">Blogs</a>
                  <a class="mb-1 fw-semi-bold fs--1 d-flex" href="https://www.facebook.com/">
                    <span class="fab fa-facebook-square text-primary me-2 fs-0"></span><span class="text-800">Facebook</span>
                  </a>
                  <a class="mb-1 fw-semi-bold fs--1 d-flex"  href="https://twitter.com/"><span class="fab fa-twitter-square text-info me-2 fs-0"></span><span class="text-800">Twitter</span></a>
                </div>
              </div>
              <div class="col-6 col-md-auto">
                <h5 class="fw-bolder mb-3">Support</h5>
                <div class="d-flex flex-column">
                  <a class="text-700 fw-semi-bold fs--1 mb-1" href="#!">Contact</a>
                  <a class="text-700 fw-semi-bold fs--1 mb-1" href="{{route('plans')}}">Pricing</a>

                </div>
              </div>
              <div class="col-6 col-md-auto">
                <h5 class="fw-bolder mb-3">Terms</h5>
                <div class="d-flex flex-column">
                  <a class="text-700 fw-semi-bold fs--1 mb-1" href="{{route('policy')}}">Privacy</a>
                  <a class="text-700 fw-semi-bold fs--1 mb-1" href="{{route('terms')}}">Terms</a>
                  <a class="text-700 fw-semi-bold fs--1 mb-1" href="{{route('refund')}}">Refund</a>

                </div>
              </div>
            </div>
          </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->




<footer class="footer position-relative" style="text-align: center;">
  <div class="row g-0 justify-content-between align-items-center h-100">
    
      <span class="mb-0 mt-2 mt-sm-0 text-900">© 2023-2024 Ziko AI - A brand of Oneway Lebanese Bakery <a class="mx-1" href="https://onewaybakery.com.au/"> Oneway Lebanese Bakery</a></span>
 
    
  </div>
</footer>


@endif