<form action="<?php echo e(route('admin.product.store', ['action_type' => 'quick'])); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-lg-6">
            <div class="ol-card">
                <div class="pt-3">
                    <h5 class="title fs-14px ps-3"><?php echo e(get_phrase('Product Info')); ?></h5>
                </div>
                <div class="ol-card-body p-3 mb-5">
                    <div class="mb-3">
                        <label for="title_1st" class="form-label ol-form-label"><?php echo e(get_phrase('Product title')); ?></label>
                        <input type="text" value="<?php echo e(old('title')); ?>" name="title" class="form-control ol-form-control" id="title_1st" placeholder="<?php echo e(get_phrase('Enter product title')); ?>" aria-label="<?php echo e(get_phrase('Enter product title')); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="price_1st" class="form-label ol-form-label"><?php echo e(get_phrase('Price')); ?> (<?php echo e(currency()); ?>)</label>
                        <input type="number" min="0" step="0.01" value="<?php echo e(old('price')); ?>" name="price" class="form-control ol-form-control" id="price_1st" placeholder="<?php echo e(get_phrase('Enter product price')); ?>" aria-label="<?php echo e(get_phrase('Enter product price')); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="store_ids" class="form-label ol-form-label"><?php echo e(get_phrase('Store')); ?></label>
                        <select class="ol-select2" name="store_id" id="store_ids" required>
                            <option value=""><?php echo e(get_phrase('Select a store')); ?></option>
                            <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($store->id); ?>"><?php echo e($store->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="summary_1st" class="form-label ol-form-label"><?php echo e(get_phrase('Short summary')); ?></label>
                        <textarea name="summary" rows="4" class="form-control ol-form-control" id="summary_1st" placeholder="<?php echo e(get_phrase('Write short summary')); ?>"><?php echo e(old('summary')); ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="description_1st" class="form-label ol-form-label"><?php echo e(get_phrase('Product description')); ?></label>
                        <textarea name="description" rows="4" class="form-control ol-form-control text_editor" id="description_1st" placeholder="<?php echo e(get_phrase('Write description')); ?>"><?php echo e(old('description')); ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="status_active_1st" class="form-label ol-form-label"><?php echo e(get_phrase('Visibility')); ?> - </label>
                        <div class="eRadios d-flex align-items-center">
                            <div class="form-check">
                                <input type="radio" value="1" name="status" class="form-check-input eRadioSuccess" id="status_active_1st" required="" checked>
                                <label for="status_active_1st" class="form-check-label"><?php echo e(get_phrase('Active')); ?></label>
                            </div>

                            <div class="form-check ms-3">
                                <input type="radio" value="0" name="status" class="form-check-input eRadioPrimary" id="status_inactive_1st" required="">
                                <label for="status_inactive_1st" class="form-check-label"><?php echo e(get_phrase('Draft')); ?></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="ol-card">
                <div class="pt-3">
                    <h5 class="title fs-14px ps-3"><?php echo e(get_phrase('Category & Attributes')); ?></h5>
                </div>
                <div class="ol-card-body p-3 mb-5">

                    <div class="mb-3">
                        <label for="category_id_1st" class="form-label ol-form-label"><?php echo e(get_phrase('Product category')); ?></label>
                        <select class="ol-select2" name="category_id" id="category_id_1st" onchange="load_view('<?php echo e(route('view', ['path' => 'admin.product.attributes_dropdown_list'])); ?>?category_id='+$(this).val(), '#attributes_dropdown_list_1st'); $('.appended-attributes').html('');" required>
                            <option value=""><?php echo e(get_phrase('Select a category')); ?></option>
                            <?php $__currentLoopData = $product_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <optgroup label=" <?php echo e($product_category->title); ?> ">
                                    <option value="<?php echo e($product_category->id); ?>"><?php echo e($product_category->title); ?></option>
                                    <?php $__currentLoopData = $product_category->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($sub_category->id); ?>"> - <?php echo e($sub_category->title); ?></option>
                                        <?php $__currentLoopData = $sub_category->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_sub_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($sub_sub_category->id); ?>"> &nbsp;&nbsp;&nbsp;&nbsp;-- <?php echo e($sub_sub_category->title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </optgroup>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="mb-3 d-flex align-items-center">
                        <label for="extra_cost" class="form-label ol-form-label mb-0"><?php echo e(get_phrase('Add new attributes')); ?></label>

                        <div class="btn-group dropstart ms-auto">
                            <button type="button" class="btn ol-btn-primary btn-icon radius-8px" data-bs-toggle="dropdown" aria-expanded="false" data-bs-toggle="tooltip" title="<?php echo e(get_phrase('Add attribute')); ?>">
                                <i class="fi-rr-plus-small"></i>
                            </button>
                            <ul class="dropdown-menu" id="attributes_dropdown_list_1st">
                                <li><button class="dropdown-item" type="button"><?php echo e(get_phrase('Please select a category')); ?></button></li>
                            </ul>
                        </div>
                    </div>

                    <div class="appended-attributes"></div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php /**PATH C:\laragon\www\elevate\resources\views/admin/product/product_add_quick.blade.php ENDPATH**/ ?>