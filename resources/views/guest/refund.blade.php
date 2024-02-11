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
            Refund Policy</h1>


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
                Refund Policy
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ====== Banner Section End -->

<!-- ====== Blog Details Section Start -->
<section class="bg-[#F4F7FF] py-14 lg:py-20 ">
  <div class="container">
    <div class="-mx-4 flex flex-wrap">
      <div class="w-full px-4">
        
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4">
            <div>
              <h2 class="wow fadeInUp mb-6 text-2xl font-bold text-dark   sm:leading-[40px] sm:text-[28px]" data-wow-delay=".1s ">
                1. Introduction
              </h2>
              <p class="wow fadeInUp mb-6 text-base text-body-color " data-wow-delay=".1s">
                At Ziko.ai, we want you to be happy with your experience using our services. However, we understand that sometimes things don't work out as planned. This Refund Policy outlines the circumstances under which we may offer refunds for our services.
              </p>
              

              <h2 class="wow fadeInUp mb-6 text-2xl font-bold text-dark   sm:leading-[40px] sm:text-[28px]" data-wow-delay=".1s ">
                2. Refundable Purchases
              </h2>
              <p class="wow fadeInUp mb-6 text-base text-body-color " data-wow-delay=".1s">
                We offer refunds for the following purchases:
              </p>
              <p class="wow fadeInUp mb-8 text-base text-body-color " data-wow-delay=".1s">
                - Monthly and annual subscriptions canceled within 14 days of the initial purchase date.<br>
                - Recurring monthly subscriptions canceled before the next billing cycle begins.<br>
                - Pre-paid subscriptions for unused time remaining on the subscription term.<br>
              </p>

              <h2 class="wow fadeInUp mb-6 text-2xl font-bold text-dark   sm:leading-[40px] sm:text-[28px]" data-wow-delay=".1s ">
                3. Non-Refundable Purchases
              </h2>
              <p class="wow fadeInUp mb-6 text-base text-body-color " data-wow-delay=".1s">
                We do not offer refunds for the following purchases:
              </p>
              <p class="wow fadeInUp mb-8 text-base text-body-color " data-wow-delay=".1s">
                - Custom-developed features or services.<br>
                - Charges incurred due to exceeding usage limits.<br>
                - Overdue invoices.<br>
                
              </p>



              <h2 class="wow fadeInUp mb-6 text-2xl font-bold text-dark   sm:leading-[40px] sm:text-[28px]" data-wow-delay=".1s ">
                4. Refund Requests
              </h2>
              <p class="wow fadeInUp mb-6 text-base text-body-color " data-wow-delay=".1s">
                To request a refund, please contact us at support@ziko.ai within 30 days of the purchase date. Please include your name, email address, order number, and the reason for your request.
              </p>
             

              <h2 class="wow fadeInUp mb-6 text-2xl font-bold text-dark   sm:leading-[40px] sm:text-[28px]" data-wow-delay=".1s ">
                5. Refund Processing
              </h2>
              <p class="wow fadeInUp mb-6 text-base text-body-color " data-wow-delay=".1s">
                We will process your refund request within 5 business days. Refunds will be issued to the original payment method used for the purchase.
              </p>


              <h2 class="wow fadeInUp mb-6 text-2xl font-bold text-dark   sm:leading-[40px] sm:text-[28px]" data-wow-delay=".1s ">
                6. Prorated Refunds
              </h2>
              <p class="wow fadeInUp mb-6 text-base text-body-color " data-wow-delay=".1s">
                For subscriptions canceled mid-way through the billing cycle, we will issue a prorated refund based on the unused portion of the subscription term.
              </p>


              <h2 class="wow fadeInUp mb-6 text-2xl font-bold text-dark   sm:leading-[40px] sm:text-[28px]" data-wow-delay=".1s ">
                7. Exceptions
              </h2>
              <p class="wow fadeInUp mb-6 text-base text-body-color " data-wow-delay=".1s">
                We reserve the right to refuse or limit refunds at our sole discretion. This may include cases where we believe that the request is fraudulent or abusive.
              </p>

              <h2 class="wow fadeInUp mb-6 text-2xl font-bold text-dark   sm:leading-[40px] sm:text-[28px]" data-wow-delay=".1s ">
                8. Changes to Refund Policy
              </h2>
              <p class="wow fadeInUp mb-6 text-base text-body-color " data-wow-delay=".1s">
                We may update our Refund Policy at any time. We will notify you of any changes by posting the new Refund Policy on our website. You are advised to review this Refund Policy regularly for any changes.
              </p>


              <h2 class="wow fadeInUp mb-6 text-2xl font-bold text-dark   sm:leading-[40px] sm:text-[28px]" data-wow-delay=".1s ">
                9. Contact Us
              </h2>
              <p class="wow fadeInUp mb-6 text-base text-body-color " data-wow-delay=".1s">
                If you have any questions about this Refund Policy, please contact us at:
                <br>
                support@ziko.ai
              </p>

              <h2 class="wow fadeInUp mb-6 text-2xl font-bold text-dark   sm:leading-[40px] sm:text-[28px]" data-wow-delay=".1s ">
                10. Effective Date
              </h2>
              <p class="wow fadeInUp mb-6 text-base text-body-color " data-wow-delay=".1s">
                This Refund Policy is effective as of December 8, 2023.
              </p>
              

              <p class="wow fadeInUp mb-8 text-base text-body-color " data-wow-delay=".1s">
                <strong>Please note that this is a sample Refund Policy and may not be suitable for your specific needs.</strong> You should consult with a lawyer to ensure that your Refund Policy complies with all applicable laws and regulations.


                <br>
              </p>
              
            </div>
          </div>
         
        </div>
      </div>
    </div>

   
  </div>
</section>
<!-- ====== Blog Details Section End -->




@include('components.guest.footer')
@endsection