<?php
    $topbar = json_decode($active_theme->topbar, true);
?>




<?php if(isset($topbar['background-color'])): ?>
    <style>
        /* background color */
        .top-header-section,
        .header-top-section {
            background-color: <?php echo e($topbar['background-color']); ?> !important;
        }

        .header-top-section .nice-select .list {
            background-color: <?php echo e($topbar['background-color']); ?> !important;
        }
    </style>
<?php endif; ?>

<?php if(isset($topbar['color'])): ?>
    <style>
        .header-top-section .mail-and-number a,
        .header-top-section .nice-select,
        .header-top-section .selected-show {
            color: <?php echo e($topbar['color']); ?>;
        }

        .header-top-section .nice-select:after,
        .header-top-section .selected-show:after {
            border-color: <?php echo e($topbar['color']); ?>;
        }
    </style>
<?php endif; ?>

<?php if(isset($topbar['hover_color'])): ?>
    <style>
        .header-top-section .mail-and-number a:hover,
        .header-top-section .nice-select:hover,
        .header-top-section .selected-show:hover
        {
        color: <?php echo e($topbar['hover_color']); ?> !important;
        }

        .header-top-section .nice-select:hover:after,
        .header-top-section .selected-show:hover:after {
            border-color: <?php echo e($topbar['hover_color']); ?> !important;
        }
    </style>
<?php endif; ?> 

<?php /**PATH C:\laragon\www\elevate\resources\views/layouts/themes/fashion/topbar.blade.php ENDPATH**/ ?>