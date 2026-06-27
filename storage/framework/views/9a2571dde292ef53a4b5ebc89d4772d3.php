<!DOCTYPE html>
<html lang="en">

<head>
    
    <?php echo $__env->make('layouts.seo', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <?php echo $__env->yieldPushContent('meta'); ?>

    <title><?php echo $__env->yieldPushContent('title'); ?> | <?php echo e(get_settings('system_title')); ?></title>

    <link rel="shortcut icon" href="<?php echo e(get_image(get_frontend_settings('favicon'))); ?>" type="image/x-icon">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/global/bootstrap-5.3.3/css/bootstrap.min.css')); ?>">
    <!-- Nice Select -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/global/nice-select/nice-select.css')); ?>">
    <!-- Select 2 -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/global/select2/select2.min.css')); ?>">

    <!-- UI Flat icon -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/fashion/icons/uicons-regular-rounded/css/uicons-regular-rounded.css')); ?>">
    <!-- Image Zoom -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/fashion/vendors/image-zoom/image-zoom.css')); ?>">
    <!-- Jquery UI -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/fashion/vendors/jquery-ui/jquery-ui.css')); ?>">
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/fashion/vendors/swiper/swiper-bundle.min.css')); ?>">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/fashion/vendors/magnific-popup/magnific-popup.css')); ?>">
    <!-- R Progressbar -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/fashion/vendors/rprogressbar/jquery.rprogessbar.min.css')); ?>">
    <!-- Drift -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/fashion/vendors/dript/drift-basic.min.css')); ?>">
    
   
    <!-- Venobox Popup -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/fashion/vendors/venobox/venobox.min.css')); ?>">
    <!-- Wow animation -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/fashion/vendors/wow-js/animate.min.css')); ?>">
    <!-- Custom Css -->
   
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/fashion/css/style.css')); ?>"> 
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/fashion/css/responsive.css')); ?>">
  
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/frontend/fashion/css/custom.css')); ?>">

    
    <link href="<?php echo e(asset('assets/global/summernote/summernote-lite.min.css')); ?>" rel="stylesheet">
    
    <link href="<?php echo e(asset('assets/global/tagify-master/dist/tagify.css')); ?>" rel="stylesheet" type="text/css" />
    
    <script src="<?php echo e(asset('assets/global/jquery-3.7.1/jquery-3.7.1.min.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('css'); ?>
     <?php
        $active_theme = \App\Models\Theme::where('status', 1)->first();
    ?>

<?php if($active_theme): ?>
    
    <?php echo $__env->make('layouts.themes.' . $active_theme->identifier . '.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>

</head>
<body>



<?php
    $builder_sections = $active_theme && $active_theme->html
        ? json_decode($active_theme->html, true)
        : [];
?>



<?php if($active_theme && !View::hasSection('is_preview') && Route::currentRouteName() === 'home'): ?>

    
    <?php $__currentLoopData = $builder_sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $viewPath = "components.home_made_by_builder.{$active_theme->identifier}.$section";
        ?>
        <?php if(view()->exists($viewPath)): ?>
            <?php echo $__env->make($viewPath, array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<?php else: ?>

    
    <?php if($active_theme && !View::hasSection('is_preview')): ?>
        <?php $__currentLoopData = $builder_sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(in_array($section, ['header_top', 'header'])): ?>
                <?php
                    $viewPath = "components.home_made_by_builder.{$active_theme->identifier}.$section";
                ?>
                <?php if(view()->exists($viewPath)): ?>
                    <?php echo $__env->make($viewPath, array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    
    <section>
        <?php echo $__env->yieldContent('content'); ?>
    </section>

    
    <?php if($active_theme && !View::hasSection('is_preview')): ?>
        <?php $__currentLoopData = $builder_sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($section === 'footer'): ?>
                <?php
                    $viewPath = "components.home_made_by_builder.{$active_theme->identifier}.$section";
                ?>
                <?php if(view()->exists($viewPath)): ?>
                    <?php echo $__env->make($viewPath, array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

<?php endif; ?>






<script src="<?php echo e(asset('assets/frontend/fashion/vendors/wow-js/wow.min.js')); ?>"></script>




    
    <script src="<?php echo e(asset('assets/global/jquery-form/jquery.form.min.js')); ?>"></script>
    
    <script src="<?php echo e(asset('assets/global/tagify-master/dist/tagify.min.js')); ?>"></script>
    
    <script src="<?php echo e(asset('assets/global/summernote/summernote-lite.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/global/bootstrap-5.3.3/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/global/nice-select/jquery.nice-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/global/select2/select2.min.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/frontend/fashion/vendors/image-zoom/image-zoom.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/frontend/fashion/vendors/mixitup/mixitup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/frontend/fashion/vendors/jquery-ui/jquery-ui.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/frontend/fashion/vendors/swiper/swiper-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/frontend/fashion/vendors/rprogressbar/jquery.waypoints.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/frontend/fashion/vendors/rprogressbar/jQuery.rProgressbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/frontend/fashion/vendors/magnific-popup/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/frontend/fashion/vendors/dript/drift.min.js')); ?>"></script>
  
    <script type="module" src="<?php echo e(asset('assets/frontend/fashion/vendors/zoom/zoom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/frontend/fashion/vendors/venobox/venobox.min.js')); ?>"></script>
    
    
    <script src="<?php echo e(asset('assets/frontend/fashion/js/script.js')); ?>"></script>

 
    

    <?php echo $__env->make('frontend.modal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('frontend.toaster', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('frontend.common_scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
    <?php echo $__env->yieldPushContent('js'); ?>
   <script>
    'use strict';

function toggleWishlist(productId, el) {
    $.ajax({
        url: "<?php echo e(route('wishlist.toggle')); ?>",
        method: "post",
        data: {
            product_id: productId,
            _token: "<?php echo e(csrf_token()); ?>"
        },
        success: function(response) {
            if (response.status === 'added') {
                $(el).addClass('active');
                success('Added to Wishlist');
            } else if (response.status === 'removed') {
                $(el).removeClass('active');
                warning('Removed from Wishlist');
            } else if (response.status === 'error') {
                warning(response.message);
            }
        },
        error: function() {
            warning('Something went wrong!');
        }
    });
}
</script>

</body>

</html>
<?php /**PATH C:\laragon\www\elevate\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>