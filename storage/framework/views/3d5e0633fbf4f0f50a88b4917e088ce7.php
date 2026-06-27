<?php
    $secondary_button = json_decode($active_theme->secondary_button, true);
?>

<?php if(isset($secondary_button['background-color']) && isset($secondary_button['color']) && $secondary_button['background-hover-color'] && $secondary_button['hover-color']): ?>
    <style>
        /* background color */
       .wc-btn-outline-dark,
        .fsh-btn-outline-dark,
        .category-pagination .swiper-button-next, .category-pagination .swiper-button-prev,
        .ba-btn-outline-dark {
             <?php if(Str::startsWith($secondary_button['background-color'], 'linear-gradient')): ?>
                background-image: <?php echo e($secondary_button['background-color']); ?> !important;
            <?php else: ?>
                background: <?php echo e($secondary_button['background-color']); ?> !important;
            <?php endif; ?>
            color: <?php echo e($secondary_button['color']); ?> !important;
        }
        .wc-sm-btn-outline-dark:hover,
        .product-card-btn:hover,
       .wc-btn-outline-dark:hover,
        .fsh-btn-dark:hover,
         .fsh-btn-outline-secondary:hover,
        .ca-btn-outline-secondary:hover,
        .fsh-sm-btn-warning:hover,
        .fsh-sm3-btn-dark:hover,
        .fsh-sm-btn-secondary:hover,
        .fsh-sm-btn-dark:hover,
        
        .fsh-btn-warning:hover,
        .bab2-btn-outline-dark:hover,
        .fsh-btn-warning:hover,
        .fsh-btn-outline-dark:hover,
        .category-pagination .swiper-button-next:hover, .category-pagination .swiper-button-prev:hover,
       .ba-btn-outline-dark:hover{
             <?php if(Str::startsWith($secondary_button['background-hover-color'], 'linear-gradient')): ?>
                background-image: <?php echo e($secondary_button['background-hover-color']); ?> !important;
            <?php else: ?>
                background: <?php echo e($secondary_button['background-hover-color']); ?> !important;
            <?php endif; ?>
            color: <?php echo e($secondary_button['hover-color']); ?> !important;
        }
        .product-card:hover .product-card-btn {
            border-color: <?php echo e($secondary_button['background-hover-color']); ?> !important;
              <?php if(Str::startsWith($secondary_button['background-hover-color'], 'linear-gradient')): ?>
                background-image: <?php echo e($secondary_button['background-hover-color']); ?> !important;
            <?php else: ?>
                background: <?php echo e($secondary_button['background-hover-color']); ?> !important;
            <?php endif; ?>
            color: <?php echo e($secondary_button['hover-color']); ?> !important;
        }

        
        
    </style>
<?php endif; ?>
<?php /**PATH C:\laragon\www\elevate\resources\views/layouts/themes/fashion/secondary_button.blade.php ENDPATH**/ ?>