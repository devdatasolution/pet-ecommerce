<?php
    $primary_button = json_decode($active_theme->primary_button, true);
?>

<?php if(isset($primary_button['background-color']) && isset($primary_button['color'])): ?>
    <style>
        /* background color */
        
        .sold-progress .proggress,
        .ca-btn-skin,
        .fsh-sm-btn-dark  {
            background-color: <?php echo e($primary_button['background-color']); ?> !important;
            color: <?php echo e($primary_button['color']); ?> !important;
        }
    </style>
<?php endif; ?><?php /**PATH C:\laragon\www\elevate\resources\views/layouts/themes/fashion/primary_button.blade.php ENDPATH**/ ?>