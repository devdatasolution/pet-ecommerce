<?php $__env->startPush('title', get_phrase('Store Add')); ?>
<?php $__env->startPush('meta'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="ol-card radius-8px">
        <div class="ol-card-body mb-1 py-12px px-20px">
            <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap flex-md-nowrap">
             

                <a href="<?php echo e(route('admin.stores')); ?>" class="btn ol-btn-outline-secondary d-flex align-items-center cg-10px">
                    <span class="fi-rr-arrow-alt-left"></span>
                    <span><?php echo e(get_phrase('Back')); ?></span>
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <div class="ol-card p-4">
                <div class="ol-card-body">
                    <form action="<?php echo e(route('admin.store.store')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="mb-3">
                            <label for="name" class="form-label ol-form-label"><?php echo e(get_phrase('Store name')); ?></label>
                            <input type="text" value="<?php echo e(old('name')); ?>" name="name" class="form-control ol-form-control" id="name" placeholder="<?php echo e(get_phrase('Enter store name')); ?>" aria-label="<?php echo e(get_phrase('Enter store name')); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="user_id" class="form-label ol-form-label"><?php echo e(get_phrase('Store owner')); ?></label>
                            <select class="ol-select2" name="user_id" id="user_id">
                                <option value=""><?php echo e(get_phrase('Select store owner')); ?></option>
                                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($customer->id); ?>"><?php echo e($customer->name); ?> (<?php echo e($customer->email); ?>)</option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label ol-form-label"><?php echo e(get_phrase('Store phone')); ?></label>
                            <input type="text" value="<?php echo e(old('phone')); ?>" name="phone" class="form-control ol-form-control" id="phone" placeholder="<?php echo e(get_phrase('Enter store phone')); ?>" aria-label="<?php echo e(get_phrase('Enter store phone')); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label ol-form-label"><?php echo e(get_phrase('Store address')); ?></label>
                            <input type="text" value="<?php echo e(old('address')); ?>" name="address" class="form-control ol-form-control" id="address" placeholder="<?php echo e(get_phrase('Enter store address')); ?>" aria-label="<?php echo e(get_phrase('Enter store address')); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="city" class="form-label ol-form-label"><?php echo e(get_phrase('City')); ?></label>
                            <input type="text" value="<?php echo e(old('city')); ?>" name="city" class="form-control ol-form-control" id="city" placeholder="<?php echo e(get_phrase('Enter name city')); ?>" aria-label="<?php echo e(get_phrase('Enter name city')); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="state" class="form-label ol-form-label"><?php echo e(get_phrase('State')); ?></label>
                            <input type="text" value="<?php echo e(old('state')); ?>" name="state" class="form-control ol-form-control" id="state" placeholder="<?php echo e(get_phrase('Enter name state')); ?>" aria-label="<?php echo e(get_phrase('Enter name state')); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="zip" class="form-label ol-form-label"><?php echo e(get_phrase('Zip Code')); ?></label>
                            <input type="text" value="<?php echo e(old('zip')); ?>" name="zip" class="form-control ol-form-control" id="zip" placeholder="<?php echo e(get_phrase('Enter zip code')); ?>" aria-label="<?php echo e(get_phrase('Enter zip code')); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="country" class="form-label ol-form-label"><?php echo e(get_phrase('Country')); ?></label>
                            <input type="text" value="<?php echo e(old('country')); ?>" name="country" class="form-control ol-form-control" id="country" placeholder="<?php echo e(get_phrase('Enter country name')); ?>" aria-label="<?php echo e(get_phrase('Enter country name')); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="country" class="form-label ol-form-label"><?php echo e(get_phrase('Map Location')); ?></label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><?php echo e(get_phrase('Latitude')); ?></span>
                                <input type="text" value="<?php echo e(old('longitude')); ?>" name="latitude" class="ol-form-control form-control" placeholder="<?php echo e(get_phrase('Enter latitude')); ?>" aria-label="<?php echo e(get_phrase('Enter latitude')); ?>">
                                <span class="input-group-text"><?php echo e(get_phrase('Longitude')); ?></span>
                                <input type="text" value="<?php echo e(old('longitude')); ?>" name="longitude" class="ol-form-control form-control" placeholder="<?php echo e(get_phrase('Enter longitude')); ?>" aria-label="<?php echo e(get_phrase('Enter longitude')); ?>">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label ol-form-label"><?php echo e(get_phrase('Store content')); ?></label>
                            <textarea name="description" rows="4" class="form-control ol-form-control" id="description" placeholder="<?php echo e(get_phrase('Write description')); ?>"><?php echo e(old('description')); ?></textarea>
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
                            <button class="btn ol-btn-primary"><?php echo e(get_phrase('Add')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\elevate\resources\views/admin/store/store_add.blade.php ENDPATH**/ ?>