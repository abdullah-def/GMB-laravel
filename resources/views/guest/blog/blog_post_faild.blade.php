@extends('layouts.guest')

@section('meta')
<meta property="og:title" content="{{$post->title}}"/>
<meta property="og:image" content="{{$post->image}}"/>
<meta property="og:url" content="{{Request::url()}}"/>
<meta property="og:description" content="{{$post->meta_description}}"/>
<meta property="og:site_name" content="ZIKO AI"/>
<meta name="keywords" content="{{$post->keywors}}"/>
<meta name="keywords" content="{{$post->keywors}}"/>
<meta name="description" content="{{$post->meta_description}}">
@endsection


@section('content')

<section class="pt-10"  class="bg-white " >
    
    <div class="container-small px-lg-7 px-xxl-3">
      <div class=" mb-5 mb-8">


        <h1 class="mb-7">{{$post->title}}</h1>


        <div class="card-body">
            <div class="border-dashed border-300 pb-4">
                <div class="row align-items-center g-3 g-sm-5 " style="flex-wrap: nowrap;">
                    <div class="col-12 col-sm-auto" style=" width: fit-content;">
                        <div class="avatar avatar-xl ">
                            <img class="rounded-circle " src="/assets/img/team/30.webp" alt="" />
                        </div>
                    </div>
                    <div style=" width: fit-content;">
                        <span class="fw-bold mb-0 text-black">{{$post->author->name}}</span>
                        <p class="fs--2 mb-0 text-600 fw-semi-bold">{{$post->getReadingTime()}} min read . {{date('d-m-Y', strtotime($post->published_at));}}</p>
                    </div>
                    
                </div>

            </div>
        </div>

        <div class="d-flex align-items-cente border-bottom border-top pb-2 pt-2" style="justify-content: space-between;">
            
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center me-3">
                    <span class="fa-solid fa-eye text-500 me-1"></span><span class="text-900 fs--2 lh-1">{{$post->views()}}</span>
                </div>

                <livewire:like-button :key="'like-' . $post->id" :$post />

                <div class="d-flex align-items-center">
                    <span class="fa-solid fa-comment text-500 me-1"></span><span class="text-900 fs--2 lh-1">{{$post->comments()->count()}}</span>
                </div>
            </div>


            <div class="social-links-details pe-2">
                <a href="https://www.facebook.com/share.php?u={{Request::url()}}" target="_blank" class="ms-1"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/share?text={{$post->title}}&url={{Request::url()}}" target="_blank" class="ms-1"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{Request::url()}}" target="_blank" class="ms-1"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>

        <div class="text-center mt-4 mb-4"> <img class="w-100 w-sm-75 " src="{{$post->image}}" alt=""></div>

        <div class="mt-4 mb-4">
            {{$post->body}}
        </div>

       

        @foreach ($post->tags as $tag)

                <a href="{{route('blog.tag', ['tag'=>$tag->slug])}}"><button class="btn btn-phoenix-secondary rounded-pill me-1 mb-1" type="button">{{$tag->title}}</button></a>
        @endforeach


        @if ( count($post->categories) > 0)
                <a href="{{route('blog.category', ['category'=>$post->categories[0]->slug])}}"><button class="btn btn-phoenix-secondary rounded-pill me-1 mb-1" type="button">{{$post->categories[0]->title}}</button></a>
        @endif


        <div class="d-flex align-items-cente border-bottom border-top pb-2 pt-2 mt-4 mb-4" style="justify-content: space-between;">
            
            <div class="d-flex align-items-center">
                <div class="d-flex align-items-center me-3">
                    <span class="fa-solid fa-eye text-500 me-1"></span><span class="text-900 fs--2 lh-1">{{$post->views()}}</span>
                </div>

                <livewire:like-button :key="'like-' . $post->id" :$post />

                <div class="d-flex align-items-center">
                    <span class="fa-solid fa-comment text-500 me-1"></span><span class="text-900 fs--2 lh-1">{{$post->comments()->count()}}</span>
                </div>
            </div>


            <div class="social-links-details pe-2">
                <a href="https://www.facebook.com/share.php?u={{Request::url()}}" target="_blank" class="ms-1"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/share?text={{$post->title}}&url={{Request::url()}}" target="_blank" class="ms-1"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{Request::url()}}" target="_blank" class="ms-1"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>

        

      </div>
    </div>


    
    
</section>

<section  >

 

    <div class="container-small px-lg-7 px-xxl-3 mb-7">
        <div class="row">
            <div class="col-12 mb-4 text-center text-sm-start">
              <h4 class="text-primary fw-bolder mb-3">Comment</h4>
              <h2>Responses</h2>
            </div>
           
           
        </div>

        <div class="row h-100 g-3 ">
                <livewire:post-comments :key="'comments' . $post->id" :$post />

        </div>
    </div>

    <div class="container-small px-lg-7 px-xxl-3 mt-7">
      <div class="row">
        <div class="col-12 mb-4 text-center text-sm-start">
          <h4 class="text-primary fw-bolder mb-3">Blog</h4>
          <h2>Latest articles</h2>
        </div>
        <div class="col-lg-6 text-center text-sm-start">
          <p>Stay ahead with fresh and informative content tailored to elevate your business's customer interactions.</p>
        </div>
       
      </div>

      <div class="row h-100 g-3 ">


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


      
    </div>
    <!-- end of .container-->
</section>
<!-- <section> close ============================-->
  <!-- ============================================-->


@endsection