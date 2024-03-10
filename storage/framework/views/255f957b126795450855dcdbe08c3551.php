

<?php $__env->startSection('meta'); ?>
<meta name="description" content="Ziko streamlines Google review responses with instant AI assistance, improving the quality of feedback and boosting online visibility effortlessly.">

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<?php echo $__env->make('components.guest.navs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <div class="relative z-10 overflow-hidden pt-[120px] pb-[60px] md:pt-[130px] lg:pt-[160px] ">
        <div
        class="w-full h-px bg-gradient-to-r from-stroke/0 via-stroke  to-stroke/0 absolute left-0 bottom-0">
        </div>
        <div class="container">
        <div class="-mx-4 flex flex-wrap items-center">
            <div class="w-full px-4">
            <div class="text-center">
                <h1 class="mb-4 text-3xl font-bold text-dark  sm:text-4xl md:text-[40px] md:leading-[1.2]">
                Blog</h1>
            
                <ul class="flex items-center justify-center gap-[10px]">
                    <li>
                    <a href="<?php echo e(route('home')); ?>"
                        class="flex items-center gap-[10px] text-base font-medium text-dark ">
                    Home
                    </a>
                </li>
                <li> 
                    <a href="" class="flex items-center gap-[10px] text-base font-medium text-body-color">
                    <span class="text-body-color "> / </span>
                    Blog
                    </a>
                </li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- ====== Banner Section End -->

    <!-- ====== Blog Section Start -->
    <section class="pt-20 pb-10 lg:pt-[120px] lg:pb-20 ">
        <div class="container">
        <div class="-mx-4 flex flex-wrap">

    
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                <div class="wow fadeInUp group mb-10" data-wow-delay=".1s">
                    <div class="mb-8 overflow-hidden rounded-[5px]">
                    <a href="<?php echo e(route('blog.post', ['post'=>$item->slug])); ?>" class="block">
                        <img src="<?php echo e($item->getThumbnailUrl()); ?>"alt="image" class="w-full transition group-hover:rotate-6 group-hover:scale-125" />
                        
                    </a>
                    </div>
    
                    <div>
                        <span
                        class="inline-block px-4 py-0.5 mb-6 text-xs font-medium leading-loose text-center text-white rounded-[5px] bg-primary">
                        <?php echo e($item->getReadingTime()); ?> min read . <?php echo e(date('d-m-Y', strtotime($item->published_at))); ?>

                        </span>
    
                        <h3>
                        <a href="<?php echo e(route('blog.post', ['post'=>$item->slug])); ?>"
                            class="inline-block mb-4 text-xl font-semibold text-dark  hover:text-primary  sm:text-2xl lg:text-xl xl:text-2xl">
                            <?php echo e($item->title); ?>

                            
                        </a>
                        </h3>
                        <p class="max-w-[370px] text-base text-body-color">
                            
                        <?php echo \Illuminate\Support\Str::limit( $item->body, 80, '...'); ?>

                        
                        </p>
                        
                    </div>
                </div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
            <!-- ====== pangina -->
            
            <?php echo e($posts->links('vendor.pagination.simple-tailwind')); ?>


            
            
            
        </div>
    </section>




  
<?php echo $__env->make('components.guest.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Mario\templetes\GMB_LARVEL\resources\views/guest/blog/blog.blade.php ENDPATH**/ ?>