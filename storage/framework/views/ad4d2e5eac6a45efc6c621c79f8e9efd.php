<div class="ud-header absolute top-0 left-0 z-40 flex w-full items-center bg-transparent">
    <div class="container">
      <div class="relative -mx-4 flex items-center justify-between">
        <div class="w-60 max-w-full px-4">
          <a href="<?php echo e(route('home')); ?>" class="navbar-logo block w-full py-5">
  
            <img src="/assets/images/logo/logo.svg" alt="logo" class="w-full" />
          </a>
        </div>
  
        <div class="flex w-full items-center justify-between px-4">
          
          <div>
            <button id="navbarToggler"
              class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
              <span class="relative my-[6px] block h-[2px] w-[30px] bg-dark "></span>
              <span class="relative my-[6px] block h-[2px] w-[30px] bg-dark "></span>
              <span class="relative my-[6px] block h-[2px] w-[30px] bg-dark "></span>
            </button>
            <nav id="navbarCollapse"
              class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white  py-5 shadow-lg lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent  lg:py-0 lg:px-4 lg:shadow-none xl:px-6">
              <ul class="blcok lg:flex 2xl:ml-20">
                <li class="group relative">
                  <a href="<?php echo e(route('home')); ?>"
                  class="ud-menu-scroll mx-8 flex py-2 font-medium text-base text-dark  group-hover:text-primary lg:mr-0 lg:inline-flex lg:py-6 lg:px-0 lg:text-body-color ">
                    Home
                  </a>
                </li>
                <li class="group relative">
                  <a href="<?php echo e(route('about')); ?>"
                  class="ud-menu-scroll mx-8 flex py-2 font-medium text-base text-dark  group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-body-color  xl:ml-10">
                    About
                  </a>
                </li>
                <li class="group relative">
                  <a href="<?php echo e(route('plans')); ?>"
                  class="ud-menu-scroll mx-8 flex py-2 font-medium text-base text-dark  group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-body-color  xl:ml-10">
                    Pricing
                  </a>
                </li>
                <li class="group relative">
                    <a href="<?php echo e(route('blog')); ?>"
                    class="ud-menu-scroll mx-8 flex py-2 font-medium text-base text-dark  group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-body-color  xl:ml-10">
                        Blog
                    </a>
                </li>

                <li class="group relative">
                  <a href="<?php echo e(route('demo')); ?>"
                  class="ud-menu-scroll mx-8 flex py-2 font-medium text-base text-dark  group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-body-color  xl:ml-10">
                  Demo
                  </a>
                </li>
  
                <li class="group relative">
                  <a href="<?php echo e(route('contact')); ?>"
                  class="ud-menu-scroll mx-8 flex py-2 font-medium text-base text-dark  group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-body-color  xl:ml-10">
                    Contact
                  </a>
                </li>

                
                
                
                    

                <?php if(auth()->check()): ?>
                <li class="group relative lg:hidden">
                  <a href="<?php echo e(route('dashbord')); ?>"
                    class="mx-8 flex py-2 font-medium text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-body-color xl:ml-10  lg:text-dark-6">
                    Dashboard
                  </a>
                </li>
                
                <li class="group relative lg:hidden">
                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <button type="submit"
                    class="mx-8 flex py-2 font-medium text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-body-color xl:ml-10  lg:text-dark-6"
                    >Logout </button>
                    <?php echo csrf_field(); ?>
                  </form>
                </li>
                
                <?php else: ?>
                <li class="group relative lg:hidden">
                    <a href="<?php echo e(route('login')); ?>"
                      class="mx-8 flex py-2 font-medium text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-body-color xl:ml-10  lg:text-dark-6">
                      Sign In
                    </a>
                </li>
    
                <li class="group relative lg:hidden">
                    <a href="<?php echo e(route('register')); ?>"
                      class="mx-8 flex py-2 font-medium text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-body-color xl:ml-10  lg:text-dark-6">
                      Sign Up
                    </a>
                </li>
                <?php endif; ?>
  
              </ul>
            </nav>
          </div>
  
          <div class="justify-end pr-16 flex items-center lg:pr-0">
            <?php if(auth()->check()): ?>
              <div class="hidden lg:flex">                 
                <a href="<?php echo e(route('dashbord')); ?>" class="signUpBtn rounded-md bg-primary py-2 px-6 text-base font-medium text-white duration-300 ease-in-out hover:bg-blue-dark">
                  Dashboard
                </a>
                
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                  <?php echo csrf_field(); ?>
                  <button type="submit"
                  class=" rounded-md  py-2 px-6 text-base font-medium text-body-color duration-300 ease-in-out "
                  >Logout </button>
                </form>
              </div>
            <?php else: ?>
            
              <div class="hidden lg:flex">                 
                <a href="<?php echo e(route('login')); ?>" class="loginBtn py-2 px-[22px] text-base font-medium text-dark  hover:opacity-70">
                  Sign In
                </a>
                <a href="<?php echo e(route('register')); ?>"
                        
                  class="signUpBtn rounded-md bg-primary py-2 px-6 text-base font-medium text-white duration-300 ease-in-out hover:bg-blue-dark">
                  Sign Up
                </a>
              </div>
            <?php endif; ?>
          </div>
  
        </div>
  
      </div>
    </div>
</div><?php /**PATH D:\Mario\templetes\GMB_LARVEL\resources\views/components/guest/navs.blade.php ENDPATH**/ ?>