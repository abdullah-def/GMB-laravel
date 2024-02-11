@extends('layouts.guest')

@section('content')

<!-- <section> begin ============================-->
    <section class="" >
        <div class="container-small px-lg-7 px-xxl-3">
          <div class="row">
            <div class="col-12 mb-4 text-center text-sm-start">
              <h4 class="text-primary fw-bolder mb-3">Blog</h4>
              <h1>{{$posts[0]->categories[0]->title}}</h1>
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
                    {{-- cat --}}
                    @if ( count($item->categories) > 0)
                        
                    <span class="badge badge-phoenix badge-phoenix-primary mb-2">{{$item->categories[0]->title}}</span>
                    @endif
                    <h4 class="fw-bold mb-3 lh-sm line-clamp-2">{{$item->title}}</h4>
                    <a class="btn-link px-0 d-flex align-items-center fs--1 fw-bold" href="{{route('blog.post', ['post'=>$item->slug])}}" role="button">Read more<span class="fa-solid fa-angle-right ms-2"></span></a>
                  </div>
                </div>
              </div>
            @endforeach
           
          </div>
          <style>
            .disabled  span{
                background-color: transparent !important;
            }
          </style>
          <div class="text-center mt-6">{{ $posts->links() }}</div>
          
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

@endsection