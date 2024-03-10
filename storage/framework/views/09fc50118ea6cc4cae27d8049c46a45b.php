<div class="bg-white sticky-top landing-navbar" data-navbar-shadow-on-scroll="data-navbar-shadow-on-scroll">
    <nav class="navbar navbar-expand-lg container-small px-3 px-lg-7 px-xxl-3">
        <a class="navbar-brand me-1 me-sm-3" href="<?php echo e(route('home')); ?>">
            <div class="d-flex align-items-center">
                <img class="d-dark-none" src="/assets/img/icons/logo-black.svg" alt="ZIKO AI" width="100">
                <img class="d-light-none" src="/assets/img/icons/logo-white.svg" alt="ZIKO AI" width="100">
            </div>
        </a>


        

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mt-2 mb-lg-0">

                    <li class="nav-item border-bottom border-bottom-lg-0"><a class="nav-link lh-1 py-0 fs--1 fw-bold py-3 active" aria-current="page" href="<?php echo e(route('home')); ?>">Home</a> </li>
                    
                    <li class="nav-item border-bottom border-bottom-lg-0"><a class="nav-link lh-1 py-0 fs--1 fw-bold py-3" href="<?php echo e(route('about')); ?>">About</a></li>
                    <li class="nav-item border-bottom border-bottom-lg-0"><a class="nav-link lh-1 py-0 fs--1 fw-bold py-3" href="<?php echo e(route('plans')); ?>"> Pricing</a></li>
                    <li class="nav-item border-bottom border-bottom-lg-0"><a class="nav-link lh-1 py-0 fs--1 fw-bold py-3" href="<?php echo e(route('blog')); ?>"> Blog</a></li>
                    <li class="nav-item"><a class="nav-link lh-1 py-0 fs--1 fw-bold py-3" href="<?php echo e(route('contact')); ?>"> Contact  </a></li>
                    

            </ul>
            <div class="d-grid d-lg-flex align-items-center">
                    

                

                <?php if(auth()->guard()->guest()): ?>
                    <a class="text-700 hover-text-1100 px-2 d-none d-lg-inline lh-sm " href="#" data-bs-toggle="modal"
                        data-bs-target="#searchBoxModal">
                        <span data-feather="search" style="height: 20px; width: 20px;"></span>
                    </a>

                    <a class="btn btn-link text-900 order-1 order-lg-0 ps-4 me-lg-2" href="<?php echo e(route('login')); ?>">Sign
                        in</a>
                    <a class="btn btn-phoenix-primary order-0" href="<?php echo e(route('register')); ?>">
                        <span class="fw-bold">Sign Up</span>
                    </a>
                <?php else: ?>
                
                    
                    <a class="btn btn-phoenix-primary order-0" href="<?php echo e(route('dashbord')); ?>">
                        <span class="fw-bold">Dashboard</span>
                    </a>
                    

                    <a class="btn btn-link text-900 order-1 order-lg-0 ps-4 me-lg-2" href="<?php echo e(route('login')); ?>" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                <?php endif; ?>

            </div>
        </div>
    </nav>
</div>
<?php /**PATH D:\Mario\templetes\GMB_LARVEL\resources\views/components/guest/nav_faild.blade.php ENDPATH**/ ?>