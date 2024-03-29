<div class="ud-header absolute top-0 left-0 z-40 flex w-full items-center bg-transparent">
    <div class="container">
      <div class="relative -mx-4 flex items-center justify-between">

        <div class="w-60 max-w-full px-4">
          <a href="{{route('home')}}" class="navbar-logo block w-full py-5">
            <img src="/assets/images/logo/logo-white.svg" alt="logo" class="header-logo w-full" />
          </a>
        </div>

        <div class="flex w-full items-center justify-between px-4">
          
          <div>
            <button id="navbarToggler" class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
              <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
              <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
              <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
            </button>
            <nav id="navbarCollapse" class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white  py-5 shadow-lg lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent  lg:py-0 lg:px-4 lg:shadow-none xl:px-6">
              <ul class="blcok lg:flex 2xl:ml-20">
                <li class="group relative">
                  <a href="#home"
                    class="ud-menu-scroll mx-8 flex py-2 font-medium text-base text-dark  group-hover:text-primary lg:mr-0 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70">
                    Home
                  </a>
                </li>
                <li class="group relative">
                  <a href="#about"
                    class="ud-menu-scroll mx-8 flex py-2 font-medium text-base text-dark  group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10">
                    About
                  </a>
                </li>
                <li class="group relative">
                  <a href="#pricing"
                    class="ud-menu-scroll mx-8 flex py-2 font-medium text-base text-dark  group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10">
                    Pricing
                  </a>
                </li>
                <li class="group relative">
                    <a href="#blog"
                        class="ud-menu-scroll mx-8 flex py-2 font-medium text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10">
                        Blog
                    </a>
                </li>



                <li class="group relative">
                  <a href="#contact"
                    class="ud-menu-scroll mx-8 flex py-2 font-medium text-base text-dark  group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-10">
                    Contact
                  </a>
                </li>

                

                @if (auth()->check())
                  <li class="group relative lg:hidden">
                    <a href="{{route('dashbord')}}"
                      class="mx-8 flex py-2 font-medium text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-body-color xl:ml-10">
                      Dashboard
                    </a>
                  </li>


                  <li class="group relative lg:hidden">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                      <button type="submit"
                      class="mx-8 flex py-2 font-medium text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-body-color xl:ml-10"
                      >Logout </button>
                    </form>
                  </li>


                  

                @else
                  
                  <li class="group relative lg:hidden">
                      <a href="{{route('login')}}"
                        class="mx-8 flex py-2 font-medium text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-body-color xl:ml-10">
                        Sign In
                      </a>
                  </li>
      
                  <li class="group relative lg:hidden">
                      <a href="{{route('register')}}"
                        class="mx-8 flex py-2 font-medium text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-body-color xl:ml-10">
                        Sign Up
                      </a>
                  </li>
                @endif

              </ul>
            </nav>
          </div>

          <div class="justify-end pr-16 flex items-center lg:pr-0">

            
            <div class="hidden lg:flex">

              @if (auth()->check())
              <a href="{{route('dashbord')}}"
                class="signUpBtn rounded-md bg-white bg-opacity-20 py-2 px-6 text-base font-medium text-white duration-300 ease-in-out hover:bg-opacity-100 hover:text-dark">
                Dashboard
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                <button type="submit"
                class="ml-2 signUpBtn rounded-md bg-white bg-opacity-20 py-2 px-6 text-base font-medium text-white duration-300 ease-in-out hover:bg-opacity-100 hover:text-dark "
                >Logout </button>
              </form>
              @else
              
              <a href="{{route('login')}}" class="loginBtn py-2 px-[22px] text-base font-medium text-white hover:opacity-70">
                Sign In
              </a>
              <a href="{{route('register')}}"
                class="signUpBtn rounded-md bg-white bg-opacity-20 py-2 px-6 text-base font-medium text-white duration-300 ease-in-out hover:bg-opacity-100 hover:text-dark">
                Sign Up
              </a>
              @endif
            </div>
          </div>

        </div>

      </div>
    </div>
</div>
