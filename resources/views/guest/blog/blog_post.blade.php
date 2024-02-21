@extends('layouts.guest')

@section('meta')
<meta name="description" content="{{$post->meta_description}}">
<meta name="keywords" content="{{$post->keywors}}">
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
                {{ $post->title }}</h1>
            
            <ul class="flex items-center justify-center gap-[10px]">
              <li>
                <a  href="{{route('blog')}}"
                  class="flex items-center gap-[10px] text-base font-medium text-dark ">
                  Blog
                </a>
              </li>
              <li>
                <a href="" class="flex items-center gap-[10px] text-base font-medium text-body-color">
                  <span class="text-body-color "> / </span>
                  Blog Article
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</div>
<style>
    figcaption {
        display: none;
    }
</style>
<section class="pt-10 pb-10 lg:pt-[10px] lg:pb-20 ">
    <div class="container">
        <div class="-mx-4 flex flex-wrap justify-center">
          <div class="w-full px-4">
            <div class="wow fadeInUp relative z-20 mb-[50px] h-[300px] overflow-hidden rounded-[5px] md:h-[400px] lg:h-[500px]" data-wow-delay=".1s ">
                
                    <img src="{{$post->getThumbnailUrl()}}" alt="image"
                    class="h-full w-full object-cover object-center" />
                
                <div class="absolute top-0 left-0 z-10 flex h-full w-full items-end bg-gradient-to-t from-dark-700 to-transparent">
                    <div class="flex flex-wrap items-center p-4 pb-4 sm:px-8"> 
                        <div class="mb-4 flex items-center">
                        <p class="mr-5 flex items-center text-sm font-medium text-white md:mr-6">
                            <span class="mr-3">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                <path
                                d="M13.9998 2.6499H12.6998V2.0999C12.6998 1.7999 12.4498 1.5249 12.1248 1.5249C11.7998 1.5249 11.5498 1.7749 11.5498 2.0999V2.6499H4.4248V2.0999C4.4248 1.7999 4.1748 1.5249 3.8498 1.5249C3.5248 1.5249 3.2748 1.7749 3.2748 2.0999V2.6499H1.9998C1.1498 2.6499 0.424805 3.3499 0.424805 4.2249V12.9249C0.424805 13.7749 1.1248 14.4999 1.9998 14.4999H13.9998C14.8498 14.4999 15.5748 13.7999 15.5748 12.9249V4.1999C15.5748 3.3499 14.8498 2.6499 13.9998 2.6499ZM1.5748 7.2999H3.6998V9.7749H1.5748V7.2999ZM4.8248 7.2999H7.4498V9.7749H4.8248V7.2999ZM7.4498 10.8999V13.3499H4.8248V10.8999H7.4498V10.8999ZM8.5748 10.8999H11.1998V13.3499H8.5748V10.8999ZM8.5748 9.7749V7.2999H11.1998V9.7749H8.5748ZM12.2998 7.2999H14.4248V9.7749H12.2998V7.2999ZM1.9998 3.7749H3.2998V4.2999C3.2998 4.5999 3.5498 4.8749 3.8748 4.8749C4.1998 4.8749 4.4498 4.6249 4.4498 4.2999V3.7749H11.5998V4.2999C11.5998 4.5999 11.8498 4.8749 12.1748 4.8749C12.4998 4.8749 12.7498 4.6249 12.7498 4.2999V3.7749H13.9998C14.2498 3.7749 14.4498 3.9749 14.4498 4.2249V6.1749H1.5748V4.2249C1.5748 3.9749 1.7498 3.7749 1.9998 3.7749ZM1.5748 12.8999V10.8749H3.6998V13.3249H1.9998C1.7498 13.3499 1.5748 13.1499 1.5748 12.8999ZM13.9998 13.3499H12.2998V10.8999H14.4248V12.9249C14.4498 13.1499 14.2498 13.3499 13.9998 13.3499Z"
                                />
                            </svg>
                            </span>
                            {{$post->getReadingTime()}} min read . {{date('d-m-Y', strtotime($post->published_at));}}
                        </p>
        
                        
                        </div>

                    </div>
                </div>
            </div>





            <div class="wow fadeInUp -mx-4 flex flex-wrap">
                <div class="w-full px-4 lg:w-8/12">
                    <div class="wow fadeInUp introduction">
                        {{$post->introduction}}

                    </div>

                    <div class="wow fadeInUp content">{!! $post->body !!}</div>

                    <div style=" padding-top: 30px; ">
                       

                        <!-- call to action -->
                        
                        <section class="wow fadeInUp relative mb-12 overflow-hidden rounded-[5px] bg-primary py-[60px] px-11 text-center lg:px-8">
                            <div class="container">
                                <div class="-mx-4 flex flex-wrap items-center">
                                    <div class="w-full px-4 lg:w-1/2">
                                        <div class="text-center lg:text-left ">
                                            <div class="mb-10 lg:mb-0 ">
                                                <h1
                                                    class="mt-0 mb-3 text-3xl font-bold leading-tight sm:text-4xl sm:leading-tight md:text-[40px] md:leading-tight text-white ">
                                                    What Are You Looking For?</h1>
                                                <p
                                                    class="w-full text-base font-medium leading-relaxed sm:text-lg sm:leading-relaxed text-white">
                                                    Effortless Excellence for Google Review Responses At Ziko.ai, we understand the challenges of enhancing customer interactions through Google reviews.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full px-4 lg:w-1/2">
                                        <div class="text-center lg:text-right"><a
                                            class="inline-flex items-center justify-center rounded-md bg-white py-[14px] px-7 text-center text-base font-medium text-dark shadow-1 transition duration-300 ease-in-out hover:text-body-color hover:bg-gray-2"
                                                href="{{route('plans')}}">Start using Ziko</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div>
                                <span class="absolute top-0 right-0">
                                    <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="1.39737" cy="44.6026" r="1.39737" transform="rotate(-90 1.39737 44.6026)" fill="white" fill-opacity="0.44"></circle><circle cx="1.39737" cy="7.9913" r="1.39737" transform="rotate(-90 1.39737 7.9913)" fill="white" fill-opacity="0.44"></circle><circle cx="13.6943" cy="44.6026" r="1.39737" transform="rotate(-90 13.6943 44.6026)" fill="white" fill-opacity="0.44"></circle><circle cx="13.6943" cy="7.9913" r="1.39737" transform="rotate(-90 13.6943 7.9913)" fill="white" fill-opacity="0.44"></circle><circle cx="25.9911" cy="44.6026" r="1.39737" transform="rotate(-90 25.9911 44.6026)" fill="white" fill-opacity="0.44"></circle><circle cx="25.9911" cy="7.9913" r="1.39737" transform="rotate(-90 25.9911 7.9913)" fill="white" fill-opacity="0.44"></circle><circle cx="38.288" cy="44.6026" r="1.39737" transform="rotate(-90 38.288 44.6026)" fill="white" fill-opacity="0.44"></circle><circle cx="38.288" cy="7.9913" r="1.39737" transform="rotate(-90 38.288 7.9913)" fill="white" fill-opacity="0.44"></circle><circle cx="1.39737" cy="32.3058" r="1.39737" transform="rotate(-90 1.39737 32.3058)" fill="white" fill-opacity="0.44"></circle><circle cx="13.6943" cy="32.3058" r="1.39737" transform="rotate(-90 13.6943 32.3058)" fill="white" fill-opacity="0.44"></circle><circle cx="25.9911" cy="32.3058" r="1.39737" transform="rotate(-90 25.9911 32.3058)" fill="white" fill-opacity="0.44"></circle><circle cx="38.288" cy="32.3058" r="1.39737" transform="rotate(-90 38.288 32.3058)" fill="white" fill-opacity="0.44"></circle><circle cx="1.39737" cy="20.0086" r="1.39737" transform="rotate(-90 1.39737 20.0086)" fill="white" fill-opacity="0.44"></circle><circle cx="13.6943" cy="20.0086" r="1.39737" transform="rotate(-90 13.6943 20.0086)" fill="white" fill-opacity="0.44"></circle><circle cx="25.9911" cy="20.0086" r="1.39737" transform="rotate(-90 25.9911 20.0086)" fill="white" fill-opacity="0.44"></circle><circle cx="38.288" cy="20.0086" r="1.39737" transform="rotate(-90 38.288 20.0086)" fill="white" fill-opacity="0.44"></circle></svg></span><span class="absolute bottom-0 left-0"><svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="1.39737" cy="44.6026" r="1.39737" transform="rotate(-90 1.39737 44.6026)" fill="white" fill-opacity="0.44"></circle><circle cx="1.39737" cy="7.9913" r="1.39737" transform="rotate(-90 1.39737 7.9913)" fill="white" fill-opacity="0.44"></circle><circle cx="13.6943" cy="44.6026" r="1.39737" transform="rotate(-90 13.6943 44.6026)" fill="white" fill-opacity="0.44"></circle><circle cx="13.6943" cy="7.9913" r="1.39737" transform="rotate(-90 13.6943 7.9913)" fill="white" fill-opacity="0.44"></circle><circle cx="25.9911" cy="44.6026" r="1.39737" transform="rotate(-90 25.9911 44.6026)" fill="white" fill-opacity="0.44"></circle><circle cx="25.9911" cy="7.9913" r="1.39737" transform="rotate(-90 25.9911 7.9913)" fill="white" fill-opacity="0.44"></circle><circle cx="38.288" cy="44.6026" r="1.39737" transform="rotate(-90 38.288 44.6026)" fill="white" fill-opacity="0.44"></circle><circle cx="38.288" cy="7.9913" r="1.39737" transform="rotate(-90 38.288 7.9913)" fill="white" fill-opacity="0.44"></circle><circle cx="1.39737" cy="32.3058" r="1.39737" transform="rotate(-90 1.39737 32.3058)" fill="white" fill-opacity="0.44"></circle><circle cx="13.6943" cy="32.3058" r="1.39737" transform="rotate(-90 13.6943 32.3058)" fill="white" fill-opacity="0.44"></circle><circle cx="25.9911" cy="32.3058" r="1.39737" transform="rotate(-90 25.9911 32.3058)" fill="white" fill-opacity="0.44"></circle><circle cx="38.288" cy="32.3058" r="1.39737" transform="rotate(-90 38.288 32.3058)" fill="white" fill-opacity="0.44"></circle><circle cx="1.39737" cy="20.0086" r="1.39737" transform="rotate(-90 1.39737 20.0086)" fill="white" fill-opacity="0.44"></circle><circle cx="13.6943" cy="20.0086" r="1.39737" transform="rotate(-90 13.6943 20.0086)" fill="white" fill-opacity="0.44"></circle><circle cx="25.9911" cy="20.0086" r="1.39737" transform="rotate(-90 25.9911 20.0086)" fill="white" fill-opacity="0.44"></circle><circle cx="38.288" cy="20.0086" r="1.39737" transform="rotate(-90 38.288 20.0086)" fill="white" fill-opacity="0.44"></circle></svg>
                                </span>
                            </div>
                        </section>
        
                        
                        <!-- tags -->

                        <div class="-mx-4 mb-12 flex flex-wrap items-center">
                            <div class="w-full px-4 md:w-1/2">
                                <div class="wow fadeInUp mb-8 flex flex-wrap items-center gap-3 md:mb-0" data-wow-delay=".1s">
                                    @foreach ($post->tags as $tag)

                                    <a href="{{route('blog.tag', ['tag'=>$tag->slug])}}"
                                        class="block rounded-md bg-primary/[0.08] py-[5px] px-[14px] text-base text-dark  hover:bg-primary hover:text-white">
                                        {{$tag->title}}
                                    </a>
                                    @endforeach

                                    @if ( count($post->categories) > 0)
                                        <a href="{{route('blog.category', ['category'=>$post->categories[0]->slug])}}"
                                            class="block rounded-md bg-primary/[0.08] py-[5px] px-[14px] text-base text-dark  hover:bg-primary hover:text-white">
                                            {{$post->categories[0]->title}}
                                        </a>

                                    @endif
                                    
                                                
                                                
                                            
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    
                </div>
                
                
                <div class="w-full px-4 lg:w-4/12">
                    <div>
                        
                        <div class="-mx-4 mb-8 flex flex-wrap">
                            <div class="w-full px-4">
                                <h2 class="wow fadeInUp relative pb-5 text-2xl font-semibold text-dark   sm:text-[28px]"
                                data-wow-delay=".1s
                                    ">
                                Latest Articles
                                </h2>
                                <span class="mb-10 inline-block h-[2px] w-20 bg-primary"></span>
                            </div>

                            @foreach ($posts as $item)
                                
                                <div class="w-full px-4 md:w-1/2 lg:w-full">
                                    <div class="wow fadeInUp mb-5 flex w-full items-center border-b border-stroke pb-5"
                                    data-wow-delay=".1s
                                        ">
                                        <div class="mr-5  w-full max-w-[80px] overflow-hidden ">
                                            <img src="{{$item->getThumbnailUrl()}}" alt="image" class="w-full" />
                                        </div>
                                        <div class="w-full">
                                            <h4>
                                            <a href="{{route('blog.post', ['post'=>$item->slug])}}"
                                            class="mb-1 inline-block text-lg font-medium leading-snug text-dark  hover:text-primary  lg:text-base xl:text-lg">

                                                
    
                                            {{$item->title}}
                                            </a>
                                            </h4>
                                            <p class="text-sm text-body-color">{{$post->getReadingTime()}} min read . {{date('d-m-Y', strtotime($post->published_at));}}</p>
                                        </div>
                                    </div>
                                    
                                </div>

                            @endforeach
            
                            
                            
                           
                        </div>
                </div>
            </div>


        </div>
      </div>

      
        
           
        
     
    </div>
</section>







@include('components.guest.footer')
@endsection