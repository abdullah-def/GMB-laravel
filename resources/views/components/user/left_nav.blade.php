<nav class="navbar navbar-vertical navbar-expand-lg">
  
@php
    $a1 = 'false';
    $a2 = 'false';
    $a3 = 'false';
    $u1 = '';
    $u2 = '';
    $u3 = '';
    if (Route::is('dashbord') or Route::is('notifications')) {
        $a1 = 'true';
        $u1 = 'show';
    } 
    if (Route::is('accounts') or Route::is('reviews') or Route::is('settings')) {
        $a2 = 'true';
        $u2 = 'show';
    } 
    if (Route::is('profile') or Route::is('profile.edit') ) {
        $a3 = 'true';
        $u3 = 'show';
    } 
    
     
 @endphp

    <script>
      var navbarStyle = window.config.config.phoenixNavbarStyle;
      if (navbarStyle && navbarStyle !== 'transparent') {
        document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
      }
    </script>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
      <!-- scrollbar removed-->
      <div class="navbar-vertical-content">
        <ul class="navbar-nav flex-column" id="navbarVerticalNav">
          <li class="nav-item">
            <!-- parent pages-->
           

            <div class="nav-item-wrapper">
              <a class="nav-link label-1 @if (Route::is('dashbord'))active @endif" href="{{route('dashbord')}}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center">
                  <span class="nav-link-icon">
                    <span data-feather="pie-chart"></span>
                  </span>
                  <span class="nav-link-text-wrapper"><span class="nav-link-text">Dashboard</span></span>
                </div>
              </a>
            </div>

            



            <div class="nav-item-wrapper">
              <a class="nav-link label-1 @if (Route::is('settings'))active @endif" href="{{route('settings')}}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center">
                  <span class="nav-link-icon">
                    <span data-feather="settings"></span>
                  </span>
                  <span class="nav-link-text-wrapper"><span class="nav-link-text">Settings</span></span>
                </div>
              </a>
            </div>

            <div class="nav-item-wrapper">
              <a class="nav-link label-1 @if (Route::is('notifications'))active @endif" href="{{route('notifications')}}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center">
                  <span class="nav-link-icon">
                    <span data-feather="life-buoy"></span>
                  </span>
                  <span class="nav-link-text-wrapper"><span class="nav-link-text">Documentation</span></span>
                </div>
              </a>
            </div>

          </li>


          
         
        </ul>
      </div>
    </div>
    <div class="navbar-vertical-footer">
        <button class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 white-space-nowrap d-flex align-items-center">
            <span class="uil uil-left-arrow-to-left fs-0"></span>
            <span class="uil uil-arrow-from-right fs-0"></span>
            <span class="navbar-vertical-footer-text ms-2">Collapsed View</span>
        </button>
    </div>
</nav>