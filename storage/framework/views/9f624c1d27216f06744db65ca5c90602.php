<?php $__env->startPush('title', '404 Not Found'); ?>
<?php $__env->startPush('meta'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>
<style>
    .errorBox img{
        margin-bottom: 32px !important;
     }
     .errorContent{
        margin-bottom: 50px;
     }
     .errorContent h1{
        font-size: 36px;
        font-weight: 500;
        line-height: 36px;
      }  
     .errorContent a{
        margin-top: 32px;
      } 
     .mb-32{
        margin-bottom: 32px;
     }

</style>
<?php $__env->startSection('content'); ?>

    <!-- Start About Us -->
    <section class="pb-120 pt-30 description-style mt-5 mb-5">
        <div class="container mt-5">
            <div class="row align-items-center">
                <div class="col-md-12 ms-auto">
                    <div class="errorBox">
                        <img src="<?php echo e(asset('assets/No data found.svg')); ?>" class="m-auto" alt="">
                         <div class="errorContent text-center">
                            <h1 class="g-title fs-28px mb-2  capitalize"><?php echo e(get_phrase('404 Not Found!')); ?></h1>
                            <p class="g-text mb-32"><?php echo e(get_phrase('The page you requested could not be found')); ?>.</p>
                            <p class=" g-text"> <?php echo e(get_phrase('Please make sure the URL is entered correctly.')); ?> </p>
                            <p class=" g-text"> <?php echo e(get_phrase('If you are still puzzled, click on the home link below.')); ?> </p>
                            <a class="btn fsh-btn-dark " href="<?php echo e(route('home')); ?>"><?php echo e(get_phrase('Back to home')); ?></a>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>



<?php echo $__env->make('layouts.frontend', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\elevate\resources\views/errors/404.blade.php ENDPATH**/ ?>