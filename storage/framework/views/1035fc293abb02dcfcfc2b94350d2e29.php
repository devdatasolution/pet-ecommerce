<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

<?php echo e(config(['app.name' => get_settings('system_title')])); ?>


<?php
    //print SEO field values from database 'seo_field table', based on current route
    $current_route = Route::currentRouteName();
    $seo_field = App\Models\Seo_field::where('route', $current_route);
    
    if($current_route == 'product' && isset($product)){
        $seo_field->where('item_table', 'products')->where('item_id', $product->id ?? '');
    }
    if($current_route == 'blog_details' && isset($blog_details)){
        $seo_field->where('item_table', 'blogs')->where('item_id', $blog_details->id ?? '');
    }

    $seo_field = $seo_field->firstOrNew();

    // convert keywords JSON to string (if stored as JSON array)
    $keywords = '';
    if (!empty($seo_field->meta_keywords)) {
        $decoded = json_decode($seo_field->meta_keywords, true);
        if (is_array($decoded)) {
            $keywords = collect($decoded)->pluck('value')->implode(', ');
        } else {
            $keywords = $seo_field->meta_keywords;
        }
    }
?>

<?php if(!empty($seo_field['meta_title'])): ?>
    <title><?php echo e($seo_field['meta_title']); ?></title>
<?php else: ?>
    <title><?php echo $__env->yieldPushContent('title'); ?> | <?php echo e(get_settings('system_title')); ?></title>
<?php endif; ?>
<meta name="keywords" content="<?php echo e($keywords ?? ''); ?>">
<meta name="description" content="<?php echo e($seo_field['meta_description'] ?? ''); ?>">
<meta name="robots" content="<?php echo e($seo_field['meta_robot'] ?? ''); ?>">
<link rel="canonical" href="<?php echo e($seo_field['canonical_url'] ?? ''); ?>" />
<link rel="custom" href="<?php echo e($seo_field['custom_url'] ?? ''); ?>" />
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="<?php echo e($seo_field['meta_title'] ?? ''); ?>">

<script type="application/ld+json"><?php echo $seo_field['json_ld']; ?></script>

<meta property="og:title" content="<?php echo e($seo_field['og_title'] ?? ''); ?>" />
<meta property="og:description" content="<?php echo e($seo_field['og_description'] ?? ''); ?>" />
<meta property="og:image" content="<?php echo e(get_image($seo_field['og_image'] ?? '')); ?>" />
<meta property="og:url" content="<?php echo e(url()->current()); ?>" />
<?php /**PATH C:\laragon\www\elevate\resources\views/layouts/seo.blade.php ENDPATH**/ ?>