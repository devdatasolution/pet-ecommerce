<?php $__env->startPush('title', get_phrase('Seo settings')); ?>
<?php $__env->startPush('meta'); ?><?php $__env->stopPush(); ?>
<?php $__env->startPush('css'); ?><?php $__env->stopPush(); ?>
<style>
    .capitalize{
        text-transform: capitalize;
    }
</style>
<?php $__env->startSection('content'); ?>

    <div class="ol-card">
       
        <div class="ol-card">
            <div class="ol-card-body p-20px mb-3">
                <div class="d-flex gap-3 flex-wrap flex-md-nowrap">
                    <div class="ol-sidebar-tab">
                        <div class="nav flex-column nav-pills" id="myv-pills-tab" role="tablist" aria-orientation="vertical">
                            <?php $__currentLoopData = $seo_fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seo_field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <button class="nav-link <?php if($active_tab == slugify($seo_field->route)): ?> active <?php endif; ?>" id="v-pills-<?php echo e($seo_field->route); ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-<?php echo e($seo_field->route); ?>" type="button" role="tab" aria-controls="v-pills-<?php echo e($seo_field->route); ?>" aria-selected="false" tabindex="-1">
                                    <span class="capitalize"><?php echo e(ucwords(str_replace('_', ' ', $seo_field->route))); ?></span>
                                </button>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="tab-content w-100" id="myv-pills-tabContent">
                        <?php $__currentLoopData = $seo_fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seo_field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="tab-pane fade <?php if($active_tab == slugify($seo_field->route)): ?> show active <?php endif; ?>" id="v-pills-<?php echo e($seo_field->route); ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo e($seo_field->route); ?>-tab" tabindex="0">
                                <div class="w-100">
                                    <form class="eForm-sizing" action="<?php echo e(route('admin.seo.settings.update', ['id' => $seo_field->id])); ?>" method="POST" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>

                                        <div class="fpb-7 mb-3">
                                            <label for="meta_title" class="form-label ol-form-label"><?php echo e(get_phrase('Meta Title')); ?></label>
                                            <input class="form-control ol-form-control" id="meta_title" name="meta_title" type="text" value="<?php echo e($seo_field->meta_title); ?>" placeholder="Meta Title" />
                                        </div>

                                        <div class="fpb-7 mb-3">
                                            <label for="meta_keywords" class="form-label ol-form-label"><?php echo e(get_phrase('Meta Keywords')); ?></label>
                                            <input type="text" name="meta_keywords" value="<?php echo e($seo_field->meta_keywords); ?>" class="tagify ol-form-control w-100" id="meta_keywords" placeholder="Meta keywords" />
                                            <small class="form-label ol-form-label text-muted"><?php echo e(get_phrase('Writing your keyword and hit the enter')); ?></small>
                                        </div>

                                        <div class="fpb-7 mb-3">
                                            <label for="meta_description" class="form-label ol-form-label"><?php echo e(get_phrase('Meta Description')); ?></label>
                                            <textarea class="form-control ol-form-control" id="meta_description" name="meta_description" type="text" placeholder="Meta Description"><?php echo e($seo_field->meta_description); ?></textarea>
                                        </div>

                                        <div class="fpb-7 mb-3">
                                            <label for="meta_robot" class="form-label ol-form-label"><?php echo e(get_phrase('Meta Robot')); ?></label>
                                            <input class="form-control ol-form-control" id="meta_robot" name="meta_robot" type="text" value="<?php echo e($seo_field->meta_robot); ?>" placeholder="Meta Robot" />
                                        </div>

                                        <div class="fpb-7 mb-3">
                                            <label for="canonical_url" class="form-label ol-form-label"><?php echo e(get_phrase(' Canonical Url')); ?></label>
                                            <input type="text" class="form-control ol-form-control" data-role="tagsinput" id = "canonical_url" name="canonical_url" placeholder="https://example.com/courses" value="<?php echo e($seo_field->canonical_url); ?>" />
                                        </div>

                                        <div class="fpb-7 mb-3">
                                            <label for="custom_url" class="form-label ol-form-label"><?php echo e(get_phrase(' Custom Url')); ?></label>
                                            <input type="text" class="form-control ol-form-control" data-role="tagsinput" id = "custom_url" name="custom_url" placeholder="https://example.com/dresses/courses" value="<?php echo e($seo_field->custom_url); ?>" />
                                        </div>

                                        <div class="fpb-7 mb-3">
                                            <label for="og_title" class="form-label ol-form-label"><?php echo e(get_phrase('Og Title')); ?></label>
                                            <input type="text" class="form-control ol-form-control" data-role="tagsinput" id = "og_title" name="og_title" value="<?php echo e($seo_field->og_title); ?>" />
                                        </div>

                                        <div class="fpb-7 mb-3">
                                            <label for="og_description" class="form-label ol-form-label"><?php echo e(get_phrase('Og Description')); ?></label>
                                            <textarea class="form-control ol-form-control" id="og_description" name="og_description" type="text"><?php echo e($seo_field->og_description); ?></textarea>
                                        </div>

                                        <div class="fpb-7 mb-3">
                                            <label for="og_image" class="form-label ol-form-label"><?php echo e(get_phrase('Og Image')); ?></label>
                                            <div class="og_image mb-2">
                                                <img width="150px" src="<?php echo e(get_image($seo_field->og_image)); ?>" alt=""> 
                                            </div>
                                            <input type="file" class="form-control ol-form-control" id = "og_image" name="og_image" value="<?php echo e($seo_field->og_image); ?>" />
                                            <input type="hidden" name="old_og_image" value="<?php echo e($seo_field->og_image); ?>">
                                        </div>

                                        <div class="fpb-7 mb-3">
                                            <label for="json_ld" class="form-label ol-form-label"><?php echo e(get_phrase('Json Id')); ?></label>
                                            <textarea class="form-control ol-form-control" id="json_ld" name="json_ld"><?php echo e($seo_field->json_ld); ?></textarea>
                                        </div>

                                        <div class="mt-2">
                                            <button type="submit" class="ol-btn-primary"><?php echo e(get_phrase('Submit')); ?></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<script>
    "use strict";

    function activeTab() {
        $(this).toggleClass("active");
    }
</script>

<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\elevate\resources\views/admin/settings/seo_settings.blade.php ENDPATH**/ ?>