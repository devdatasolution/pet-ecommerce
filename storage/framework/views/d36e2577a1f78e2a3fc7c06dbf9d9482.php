<?php
    $header = json_decode($active_theme->header, true);
?>

<?php if(isset($header['background-color'])): ?>
    <style>
        /* background color */
        .logo-header,
        .wc-header-section {
             <?php if(Str::startsWith($header['background-color'], 'linear-gradient')): ?>
                background-image: <?php echo e($header['background-color']); ?> !important;
            <?php else: ?>
                background-color: <?php echo e($header['background-color']); ?> !important;
            <?php endif; ?> 
            
        }
       
    </style>
<?php endif; ?><?php /**PATH C:\laragon\www\elevate\resources\views/layouts/themes/fashion/header.blade.php ENDPATH**/ ?>