<?php $__env->startSection('content'); ?>
<div class="container-fluid bg-300 dark__bg-1200">
    <div class="bg-holder bg-auth-card-overlay" style="background-image:url(/assets/img/bg/37.png);"></div>
    <!--/.bg-holder-->
    <div class="row flex-center position-relative min-vh-100 g-0 py-5">
      <div class="col-11 col-sm-10 col-xl-8">
        <div class="card border border-200 auth-card">
          <div class="card-body pe-md-0">
            <div class="row align-items-center gx-0 gy-7">
              
              <div class="col-auto bg-100 dark__bg-1100 rounded-3 position-relative overflow-hidden auth-title-box">
                <div class="bg-holder" style="background-image:url(/assets/img/bg/38.png);"></div>
                <!--/.bg-holder-->
                <div class="position-relative px-4 px-lg-7 pt-7 pb-7 pb-sm-5 text-center text-md-start pb-lg-7">
                    <h3 class="mb-3 text-black fs-1">ZIKO AI Authentication</h3>
                    <p class="text-700">Give yourself some hassle-free automation process with the
                        uniqueness of ZIKO AI!</p>
                        <ul class="list-unstyled mb-0 w-max-content w-md-auto mx-auto">
                            <li class="d-flex align-items-center"><span
                                    class="uil uil-check-circle text-success me-2"></span><span
                                    class="text-700 fw-semi-bold">Fast</span></li>
                            <li class="d-flex align-items-center"><span
                                    class="uil uil-check-circle text-success me-2"></span><span
                                    class="text-700 fw-semi-bold">Simple</span></li>
                            <li class="d-flex align-items-center"><span
                                    class="uil uil-check-circle text-success me-2"></span><span
                                    class="text-700 fw-semi-bold">Smart</span></li>
                        </ul>
                </div>
                <div class="position-relative z-index--1 mb-6 d-none d-md-block text-center mt-md-15"><img class="auth-title-box-img d-dark-none" src="/assets/img/spot-illustrations/auth.png" alt=""><img class="auth-title-box-img d-light-none" src="/assets/img/spot-illustrations/auth-dark.png" alt=""></div>
              </div>

              <div class="col mx-auto">
                <div class="auth-form-box">
                  <div class="text-center"><div class="d-flex flex-center text-decoration-none mb-4">
                      <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block">
                        <img class="d-dark-none" src="/assets/img/icons/logo-black.svg"
                                                        alt="ZIKO AI" width="150">
                        <img class="d-light-none" src="/assets/img/icons/logo-white.svg"
                                                        alt="ZIKO AI" width="150">
                    
                    </div>
                    </div>
                    <h4 class="text-1000 mb-6">You Need To Confirm Emails Address</h4>
                    <p class="text-700 mb-5">We have sent an email to
                      you for verification. Follow the link provided to
                      finalize the signup process. If you do not see the
                      verification email in your main inbox, check your spam
                      folder. Or please issue a new email confirmation request. </p>
                      <form method="POST" action="<?php echo e(route('verification.send')); ?>" >
                        <?php echo csrf_field(); ?>
           
                          <button class="btn btn-primary w-100 mb-5" type="submit" name="action_send">Re-send Verification</button>
                      </form>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>



<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Mario\templetes\GMB_LARVEL\resources\views/auth/verify.blade.php ENDPATH**/ ?>