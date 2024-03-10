@extends('layouts.user')

@section('content')
{{-- navs --}}

<main class="main" id="top">


@include('components.user.left_nav')
@include('components.user.nav')
@if (!auth()->user()->settings->business_name)
            
  @include('components.user.required')

@endif
<style type="text/css"> .notify{ z-index: 1000000; margin-top: 30px; } </style>

<div class="content">
  <h2 class="mb-2 lh-sm">Getting Started</h2>
  <div class="card shadow-none border border-300 my-4" data-component-card="data-component-card">
    <div class="card-header p-4 border-bottom border-300 bg-soft">
      <div class="row g-3 justify-content-between align-items-center">
        <div class="col-12 col-md">
          <h4 class="text-900 mb-0" data-anchor="data-anchor">Welcome, {{auth()->user()->name}}</h4>
        </div>
      </div>
    </div>
    <div class="card-body p-0">

      <div class="p-4 code-to-copy">
        <p class="mb-0">Welcome to Ziko AI! Excited to have you. Dive into smarter Google review management with us. Need help? Email <a href = "mailto: support@ziko.ai">support@ziko.ai</a>. Let's boost your online presence together!</p>
      </div>
    </div>
  </div>
  <div class="card shadow-none border border-300 my-4" data-component-card="data-component-card">
    <div class="card-header p-4 border-bottom border-300 bg-soft">
      <div class="row g-3 justify-content-between align-items-center">
        <div class="col-12 col-md">
          <h4 class="text-900 mb-0" data-anchor="data-anchor">Quick start</h4>
        </div>
      </div>
    </div>
    <div class="card-body p-0">
      
      <div class="p-4 code-to-copy">
        <p>Install Ziko AI to your Chrome Browser</p>
        <pre><code class="lang-html">1. Download the <button class="download_request_btn" style="color: rgb(91, 91, 255)" ><code>Chrome extension</code></button> ZIP file.
2. Unzip the file to a designated folder.
3. Open Chrome and go to `chrome://extensions/`.
4. Enable "Developer mode" at the top right.
5. Click "Load unpacked" and select the unzipped folder.
6. Your custom extension should now be installed and visible.
        </code></pre>
      </div>
    </div>
  </div>

  <script>
    $(document).on('click', '.download_request_btn', function(){
      window.open("{{route('download')}}"); // open it in new tab, which will automatically close
      // window.location = "{{route('notifications')}}";

  });

  </script>
  
  
  <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
    <div class="toast align-items-center text-white bg-dark border-0 light" id="icon-copied-toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body p-3"></div><button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
  </div>
  <footer class="footer position-absolute">
    <div class="row g-0 justify-content-between align-items-center h-100">
      <div class="col-12 col-sm-auto text-center">
        <p class="mb-0 mt-2 mt-sm-0 text-900">© 2023-2024 Ziko AI - A brand of <a class="mx-1" href="https://onewaybakery.com.au/"> Oneway Lebanese Bakery</a></p>
      </div>
      <div class="col-12 col-sm-auto text-center">
        <p class="mb-0 text-600">v1.0</p>
      </div>
    </div>
  </footer>

</div>


</main>




@endsection