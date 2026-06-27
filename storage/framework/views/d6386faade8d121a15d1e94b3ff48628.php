<?php $__env->startPush('title', 'Login'); ?>
<?php $__env->startPush('meta'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<style>
    .input-password-wrap .password-icons.lock .eye-unlock {
	display: block;
}
</style>
    <!-- Breadcrumb Area Start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-area mt-3 mb-30px wow animate__fadeInUp" data-wow-delay=".1s">
                        <h1 class="al-title-42px text-center mb-20px"><?php echo e(get_phrase('Login')); ?></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb fsh-breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo e(get_phrase('Home')); ?></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo e(get_phrase('Login')); ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <section>
        <div class="container">
            <div class="row gx-20px gy-30px mb-100px wow animate__fadeInUp" data-wow-delay=".2s">
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-lg-5 col-md-8 mt-20px">
                        <form action="<?php echo e(route('login')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="mb-4">
                                <label for="email" class="form-label fsh-form-label"><?php echo e(get_phrase('Email')); ?></label>
                                <input type="text" class="form-control fsh-form-control" id="email" name="email" placeholder="<?php echo e(get_phrase('Enter your email address')); ?>">
                            </div>
                            <div class="mb-20px">
                                <label for="password" class="form-label fsh-form-label"><?php echo e(get_phrase('Password')); ?></label>
                                <div class="input-password-wrap">
                                    <div class="password-icons lock toggle-password" data-toggle=".password-field1" style="cursor:pointer;">
                                        <img class="eye-lock" src="<?php echo e(asset('assets/frontend/fashion/images/image-icons/eye-slash-gray-20.svg')); ?>" alt="">
                                        <img class="eye-unlock d-none" src="<?php echo e(asset('assets/frontend/fashion/images/image-icons/eye-gray-20.svg')); ?>" alt="">
                                    </div>

                                    <input type="password" class="form-control fsh-form-control password-field1" name="password" id="user-password1" placeholder="<?php echo e(get_phrase('Enter your Password')); ?>">
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex align-items-center gap-3 flex-wrap justify-content-between">
                                    <div class="form-check form-checkbox">
                                        <input class="form-check-input form-checkbox-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label form-checkbox-label" for="flexCheckDefault">
                                            <?php echo e(get_phrase('Rememebr me')); ?>

                                        </label>
                                    </div>
                                    
                                </div>
                            </div>
                            <button type="submit" class="btn fsh-btn-dark w-100 mb-12px"><?php echo e(strtoupper(get_phrase('LOG IN'))); ?></button>

                            
                           

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>

<script type="text/javascript">
"use strict";
$(document).ready(function () {
    $(".toggle-password").click(function () {
        $(this).toggleClass("eye-open");
        var input = $($(this).data("toggle"));
        var eyeOpen = $(this).find(".eye-unlock");
        var eyeClose = $(this).find(".eye-lock");

        if (input.attr("type") === "password") {
            input.attr("type", "text");
            eyeOpen.removeClass("d-none");
            eyeClose.addClass("d-none");
        } else {
            input.attr("type", "password");
            eyeOpen.addClass("d-none");
            eyeClose.removeClass("d-none");
        }
    });
});
</script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.frontend', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\elevate\resources\views/auth/login.blade.php ENDPATH**/ ?>