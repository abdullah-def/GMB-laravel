@extends('layouts.user')

@section('content')
{{-- navs --}}

<main class="main" id="top">


@include('components.user.left_nav')
@include('components.user.nav')


<div class="content">
  <h2 class="mb-2 lh-sm">Getting Started</h2>
  <div class="card shadow-none border border-300 my-4" data-component-card="data-component-card">
    <div class="card-header p-4 border-bottom border-300 bg-soft">
      <div class="row g-3 justify-content-between align-items-center">
        <div class="col-12 col-md">
          <h4 class="text-900 mb-0" data-anchor="data-anchor">Quick start</h4>
        </div>
      </div>
    </div>
    <div class="card-body p-0">
      <div class="collapse code-collapse" id="quick-start-code"><pre class="scrollbar" style="max-height:420px"><code class="language-html">&lt;p class=&quot;mb-0&quot;&gt;Looking to start your project quickly? Just unzip the &lt;code&gt;Phoenix-v1.13.0.zip&lt;/code&gt;. We have precompiled and packaged everything in the &lt;code&gt;public&lt;/code&gt; directory for you. Start editing the &lt;code&gt;public/pages/starter.html&lt;/code&gt; with a text or code editor, save it, and open the file in your favourite browser to see the changes.&lt;/p&gt;</code></pre>
      </div>
      <div class="p-4 code-to-copy">
        <p class="mb-0">Looking to start quickly? Just download the <a href=""><code>chrome extension</code></a>. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi commodi, maxime architecto ipsa id dolor consectetur iure necessitatibus neque in esse illo, ea optio soluta autem, voluptatem repellendus! Quidem, magni.</p>
      </div>
    </div>
  </div>
  <div class="card shadow-none border border-300 my-4" data-component-card="data-component-card">
    <div class="card-header p-4 border-bottom border-300 bg-soft">
      <div class="row g-3 justify-content-between align-items-center">
        <div class="col-12 col-md">
          <h4 class="text-900 mb-0" data-anchor="data-anchor">Setting up Build system</h4>
        </div>
      </div>
    </div>
    <div class="card-body p-0">
      
      <div class="p-4 code-to-copy">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus voluptate earum voluptatibus odio. Nulla neque optio eius obcaecati nam dolorem voluptatum, doloremque dolores. Neque ut sed deleniti iste asperiores culpa.</p>
        <pre><code class="lang-html">npm i  -g </code></pre>
        <p class="mt-4">When you’re done, install the rest of the plugin dependencies with:</p><pre><code class="lang-html">npm i </code></pre>
        <p class="mt-4">Now run:</p><pre><code class="lang-html">gulp </code></pre>
        <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea consectetur quaerat iste laudantium totam deleniti fugiat facilis atque perspiciatis, voluptatum architecto qui dolorem debitis, officiis ipsam laboriosam eius, commodi explicabo.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam alias minus, facere quisquam expedita quos autem explicabo porro culpa odit officia sint veritatis, dolorum repellat adipisci velit quis! Fugit, sequi?</p>
        <pre><code class="lang-html">public/assets/fonts/
public/assets/video/
public/assets/img/
public/vendors
src/pug/
src/scss/ 
src/js/
</code></pre>
        <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui veniam corrupti commodi maiores molestias, veritatis magni debitis maxime totam necessitatibus? Quisquam dolores voluptatem expedita aut necessitatibus incidunt iure itaque architecto!</p>
        <div class="alert alert-soft-warning">Running the <code>gulp</code> command will discard and regenerate all the files in following directories:</div><pre><code class="lang-html">public/**/*.html
public/assets/css/
public/assets/js/
public/vendors
</code></pre>
        <p class="mt-4">Hit <code>Ctrl+C</code> or just close the command line window to stop the server.</p>
        <p>Happy editing!</p>
      </div>
    </div>
  </div>
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