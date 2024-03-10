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
                
Ziko.ai Knowledge Base: How Ziko Works</h1>


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
                  Knowledgebase
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
                
            
                <p class="wow fadeInUp mb-8 text-base text-body-color " data-wow-delay=".1s">
                    <strong>Welcome to the Ziko.ai knowledge base!</strong> Here, you'll find helpful resources and information on how to use our AI-powered platform to automate your Google Business review responses.
                </p>
                <h2 class="wow fadeInUp mb-6 text-2xl font-bold text-dark   sm:leading-[40px] sm:text-[25px]" data-wow-delay=".1s ">
                    What is Ziko.ai?
                </h2>
                <p class="wow fadeInUp mb-8 text-base text-body-color " data-wow-delay=".1s">
                    Ziko.ai is a powerful tool that uses artificial intelligence (AI) and ChatGPT technology to automate the process of responding to reviews on your Google Business Profile. This frees up your time and resources, allowing you to focus on running your business.
                </p>
                
                <h2 class="wow fadeInUp mb-6 text-2xl font-bold text-dark   sm:leading-[40px] sm:text-[30px]" data-wow-delay=".1s ">
                    How does Ziko.ai work?
                </h2>
                <p class="wow fadeInUp mb-8 text-base text-body-color " data-wow-delay=".1s">
                   <strong>Connect your Google Business Profile:</strong>  <br><br>

                    Ziko.ai securely connects to your Google Business Profile through a Google API.<br>
                    Once connected, all new reviews will be automatically sent to the Ziko.ai platform.<br><br>


                    <strong>AI-powered sentiment analysis:</strong>  <br><br>

                    Ziko.ai's advanced AI technology analyzes the sentiment of each review, identifying positive, negative, and neutral tones.<br>
                    This ensures you can tailor your responses accordingly.<br><br>

                    <strong>Personalized response templates:</strong>  <br><br>
                    Create pre-approved response templates for each sentiment category.<br>
                    Customize templates with your brand voice and key messaging to deliver personalized and consistent responses.<br><br>

                    <strong>Automated response delivery:</strong>  <br><br>
                    Ziko.ai automatically delivers personalized responses to your reviews, 24/7.<br>
                    No need to manually check for new reviews or draft responses.<br><br>

                    <strong>Review management tools:</strong>  <br><br>
                    Ziko.ai provides a comprehensive suite of tools for managing your reviews.<br>
                    Track and analyze trends, identify areas for improvement, flag critical reviews, and measure the impact of your response strategy.<br>
                </p>

                <h2 class="wow fadeInUp mb-6 text-2xl font-bold text-dark   sm:leading-[40px] sm:text-[30px]" data-wow-delay=".1s ">
                    Benefits of using Ziko.ai:
                </h2>
                <p class="wow fadeInUp mb-8 text-base text-body-color " data-wow-delay=".1s">
                    <strong>Save time and resources: </strong>Free up your time from manually responding to reviews and focus on running your business. <br><br>
                    <strong>Improve customer satisfaction: </strong>Timely and personalized responses show your customers you care about their feedback, leading to improved satisfaction and loyalty.<br><br>
                    <strong>Increase online visibility: </strong>Respond to more reviews and attract potential customers with a positive online presence.<br><br>
                    <strong>Enhanced brand reputation: </strong>Manage negative reviews effectively and build a strong brand image. <br><br>
                    <strong>Gain valuable insights: </strong>Analyze review data to identify areas for improvement and track the impact of your response strategy. <br><br>
                    <strong>Multilingual support: </strong>Respond to reviews in all languages, breaking down language barriers and reaching customers worldwide.<br><br>
                </p>
                <h2 class="wow fadeInUp mb-6 text-2xl font-bold text-dark   sm:leading-[40px] sm:text-[30px]" data-wow-delay=".1s ">
                    Getting Started with Ziko.ai:
                </h2>
                <p class="wow fadeInUp mb-8 text-base text-body-color " data-wow-delay=".1s">
                    Sign up for a free trial to test drive the platform and its features.<br><br>
                    Connect your Google Business Profile and watch your reviews come in.<br><br>
                    Create pre-approved response templates for different sentiment categories.<br><br>
                    Start receiving automated responses to your reviews. <br><br>
                    Explore the review management tools and gain valuable insights.<br><br>
                    
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