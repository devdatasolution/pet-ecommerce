





<?php $__env->startSection('is_preview', true); ?>

<?php $__env->startSection('content'); ?>
    <?php
        $themes = App\Models\Theme::where('id', $page_id)->firstOrNew();
        $builder_files = $themes->html ? json_decode($themes->html, true) : [];
    ?>

    <?php $__currentLoopData = $builder_files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $builder_file_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('components.home_made_by_builder.' . $themes->identifier . '.' . $builder_file_name, array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\elevate\resources\views/frontend/home/preview.blade.php ENDPATH**/ ?>