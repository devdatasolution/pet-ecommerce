
<?php $__env->startPush('title', get_phrase('Store Profile Settings')); ?>
<?php $__env->startPush('meta'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>


    <div class="row">
        <div class="col-md-7">
            <div class="ol-card p-4">
                <div class="ol-card-body">
                    <form action="<?php echo e(route('admin.store.profile.update', ['id' => $store->id])); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="mb-3">
                            <label for="name" class="form-label ol-form-label"><?php echo e(get_phrase('Store name')); ?></label>
                            <input type="text" value="<?php echo e($store->name); ?>" name="name" class="form-control ol-form-control" id="name" placeholder="<?php echo e(get_phrase('Enter store name')); ?>" aria-label="<?php echo e(get_phrase('Enter store name')); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label ol-form-label"><?php echo e(get_phrase('Store phone')); ?></label>
                            <input type="text" value="<?php echo e($store->phone); ?>" name="phone" class="form-control ol-form-control" id="phone" placeholder="<?php echo e(get_phrase('Enter store phone')); ?>" aria-label="<?php echo e(get_phrase('Enter store phone')); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label ol-form-label"><?php echo e(get_phrase('Store address')); ?></label>
                            <input type="text" value="<?php echo e($store->address); ?>" name="address" class="form-control ol-form-control" id="address" placeholder="<?php echo e(get_phrase('Enter store address')); ?>" aria-label="<?php echo e(get_phrase('Enter store address')); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="city" class="form-label ol-form-label"><?php echo e(get_phrase('City')); ?></label>
                            <input type="text" value="<?php echo e($store->city); ?>" name="city" class="form-control ol-form-control" id="city" placeholder="<?php echo e(get_phrase('Enter name city')); ?>" aria-label="<?php echo e(get_phrase('Enter name city')); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="state" class="form-label ol-form-label"><?php echo e(get_phrase('State')); ?></label>
                            <input type="text" value="<?php echo e($store->state); ?>" name="state" class="form-control ol-form-control" id="state" placeholder="<?php echo e(get_phrase('Enter name state')); ?>" aria-label="<?php echo e(get_phrase('Enter name state')); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="zip" class="form-label ol-form-label"><?php echo e(get_phrase('Zip Code')); ?></label>
                            <input type="text" value="<?php echo e($store->zip); ?>" name="zip" class="form-control ol-form-control" id="zip" placeholder="<?php echo e(get_phrase('Enter zip code')); ?>" aria-label="<?php echo e(get_phrase('Enter zip code')); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="country" class="form-label ol-form-label"><?php echo e(get_phrase('Country')); ?></label>
                            <input type="text" value="<?php echo e($store->country); ?>" name="country" class="form-control ol-form-control" id="country" placeholder="<?php echo e(get_phrase('Enter country name')); ?>" aria-label="<?php echo e(get_phrase('Enter country name')); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="country" class="form-label ol-form-label"><?php echo e(get_phrase('Map Location')); ?></label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><?php echo e(get_phrase('Latitude')); ?></span>
                                <input type="text" value="<?php echo e($store->latitude); ?>" name="latitude" class="ol-form-control form-control" placeholder="<?php echo e(get_phrase('Enter latitude')); ?>" aria-label="<?php echo e(get_phrase('Enter latitude')); ?>">
                                <span class="input-group-text"><?php echo e(get_phrase('Longitude')); ?></span>
                                <input type="text" value="<?php echo e($store->longitude); ?>" name="longitude" class="ol-form-control form-control" placeholder="<?php echo e(get_phrase('Enter longitude')); ?>" aria-label="<?php echo e(get_phrase('Enter longitude')); ?>">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label ol-form-label"><?php echo e(get_phrase('Store content')); ?></label>
                            <textarea name="description" rows="4" class="form-control ol-form-control" id="description" placeholder="<?php echo e(get_phrase('Write description')); ?>"><?php echo e($store->description); ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="thumbnail" class="form-label ol-form-label"><?php echo e(get_phrase('Thumbnail')); ?></label>
                            <input type="file" name="thumbnail" class="form-control ol-form-control" id="thumbnail" accept="image/*">
                        </div>

                        <div class="mb-3">
                            <label for="banner" class="form-label ol-form-label"><?php echo e(get_phrase('Banner')); ?></label>
                            <input type="file" name="banner" class="form-control ol-form-control" id="banner" accept="image/*">
                        </div>

                        <div class="mb-2">
                            <button class="btn ol-btn-primary"><?php echo e(get_phrase('Update')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\elevate\resources\views/admin/store/store_profile.blade.php ENDPATH**/ ?>