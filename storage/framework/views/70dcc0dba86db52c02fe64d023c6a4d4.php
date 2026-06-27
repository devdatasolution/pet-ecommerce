<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <?php echo e(config(['app.name' => get_settings('system_title')])); ?>

    <title><?php echo $__env->yieldPushContent('title'); ?> | <?php echo e(config('app.name')); ?></title>

    <!-- all the meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="shortcut icon" href="<?php echo e(get_image(get_frontend_settings('favicon'))); ?>" />
    <meta content="<?php echo e(csrf_token()); ?>" name="csrf_token" />
    <?php echo $__env->yieldPushContent('meta'); ?>
    <!-- End meta -->

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/global/bootstrap-5.3.3/css/bootstrap.min.css')); ?>" />

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/global/icons/uicons-regular-rounded/css/uicons-regular-rounded.css')); ?>" />

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/global/icon-picker/fontawesome-iconpicker.min.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/global/icon-picker/icons/fontawesome-all.min.css')); ?>" />

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/global/summernote/summernote-lite.min.css')); ?>" rel="stylesheet">

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/global/tagify-master/dist/tagify.css')); ?>" rel="stylesheet" type="text/css" />

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/global/select2/select2.min.css')); ?>" rel="stylesheet" type="text/css" />

    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/global/daterangepicker/daterangepicker.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/fashion/vendors/magnific-popup/magnific-popup.css')); ?>">


    
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/backend/css/style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/backend/css/responsive.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/backend/css/custom.css')); ?>">

    <?php echo $__env->yieldPushContent('css'); ?>

    <script type="text/javascript" src="<?php echo e(asset('assets/global/jquery-3.7.1/jquery-3.7.1.min.js')); ?>"></script>

</head>

<body>
        <!-- Sidebar Navigation -->
        <div class="ol-sidebar print-d-none">
            <?php echo $__env->make('admin.navigation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>

        <div class="ol-sidebar-content">
            <?php echo $__env->make('admin.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <div class="ol-body-content">
                <div class="container-fluid">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </div>
    </main>


    <?php echo $__env->make('admin.modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <script type="text/javascript" src="<?php echo e(asset('assets/global/bootstrap-5.3.3/js/bootstrap.bundle.min.js')); ?>"></script>
    
    <script type="text/javascript" src="<?php echo e(asset('assets/global/summernote/summernote-lite.min.js')); ?>"></script>

    
    <script type="text/javascript" src="<?php echo e(asset('assets/global/icon-picker/fontawesome-iconpicker.min.js')); ?>"></script>

    
    <script type="text/javascript" src="<?php echo e(asset('assets/global/jquery-form/jquery.form.min.js')); ?>"></script>

    
    <script type="text/javascript" src="<?php echo e(asset('assets/global/jquery-ui-1.13.2/jquery-ui.min.js')); ?>"></script>

    
    <script type="text/javascript" src="<?php echo e(asset('assets/global/tagify-master/dist/tagify.min.js')); ?>"></script>

    
    <script type="text/javascript" src="<?php echo e(asset('assets/global/select2/select2.min.js')); ?>"></script>

    
    <script type="text/javascript" src="<?php echo e(asset('assets/global/daterangepicker/moment.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/global/daterangepicker/daterangepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/frontend/fashion/vendors/magnific-popup/jquery.magnific-popup.min.js')); ?>"></script>

    
    <script type="text/javascript" src="<?php echo e(asset('assets/global/html2pdf/html2pdf.bundle.min.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(asset('assets/backend/js/script.js')); ?>"></script>

    <?php echo $__env->make('admin.toaster', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('admin.common_scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('admin.init', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->yieldPushContent('js'); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\elevate\resources\views/layouts/admin.blade.php ENDPATH**/ ?>