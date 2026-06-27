<?php $__env->startPush('title', 'Home'); ?>
<?php $__env->startPush('meta'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php
        $active_theme = \App\Models\Theme::where('status', 1)->first();
    ?>

    <?php echo $__env->make("components.{$active_theme->identifier}.home.index", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.frontend', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\elevate\resources\views/frontend/home/index.blade.php ENDPATH**/ ?>