<nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault">
    <div class="collapse navbar-collapse justify-content-between">

      <div class="navbar-logo">
        <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        <a class="navbar-brand me-1 me-sm-3" href="{{route('dashbord')}}">
          <div class="d-flex align-items-center">
            <div class="d-flex align-items-center">
                <img class="d-dark-none" src="/assets/img/icons/logo-black.svg" alt="ZIKO AI" width="100">
                <img class="d-light-none" src="/assets/img/icons/logo-white.svg" alt="ZIKO AI" width="100">
            </div>
          </div>
        </a>
      </div>

      {{-- search --}}
      {{-- @include('components.user.search') --}}

      <ul class="navbar-nav navbar-nav-icons flex-row">

        <li class="nav-item">
          <div class="theme-control-toggle  px-2"><input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle"><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="moon"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
        </li>
        <style>
          .number{
            height: 18px;
            width: 18px;
            background-color: #d63031;
            border-radius: 12px;
            color: white;
            text-align: center;
            position: absolute;
            top: 15px;
            left: 17px;
            border-style: solid;
            padding-bottom: 20px;
          }

          .number:empty {
            display: none;
          }
        </style>
        {{-- notifcation --}}
        <li class="nav-item dropdown">
            <a class="nav-link" href="#" style="min-width: 2.5rem" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside">
              @if (count(auth()->user()->unreadNotifications) > 0)
              <div class = "number" id="number">{{count(auth()->user()->unreadNotifications)}}</div> 
              @endif
              <span data-feather="bell" style="height:20px;width:20px;"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
              <div class="card position-relative border-0">
                  <!-- make all as read -->
                <div class="card-header p-2">
                  <div class="d-flex justify-content-between">
        
                    <h5 class="text-black mb-0">Notificatons</h5>
                    <form class="mt-3" id="form-data">
                    <button class="btn btn-link p-0 fs--1 fw-normal submit-form">Mark all as read</button>
                    </form>
        
                </div>
                </div>
                <!-- notifcation list -->
                <div class="card-body p-0">
                  <div class="scrollbar-overlay" style="height: 27rem;">
                    <div class="border-300">
        
                        @if (count(auth()->user()->notifications) > 0)
                        @php
                            $x = 0;
                        @endphp

                        @foreach (auth()->user()->notifications as $notification)
                        @php
                         $readit = 'unread';
                        if($notification->read_at){
                            $readit = 'read';
                        }
                        $x += 1;
                        if($x > 20){
                            break;
                        }
                            
                        @endphp
            
                        <div class="px-2 px-sm-3 py-3 border-300 notification-card position-relative {{$readit}} border-bottom" id="notification-nv">
                            <div class="d-flex align-items-center justify-content-between position-relative">
                                <div class="d-flex">
                                
                                <div class="flex-1 me-sm-3">
                                    <h4 class="fs--1 text-black">You have a new {{$notification->data['stars']}} star review </h4>
                                    <p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal">
                                        <!-- <span class='me-1 fs--2'>💬</span>Mentioned you in a comment.<span class="ms-2 text-400 fw-bold fs--2">10m</span> -->
                                        <td class="align-middle rating white-space-nowrap fs--2">
                                          @if ($notification->data['stars'] == 1)
                                          <span class="fa fa-star text-warning"></span>
                                          <span class="fa-regular fa-star text-warning-300"></span>
                                          <span class="fa-regular fa-star text-warning-300"></span>
                                          <span class="fa-regular fa-star text-warning-300"></span>
                                          <span class="fa-regular fa-star text-warning-300"></span>
                                          
                                          @elseif($notification->data['stars'] == 2)
                                          <span class="fa fa-star text-warning"></span>
                                          <span class="fa fa-star text-warning"></span>
                                          <span class="fa-regular fa-star text-warning-300"></span>
                                          <span class="fa-regular fa-star text-warning-300"></span>
                                          <span class="fa-regular fa-star text-warning-300"></span>
                        
                                          @elseif($notification->data['stars'] == 3)
                                          <span class="fa fa-star text-warning"></span>
                                          <span class="fa fa-star text-warning"></span>
                                          <span class="fa fa-star text-warning"></span>
                                          <span class="fa-regular fa-star text-warning-300"></span>
                                          <span class="fa-regular fa-star text-warning-300"></span>
                        
                                          @elseif($notification->data['stars'] == 4)
                                          <span class="fa fa-star text-warning"></span>
                                          <span class="fa fa-star text-warning"></span>
                                          <span class="fa fa-star text-warning"></span>
                                          <span class="fa fa-star text-warning"></span>
                                          <span class="fa-regular fa-star text-warning-300"></span>
                        
                                          @elseif($notification->data['stars'] == 5)
                                          <span class="fa fa-star text-warning"></span>
                                          <span class="fa fa-star text-warning"></span>
                                          <span class="fa fa-star text-warning"></span>
                                          <span class="fa fa-star text-warning"></span>
                                          <span class="fa fa-star text-warning"></span>
                                  
                                          @endif                                        
                                        </td>
                                    </p>
                                    <p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span class="fw-bold">{{$notification->time}}</span></p>
                                </div>
                                </div>
        
                            </div>
                        </div>
                            
                        @endforeach
                        @else
                            <p class="text-center mt-3">There are no notifications yet</p>
                        @endif
                    
        
        
        
                    </div>
                  </div>
                </div>
                <!-- notifcation page -->
                <div class="card-footer p-0 border-top border-0">
                  <div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder" href="{{route('notifications')}}">Notification history</a></div>
                </div>
              </div>
            </div>
            <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script type="text/javascript">
        
                $(".submit-form").click(function(e){
                    e.preventDefault();
                    var data = $('#form-data').serialize();
                    $.ajax({
                        type: 'post',
                        url: "{{ route('makeallread') }}",
                        data: data,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                       
                        complete: function(response){
                            var timestampArray = document.getElementsByClassName("unread");
                            var numb = document.getElementById("number");
        
                            for(var i = (timestampArray.length - 1); i >= 0; i--)
                            {
        
                                timestampArray[i].className = 'px-2 px-sm-3 py-3 border-300 notification-card position-relative read border-bottom';
                                }
                                numb.remove();
        
                            
                        }
                    });
                });
            </script>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-l ">

                <img class="rounded-circle " src="{{auth()->user()->avatar}}" alt="avatar">
                    
              
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
            <div class="card position-relative border-0">
              <div class="card-body p-0">
                <div class="text-center pt-4 pb-3">
                  <div class="avatar avatar-xl ">

                    <img class="rounded-circle " src="{{auth()->user()->avatar}}" alt="avatar">
                  </div>

                  <h6 class="mt-2 text-black">{{auth()->user()->name}}</h6> {{-- {{user.first_name}} {{user.last_name}} --}}
                 
                </div>
                <!-- <div class="mb-3 mx-3">
                    <input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status">
                </div> -->
              </div>

              <div class="overflow-auto scrollbar" style="height: 10rem;">
                <ul class="nav d-flex flex-column mb-2 pb-1">
                  <li class="nav-item"><a class="nav-link px-3" href="{{route('dashbord')}}"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="{{route('settings')}}"> <span class="me-2 text-900" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="{{route('contact')}}"> <span class="me-2 text-900" data-feather="help-circle"></span>Help Center</a></li>
                </ul>
              </div>

              <div class="card-footer p-0 border-top">
                <!-- <ul class="nav d-flex flex-column my-3">
                  <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                </ul> 
                <hr>-->
                <div class="px-3 pt-3"> 
                    
                    <form method="post" action="{{ route('logout') }}" class="">
                       @csrf
                            <input
                            type="hidden"
                            />
                        
                        <button type="submit" class="btn btn-phoenix-secondary d-flex flex-center w-100">
                            <span class="me-2" data-feather="log-out"> 

                            </span>
                            Sign out
                        </button>
                    </form>
                </div>
                
                <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="{{ route('policy') }}">Privacy policy</a>&bull;<a class="text-600 mx-1" href="{{ route('terms') }}">Terms</a></div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
</nav>