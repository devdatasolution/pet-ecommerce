<?php
    $theme = App\Models\Theme::findOrFail($id);
?>
<?php $files = array_diff(scandir(base_path('/resources/views/components/home_made_by_developer/'.$theme->identifier)), array('.', '..')); ?>
<div class="row g-2">
    <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $file_name = str_replace('.blade.php', '', $file);
        ?>
        <div class="col-md-12 position-relative">
            <div class="builder-blocks">
                <?php echo $__env->make('components.home_made_by_developer.'.$theme->identifier.'.'.$file_name, array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            </div>
            <button onclick="add_block_html_content_by_select_from_offcanvas('<?php echo e($file_name); ?>', '<?php echo e($theme->identifier); ?>')" class="builder-block-placeholder" type="button"><i class="fi-rr-plus"></i></button>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH C:\laragon\www\elevate\resources\views/admin/page_builder/page_layout_edit_offcanvas_body.blade.php ENDPATH**/ ?>