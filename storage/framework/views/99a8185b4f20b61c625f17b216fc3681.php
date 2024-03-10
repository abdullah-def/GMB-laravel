

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('components.user.left_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('components.user.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php if(!auth()->user()->settings->business_name): ?>
            
  <?php echo $__env->make('components.user.required', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php endif; ?>

<style type="text/css"> .notify{ z-index: 1000000; margin-top: 30px; } </style>

<div class="content">

    <div class="mb-9" style=" display: flex; justify-content: center; ">
        <div class="test">
                <div class="">
                    <form method="POST" action="<?php echo e(route('ruls')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="card mb-5">

                            <div class="card-header hover-actions-trigger position-relative mb-6" style="min-height: 130px; ">
                                <div class="bg-holder rounded-top" style="background-image: linear-gradient(0deg, #000000 -3%, rgba(0, 0, 0, 0) 83%), url(/assets/img/generic/59.png)">
                                    
                                </div>
                                <label class="avatar avatar-4xl  feed-avatar-profile cursor-pointer" for="upload-settings-porfile-picture">
                                        <img class="rounded-circle img-thumbnail bg-white shadow-sm" src="<?php echo e(auth()->user()->avatar); ?>" width="200" alt="">
                                </label>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                <div class="col-12">
                                    <div class="d-flex flex-wrap mb-2 align-items-center">
                                    <h3 class="me-2"><?php echo e(auth()->user()->name); ?></h3>
                                    </div>
                                    <div class="d-flex d-xl-block d-xxl-flex align-items-center">
                                    <div class="d-flex mb-xl-2 mb-xxl-0">
                                        <h6 class="d-inline-block mb-0"><?php echo e(auth()->user()->email); ?></h6>
                                    </div>
                                    
                                    </div>
                                </div>
                                </div>
                            </div>

                        </div>

                        <div class="border-bottom border-dashed pb-3 mb-4">
                            <h5 class="text-900 mb-3">Settings for responding to reviews</h5>

                            <div class="form-check form-switch"><input class="form-check-input" <?php if(auth()->user()->settings->five_star): ?> checked  <?php endif; ?> id="fivestarreview" type="checkbox"  name="fivestarreview"><label class="form-check-label fs-0" for="fivestarreview">Stop responding to 5 star reviews</label></div>
                            <div class="form-check form-switch"><input class="form-check-input" <?php if(auth()->user()->settings->four_star): ?> checked  <?php endif; ?> id="fourstarreview" type="checkbox"  name="fourstarreview"><label class="form-check-label fs-0" for="fourstarreview">Stop responding to 4 star reviews</label></div>
                            <div class="form-check form-switch"><input class="form-check-input" <?php if(auth()->user()->settings->three_star): ?> checked  <?php endif; ?> id="threestarreview" type="checkbox"  name="threestarreview"><label class="form-check-label fs-0" for="threestarreview">Stop responding to 3 star reviews</label></div>
                            <div class="form-check form-switch"><input class="form-check-input" <?php if(auth()->user()->settings->two_star): ?> checked  <?php endif; ?> id="twostarreview" type="checkbox"  name="twostarreview"><label class="form-check-label fs-0" for="twostarreview">Stop responding to 2 star reviews</label></div>
                            <div class="form-check form-switch"><input class="form-check-input" <?php if(auth()->user()->settings->one_star): ?> checked  <?php endif; ?> id="onestarreview" type="checkbox"  name="onestarreview"><label class="form-check-label fs-0" for="onestarreview">Stop responding to 1 star reviews</label></div>
                        </div>

                        <div class="border-bottom border-dashed pb-3 mb-4">
                            <h5 class="text-900 mb-3">Notifications Settings</h5>
                            <div class="form-check"><input class="form-check-input" <?php if(auth()->user()->settings->email_response): ?> checked  <?php endif; ?> id="respondemail" type="checkbox" name="respondemail"><label class="form-check-label fs-0" for="respondemail">Receive an email when Ziko posted a response to your reviews.</label></div>
                            <div class="form-check"><input class="form-check-input" <?php if(auth()->user()->settings->email_news): ?> checked  <?php endif; ?> id="newemail" type="checkbox" name="newemail"><label class="form-check-label fs-0" for="newemail">Get email updates on what's new.</label></div>
                        </div>

                        <div class="mb-4">

                            <div class="form-check"><input class="form-check-input" onclick="checkstate()" id="language"  type="checkbox" <?php if(auth()->user()->settings->same_language): ?> checked  <?php endif; ?> name="language"><label class="form-check-label fs-0" for="language">Reply to reviews using the language of the reviewer's original submission.</label></div>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="lang" <?php if(auth()->user()->settings->same_language): ?> disabled  <?php endif; ?>  name="lang">
                                <option value="false" <?php if(auth()->user()->settings->same_language): ?> selected  <?php endif; ?> >Set a default language for all review responses</option>

                                <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($loop->index); ?>" <?php if( $loop->index == auth()->user()->settings->language_choise and  auth()->user()->settings->language_choise != null): ?> selected  <?php endif; ?> ><?php echo e($item); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                
                            </select>
                        
                        </div>

                        <div class="text-end mb-6">
                            <div>
                                <button class="btn btn-phoenix-primary">Save Information</button>
                            </div>
                        </div>
                    </form>
                    
                </div>

                <div class="">
                    
                        <div class=" border-300 mb-4">
                            <form method="POST" action="<?php echo e(route('business')); ?>">
                                <?php echo csrf_field(); ?>

                                <div class="mb-6">

                                    <h4 class="mb-2">Business Information</h4>
                                    <p class=" lh-sm mb-0 mb-4" style="max-width: 500px;">Please note, this information will be used by artificial intelligence to better understand your company’s activities and provide more accurate responses.</h6>
                                    <div class="row g-3">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-icon-container">
                                                <div class="form-floating"><input class="form-control " <?php if(auth()->user()->settings->business_name): ?> value="<?php echo e(auth()->user()->settings->business_name); ?>" <?php endif; ?> id="lastName" type="text" placeholder="Last Name" name="BUSINESSNAME"><label class="text-700 " for="lastName">BUSINESS NAME</label></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-icon-container">
                                            <div class="form-floating"><input class="form-control " <?php if(auth()->user()->settings->business_website): ?> value="<?php echo e(auth()->user()->settings->business_website); ?>" <?php endif; ?> id="lastName" type="text" placeholder="Last Name" name="BUSINESSWEBSITE"><label class="text-700 " for="lastName">BUSINESS WEBSITE</label></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-icon-container">
                                                <div class="form-floating"><input class="form-control " <?php if(auth()->user()->settings->business_address): ?> value="<?php echo e(auth()->user()->settings->business_address); ?>" <?php endif; ?> id="lastName" type="text" placeholder="Last Name" name="BUSINESSADDRESS"><label class="text-700 " for="lastName">BUSINESS ADDRESS</label></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-icon-container">
                                                <div class="form-floating"><input class="form-control " <?php if(auth()->user()->settings->business_phone): ?> value="<?php echo e(auth()->user()->settings->business_phone); ?>" <?php endif; ?> id="lastName" type="text" placeholder="Last Name" name="BUSINESSPHONE"><label class="text-700 " for="lastName">BUSINESS PHONE</label></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-icon-container">
                                                <div class="form-floating"><input class="form-control " <?php if(auth()->user()->settings->business_email): ?> value="<?php echo e(auth()->user()->settings->business_email); ?>" <?php endif; ?> id="lastName" type="text" placeholder="Last Name" name="BUSINESSEMAIL"><label class="text-700 " for="lastName">BUSINESS EMAIL</label></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-icon-container">
                                                <div class="form-floating"><input class="form-control " <?php if(auth()->user()->settings->business_industry): ?> value="<?php echo e(auth()->user()->settings->business_industry); ?>" <?php endif; ?> id="lastName" type="text" placeholder="Last Name" name="BUSINESSINDUSTRY"><label class="text-700 " for="lastName">BUSINESS INDUSTRY</label></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-icon-container">
                                                <div class="form-floating"><input class="form-control " <?php if(auth()->user()->settings->basic_product): ?> value="<?php echo e(auth()->user()->settings->basic_product); ?>" <?php endif; ?> id="lastName" type="text" placeholder="Last Name" name="BUSINESSPRODUCT"><label class="text-700 " for="lastName">Main Product</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end mb-6">
                                    <div>
                                        <button class="btn btn-phoenix-primary">Save Information</button>
                                    </div>
                                </div>
                            </form>


                            <form method="POST" action="<?php echo e(route('personal')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="mb-6">
                                    <div class="row g-3">
                                        <h4 class="mb-3">Personal Details</h4>
                                        <div>
                                            <div class="mb-3">
                                                <div class="form-icon-container">
                                                    <div class="form-floating">
                                                        <input class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required <?php if(auth()->user()->name): ?> value="<?php echo e(auth()->user()->name); ?>" <?php endif; ?> id="lastName" type="text" placeholder="Last Name" name="name">
                                                        <label class="text-700 " for="lastName">Full Name</label>
                                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="text-base text-body-secondary " style="color: red;" role="alert">
                                                                <?php echo e($message); ?>

                                                            </span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-icon-container">
                                                    <div class="form-floating"><input class="form-control <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required id="lastName" type="password" placeholder="Last Name" name="current_password"><label class="text-700 " for="lastName" >CURRENT PASSWORD</label></div>
                                                    <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="text-base text-body-secondary " style="color: red;" role="alert">
                                                            <?php echo e($message); ?>

                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="mb-5">
                                                <div class="form-icon-container">
                                                    <div class="form-floating"><input class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required id="lastName" type="password" placeholder="Last Name" name="password"><label class="text-700 " for="lastName" >NEW PASSWORD</label></div>
                                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="text-base text-body-secondary " style="color: red;" role="alert">
                                                            <?php echo e($message); ?>

                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>

                                            
                                        </div>


                                    </div>

                                    <div class="text-end mb-6">
                                        <div>
                                            <button class="btn btn-phoenix-primary">Save Information</button>
                                        </div>
                                    </div>
                                
                                </div>
                            </form>

                            <form method="POST" id="subscription" action="<?php echo e(route('autorenew')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="mb-6">
                                    <div class="row g-3">
                                        <h4 class="mb-3">Subscription Management</h4>
                                        <div>
                                            <div class="mb-3">
                                                <div class="form-icon-container">
                                                    <div class="border-bottom border-dashed pb-3 mb-4">
                            
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" <?php if(!$auto_renew): ?> checked  <?php endif; ?> id="auto" type="checkbox"  name="auto"><label class="form-check-label fs-0" for="auto">Auto Renewal</label></div>
                                                       
                                                       
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        

                                            
                                        </div>


                                    </div>

                                    <div class="text-end mb-6">
                                        <div>
                                            <button class="btn btn-phoenix-primary">Save Information</button>
                                        </div>
                                    </div>
                                
                                </div>
                            </form>
                            
                            
                        </div>
                    


                    
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


<script>

function checkstate() {
    document.getElementById('lang').disabled = document.getElementById('language').checked;
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Mario\templetes\GMB_LARVEL\resources\views/user/settings.blade.php ENDPATH**/ ?>