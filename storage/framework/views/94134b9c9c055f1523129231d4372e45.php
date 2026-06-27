<?php $__env->startPush('title', get_phrase('Website settings')); ?>
<?php $__env->startPush('meta'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('css'); ?>
<style>
    .box {
        background: #94949445;
        padding: 17px 20px;
        border-radius: 10px;
    }
    .box .btn {
        background: transparent !important;
    }
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
 


    <ul class="nav nav-pills mb-3 px-2" id="pills-tab" role="tablist">
        
        <li class="nav-item" role="presentation">
            <button class="nav-link  active " id="pills-website-logo-tab" data-bs-toggle="pill" data-bs-target="#pills-website-logo" type="button" role="tab" aria-controls="pills-website-logo" aria-selected="false"><?php echo e(get_phrase('Website Logo')); ?></button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link " id="pills-website-policy-tab" data-bs-toggle="pill" data-bs-target="#pills-website-policy" type="button" role="tab" aria-controls="pills-website-policy" aria-selected="false"><?php echo e(get_phrase('Website Policy')); ?></button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
       
        <div class="tab-pane fade show active " id="pills-website-logo" role="tabpanel" aria-labelledby="pills-website-logo-tab" tabindex="0">
            <div class="row justify-content-between mt-3">
                
                <div class="col-md-3">
                    <div class="ol-card p-4">
                        <div class="ol-card-body">
                            <form action="<?php echo e(route('admin.website.settings.logo.update')); ?>" method="post" enctype="multipart/form-data" class="text-center">
                                <?php echo csrf_field(); ?>
                                <div class="form-group mb-2">
                                    <div class="wrapper-image-preview d-flex justify-content-center">
                                        <div class="box">
                                            <div class="upload-options">
                                                <img class="radius-6px" width="200px" height="40px" src="<?php echo e(get_image(get_frontend_settings('light_logo'))); ?>" alt="">
                                                <label for="light_logo" class="btn ol-card p-4-text mt-2">
                                                    <i class="fi-rr-camera"></i>
                                                    <small class="d-block text-muted"><?php echo e(get_phrase('Choose an image file')); ?></small>
                                                </label>
                                                <input id="light_logo" type="file" class="image-upload d-none" name="light_logo" accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn ol-btn-primary w-100"><?php echo e(get_phrase('Upload light logo')); ?></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ol-card p-4">
                        <div class="ol-card-body">
                            <form action="<?php echo e(route('admin.website.settings.logo.update')); ?>" method="post" enctype="multipart/form-data" class="text-center">
                                <?php echo csrf_field(); ?>
                                <div class="form-group mb-2">
                                    <div class="wrapper-image-preview d-flex justify-content-center">
                                        <div class="box">
                                            <div class="upload-options">
                                                <img class="radius-6px" width="200px" height="40px" src="<?php echo e(get_image(get_frontend_settings('dark_logo'))); ?>" alt="">
                                                <label for="dark_logo" class="btn ol-card p-4-text mt-2">
                                                    <i class="fi-rr-camera"></i>
                                                    <small class="d-block text-muted"><?php echo e(get_phrase('Choose an image file')); ?></small>
                                                </label>
                                                <input id="dark_logo" type="file" class="image-upload d-none" name="dark_logo" accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn ol-btn-primary w-100"><?php echo e(get_phrase('Upload dark logo')); ?></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ol-card p-4">
                        <div class="ol-card-body">
                            <form action="<?php echo e(route('admin.website.settings.logo.update')); ?>" method="post" enctype="multipart/form-data" class="text-center">
                                <?php echo csrf_field(); ?>
                                <div class="form-group mb-2">
                                    <div class="wrapper-image-preview d-flex justify-content-center">
                                        <div class="box">
                                            <div class="upload-options">
                                                <img class="radius-6px" width="200px" height="40px" src="<?php echo e(get_image(get_frontend_settings('favicon'))); ?>" alt="">
                                                <label for="favicon" class="btn ol-card p-4-text mt-2">
                                                    <i class="fi-rr-camera"></i>
                                                    <small class="d-block text-muted"><?php echo e(get_phrase('Choose an image file')); ?></small>
                                                </label>
                                                <input id="favicon" type="file" class="image-upload d-none" name="favicon" accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn ol-btn-primary w-100"><?php echo e(get_phrase('Upload favicon')); ?></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade " id="pills-website-policy" role="tabpanel" aria-labelledby="pills-website-policy-tab" tabindex="0">
            <div class="row">
                <div class="col-md-10">
                    <div class="ol-card p-4">
                        <div class="ol-card-body">
                            <form class="required-form" action="<?php echo e(route('admin.website.policies.update')); ?>" method="post">
                                <?php echo csrf_field(); ?>

                                <div class="mb-3">
                                    <label for="about_us" class="form-label ol-form-label"><?php echo e(get_phrase('About us')); ?></label>
                                    <textarea name="about_us" rows="4" class="form-control ol-form-control text_editor" id="about_us" placeholder="<?php echo e(get_phrase('About us')); ?>"><?php echo e(get_frontend_settings('about_us')); ?></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="terms_and_conditions" class="form-label ol-form-label"><?php echo e(get_phrase('Terms & Conditions')); ?></label>
                                    <textarea name="terms_and_conditions" rows="4" class="form-control ol-form-control text_editor" id="terms_and_conditions" placeholder="<?php echo e(get_phrase('Terms & Conditions')); ?>"><?php echo e(get_frontend_settings('terms_and_conditions')); ?></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="privacy_policy" class="form-label ol-form-label"><?php echo e(get_phrase('Privacy policy')); ?></label>
                                    <textarea name="privacy_policy" rows="4" class="form-control ol-form-control text_editor" id="privacy_policy" placeholder="<?php echo e(get_phrase('Website privacy policy')); ?>"><?php echo e(get_frontend_settings('privacy_policy')); ?></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="refund_policy" class="form-label ol-form-label"><?php echo e(get_phrase('Refund policy')); ?></label>
                                    <textarea name="refund_policy" rows="4" class="form-control ol-form-control text_editor" id="refund_policy" placeholder="<?php echo e(get_phrase('Website Refund policy')); ?>"><?php echo e(get_frontend_settings('refund_policy')); ?></textarea>
                                </div>


                                <div class="fpb-7 mb-3">
                                    <button type="submit" class="btn ol-btn-primary"><?php echo e(get_phrase('Update Policy')); ?></button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\elevate\resources\views/admin/settings/website_settings.blade.php ENDPATH**/ ?>