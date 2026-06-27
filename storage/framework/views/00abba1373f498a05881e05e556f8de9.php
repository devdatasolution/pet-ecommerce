<?php $__env->startPush('title', get_phrase('Product Add')); ?>
<?php $__env->startPush('meta'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

    <style>
        .h-45{
            height: 45px;
        }
    </style>

    <div class="row mt-2">
        <div class="col-md-6">
            <ul class="nav nav-tabs nav-pills nav-shwitcher py-4 mb-4 border-0" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link nav-link-start px-5 active" id="quick-view-tab" data-bs-toggle="tab" data-bs-target="#quick-view" type="button" role="tab" aria-controls="quick-view" aria-selected="true"><?php echo e(get_phrase('Quick View')); ?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link nav-link-end px-5" id="detail-view-tab" data-bs-toggle="tab" data-bs-target="#detail-view" type="button" role="tab" aria-controls="detail-view" aria-selected="false"><?php echo e(get_phrase('Detail View')); ?></button>
                </li>
            </ul>
        </div>
        <div class="col-md-6 d-flex justify-content-end gap-2">
            <button onclick="document.querySelector('#product-add-tab-content .tab-pane.show form').submit();" type="button" class="btn ol-btn-outline-secondary d-flex align-items-center cg-10px h-45"><?php echo e(get_phrase('Add Product')); ?></button>
            <a href="<?php echo e(route('admin.products')); ?>" class="btn ol-btn-outline-secondary d-flex align-items-center h-45 cg-10px">
                    <span class="fi-rr-arrow-alt-left"></span>
                    <span><?php echo e(get_phrase('Back')); ?></span>
                </a>
            
        </div>
    </div>

    <div class="tab-content" id="product-add-tab-content">
        <div class="tab-pane fade show active" id="quick-view" role="tabpanel" aria-labelledby="quick-view-tab">
            <?php echo $__env->make('admin.product.product_add_quick', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
        <div class="tab-pane fade" id="detail-view" role="tabpanel" aria-labelledby="quick-view-tab">
            <?php echo $__env->make('admin.product.product_add_detail', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script>
        function appendAttribute(attribute_name, attribute_type_id) {
            var attributeElem =
                `<div class="border-top" id="attribute_type_${attribute_type_id}">
                    <div class="mb-3">
                        <div class="d-flex align-items-center py-3">
                            <label for="extra_cost" class="form-label ol-form-label mb-0">${attribute_name}</label>
                            <button class="btn ol-btn-danger btn-icon ms-auto" onclick="$('#attribute_type_${attribute_type_id}').remove();" data-bs-toggle="tooltip" title="<?php echo e(get_phrase('Remove')); ?>"><i class="fi-rr-minus-small"></i></button>
                        </div>
                    </div>
                    <div class="mb-3 attribute-value-inputs"></div>
                </div>`;

            $('.appended-attributes').append(attributeElem);

            load_view("<?php echo e(route('view', ['path' => 'admin.product.attribute_value_inputs'])); ?>?attribute_type_id=" + attribute_type_id, "#attribute_type_" + attribute_type_id + " .attribute-value-inputs");
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\elevate\resources\views/admin/product/product_add.blade.php ENDPATH**/ ?>