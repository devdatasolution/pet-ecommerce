<form action="<?php echo e(route('admin.product.store', ['action_type' => 'detailed'])); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    
    <div class="row">
        <div class="col-lg-6">
            <div class="ol-card">
                <div class="pt-3">
                    <h5 class="title fs-14px ps-3"><?php echo e(get_phrase('Product Info')); ?></h5>
                </div>
                <div class="ol-card-body p-3 mb-5">
                    <div class="mb-3">
                        <label for="title" class="form-label ol-form-label"><?php echo e(get_phrase('Product title')); ?></label>
                        <input type="text" value="<?php echo e(old('title')); ?>" name="title" class="form-control ol-form-control" id="title" placeholder="<?php echo e(get_phrase('Enter product title')); ?>" aria-label="<?php echo e(get_phrase('Enter product title')); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="store_id" class="form-label ol-form-label"><?php echo e(get_phrase('Store')); ?></label>
                        <select class="ol-select2" name="store_id" id="store_id" required>
                            <option value=""><?php echo e(get_phrase('Select a store')); ?></option>
                            <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($store->id); ?>"><?php echo e($store->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="brand_id" class="form-label ol-form-label"><?php echo e(get_phrase('Brand')); ?></label>
                        <select class="ol-select2" name="brand_id" id="brand_id" required>
                            <option value=""><?php echo e(get_phrase('Select a brand')); ?></option>
                            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="label" class="form-label ol-form-label"><?php echo e(get_phrase('Popular label')); ?></label>
                        <select class="ol-select2" name="label" id="label" required>
                            <option value=""><?php echo e(get_phrase('Select a label')); ?></option>
                            <option value="top-seller"><?php echo e(get_phrase('Top seller')); ?></option>
                            <option value="best-seller"><?php echo e(get_phrase('Best seller')); ?></option>
                            <option value="featured"><?php echo e(get_phrase('Featured')); ?></option>
                            <option value="trendy"><?php echo e(get_phrase('Trendy')); ?></option>
                            <option value="new-arrival"><?php echo e(get_phrase('New arrival')); ?></option>
                            <option value="hot"><?php echo e(get_phrase('Hot')); ?></option>
                            <option value="exclusive"><?php echo e(get_phrase('Exclusive')); ?></option>
                            <option value="limited-edition"><?php echo e(get_phrase('Limited edition')); ?></option>
                            <option value="bestselling"><?php echo e(get_phrase('Bestselling')); ?></option>
                            <option value="customer-favorite"><?php echo e(get_phrase('Customer favorite')); ?></option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="quality_label" class="form-label ol-form-label"><?php echo e(get_phrase('Quality Assurance Label')); ?></label>
                        <select class="ol-select2" name="quality_label" id="quality_label" required>
                            <option value=""><?php echo e(get_phrase('Select a label of quality')); ?></option>
                            <option value="certified"><?php echo e(get_phrase('Certified')); ?></option>
                            <option value="premium"><?php echo e(get_phrase('Premium')); ?></option>
                            <option value="authentic"><?php echo e(get_phrase('Authentic')); ?></option>
                            <option value="handmade"><?php echo e(get_phrase('Handmade')); ?></option>
                            <option value="organic"><?php echo e(get_phrase('Organic')); ?></option>
                            <option value="sustainable"><?php echo e(get_phrase('Sustainable')); ?></option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="summary" class="form-label ol-form-label"><?php echo e(get_phrase('Short summary')); ?></label>
                        <textarea name="summary" rows="4" class="form-control ol-form-control" id="summary" placeholder="<?php echo e(get_phrase('Write short summary')); ?>"><?php echo e(old('summary')); ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label ol-form-label"><?php echo e(get_phrase('Product description')); ?></label>
                        <textarea name="description" rows="4" class="form-control ol-form-control text_editor" id="description" placeholder="<?php echo e(get_phrase('Write description')); ?>"><?php echo e(old('description')); ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="visibility_status_active" class="form-label ol-form-label"><?php echo e(get_phrase('Visibility')); ?> - </label>
                        <div class="eRadios d-flex align-items-center">
                            <div class="form-check">
                                <input type="radio" value="1" name="status" class="form-check-input eRadioSuccess" id="visibility_status_active" required="" checked>
                                <label for="visibility_status_active" class="form-check-label"><?php echo e(get_phrase('Active')); ?></label>
                            </div>

                            <div class="form-check ms-3">
                                <input type="radio" value="0" name="status" class="form-check-input eRadioPrimary" id="visibility_status_inactive" required="">
                                <label for="visibility_status_inactive" class="form-check-label"><?php echo e(get_phrase('Draft')); ?></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="ol-card">
                <div class="pt-3">
                    <h5 class="title fs-14px ps-3"><?php echo e(get_phrase('Stock & Related Attriutes')); ?></h5>
                </div>
                <div class="ol-card-body p-3 mb-5">
                    <div class="mb-3">
                        <label for="unit" class="form-label ol-form-label"><?php echo e(get_phrase('Total stock')); ?></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><?php echo e(get_phrase('Unit')); ?></span>
                            <select class="ol-form-control form-control" onchange="$('#selected_unit').text($(this).val().toUpperCase());" name="unit" id="unit" required>
                                <option value=""><?php echo e(get_phrase('Select product unit')); ?></option>
                                <option value="kg"><?php echo e(get_phrase('Kilogram')); ?> (kg)</option>
                                <option value="g"><?php echo e(get_phrase('Gram')); ?> (g)</option>
                                <option value="lb"><?php echo e(get_phrase('Pound')); ?> (lb)</option>
                                <option value="oz"><?php echo e(get_phrase('Ounce')); ?> (oz)</option>
                                <option value="L"><?php echo e(get_phrase('Liter')); ?> (L)</option>
                                <option value="mL"><?php echo e(get_phrase('Milliliter')); ?> (mL)</option>
                                <option value="gal"><?php echo e(get_phrase('Gallon')); ?></option>
                                <option value="qt"><?php echo e(get_phrase('Quart')); ?></option>
                                <option value="pt"><?php echo e(get_phrase('Pint')); ?></option>
                                <option value="fl-oz"><?php echo e(get_phrase('Fluid Ounce')); ?> (fl oz)</option>
                                <option value="package"><?php echo e(get_phrase('Package')); ?></option>
                                <option value="box"><?php echo e(get_phrase('Box')); ?></option>
                                <option value="bundle"><?php echo e(get_phrase('Bundle')); ?></option>
                                <option value="piece"><?php echo e(get_phrase('Piece')); ?></option>
                                <option value="set"><?php echo e(get_phrase('Set')); ?></option>
                                <option value="dozen"><?php echo e(get_phrase('Dozen')); ?></option>
                                <option value="pair"><?php echo e(get_phrase('Pair')); ?></option>
                                <option value="case"><?php echo e(get_phrase('Case')); ?></option>
                                <option value="carton"><?php echo e(get_phrase('Carton')); ?></option>
                                <option value="pallet"><?php echo e(get_phrase('Pallet')); ?></option>
                                <option value="bag"><?php echo e(get_phrase('Bag')); ?></option>
                                <option value="sack"><?php echo e(get_phrase('Sack')); ?></option>
                                <option value="bottle"><?php echo e(get_phrase('Bottle')); ?></option>
                                <option value="can"><?php echo e(get_phrase('Can')); ?></option>
                                <option value="jar"><?php echo e(get_phrase('Jar')); ?></option>
                                <option value="tube"><?php echo e(get_phrase('Tube')); ?></option>
                                <option value="strip"><?php echo e(get_phrase('Strip')); ?></option>
                                <option value="roll"><?php echo e(get_phrase('Roll')); ?></option>
                                <option value="sheet"><?php echo e(get_phrase('Sheet')); ?></option>
                                <option value="tablet"><?php echo e(get_phrase('Tablet')); ?></option>
                                <option value="capsule"><?php echo e(get_phrase('Capsule')); ?></option>
                                <option value="vial"><?php echo e(get_phrase('Vial')); ?></option>
                                <option value="unit"><?php echo e(get_phrase('Unit')); ?></option>
                                <option value="each"><?php echo e(get_phrase('Each')); ?></option>
                            </select>
                            <span class="input-group-text" id="selected_unit"><?php echo e(get_phrase('Quantity')); ?></span>
                            <input type="number" min="0" value="<?php echo e(old('total_stock')); ?>" name="total_stock" class="form-control ol-form-control" id="total_stock" placeholder="<?php echo e(get_phrase('Enter total stock')); ?>" aria-label="<?php echo e(get_phrase('Enter total stock')); ?>" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="category_id" class="form-label ol-form-label"><?php echo e(get_phrase('Product category')); ?></label>
                        <select class="ol-select2" name="category_id" id="category_id" onchange="load_view('<?php echo e(route('view', ['path' => 'admin.product.attributes_dropdown_list'])); ?>?category_id='+$(this).val(), '#attributes_dropdown_list'); $('.appended-attributes').html('');" required>
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
                            <ul class="dropdown-menu" id="attributes_dropdown_list">
                                <li><button class="dropdown-item" type="button"><?php echo e(get_phrase('Please select a category')); ?></button></li>
                            </ul>
                        </div>
                    </div>

                    <div class="appended-attributes"></div>
                </div>
            </div>

            <div class="ol-card">
                <div class="pt-3">
                    <h5 class="title fs-14px ps-3"><?php echo e(get_phrase('Pricing & Status')); ?></h5>
                </div>
                <div class="ol-card-body p-3 mb-5">
                    <div class="mb-3">
                        <label for="price" class="form-label ol-form-label"><?php echo e(get_phrase('Price')); ?> (<?php echo e(currency()); ?>)</label>
                        <input type="number" step="0.01" value="<?php echo e(old('price')); ?>" name="price" class="form-control ol-form-control" id="price" placeholder="<?php echo e(get_phrase('Enter product price')); ?>" aria-label="<?php echo e(get_phrase('Enter product price')); ?>" required>
                    </div>

                    <hr class="my-4">

                    <div class="mb-3">
                        <label for="discount_type" class="form-label ol-form-label"><?php echo e(get_phrase('Discount type')); ?></label>
                        <select class="ol-select2" name="discount_type" id="discount_type">
                            <option value="flat"><?php echo e(get_phrase('Flat')); ?></option>
                            <option value="percentage"><?php echo e(get_phrase('Percentage')); ?></option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="discount_value" class="form-label ol-form-label"><?php echo e(get_phrase('Amount of discount')); ?></label>
                        <input type="number" min="0" step="0.01" value="<?php echo e(old('discount_value')); ?>" name="discount_value" class="form-control ol-form-control" id="discount_value" placeholder="<?php echo e(get_phrase('Enter amount of discount')); ?>" aria-label="<?php echo e(get_phrase('Enter amount of discount')); ?>" required>
                    </div>

                    <div class="mb-3 pb-5">
                        <label for="discount_period" class="form-label ol-form-label"><?php echo e(get_phrase('Discount Period')); ?></label>
                        <div class="position-relative position-relative">
                            <input type="text" value="<?php echo e(old('discount_period')); ?>" name="discount_period" class="form-control ol-form-control daterangepicker w-100" id="discount_period" placeholder="<?php echo e(get_phrase('Select date range of discount period')); ?>" aria-label="<?php echo e(get_phrase('Select date range of discount period')); ?>" required>
                        </div>
                    </div>

                    <div class="mb-3 pb-5">
                        <label for="discount_status_active" class="form-label ol-form-label"><?php echo e(get_phrase('Discount Status')); ?></label>
                        <div class="eRadios d-flex align-items-center">
                            <div class="form-check">
                                <input type="radio" value="1" name="discount_status" class="form-check-input eRadioSuccess" id="discount_status_active" required="" checked>
                                <label for="discount_status_active" class="form-check-label"><?php echo e(get_phrase('Active')); ?></label>
                            </div>

                            <div class="form-check ms-3">
                                <input type="radio" value="0" name="discount_status" class="form-check-input eRadioPrimary" id="discount_status_inactive" required="">
                                <label for="discount_status_inactive" class="form-check-label"><?php echo e(get_phrase('Inactive')); ?></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ol-card">
                <div class="pt-3">
                    <h5 class="title fs-14px ps-3"><?php echo e(get_phrase('Banner & Thumbnail Section')); ?></h5>
                </div>
                <div class="ol-card-body p-3 mb-5">
                    <div class="mb-3">
                        <label for="thumbnail" class="form-label ol-form-label"><?php echo e(get_phrase('Thumbnail')); ?></label>
                        <input type="file" name="thumbnail[]" class="form-control ol-form-control" id="thumbnail" accept="image/*" multiple>
                    </div>

                    <div class="mb-3">
                        <label for="banner" class="form-label ol-form-label"><?php echo e(get_phrase('Banner')); ?></label>
                        <input type="file" name="banner" class="form-control ol-form-control" id="banner" accept="image/*">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php /**PATH C:\laragon\www\elevate\resources\views/admin/product/product_add_detail.blade.php ENDPATH**/ ?>