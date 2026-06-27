<?php $__env->startPush('title', get_phrase('Theme List')); ?>
<?php $__env->startPush('meta'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

    <div class="ol-card">
        
        <div class="ol-card-body p-3 mb-5">
           

            <style>
                .eSwitches .form-switch input.form-check-input.form-switch-medium {
                    height: 16px;
                }

                .form-switch .form-check-input {
                    background-color: #ecf2ff;
                    box-shadow: none !important;
                    cursor: pointer;
                }

                .form-check-input:checked {
                    background-color: #1b84ff !important;
                    border-color: #1b84ff !important;
                }

            </style>

            <?php if($counted = $themes->count() > 0): ?>
                <div class="table-responsive overflow-auto">
                    <table class="table print-table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col"><?php echo e(get_phrase('Theme')); ?></th>
                                <th scope="col"><?php echo e(get_phrase('Status')); ?></th>
                                <th scope="col"><?php echo e(get_phrase('Action')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                             
                            <?php $__currentLoopData = $themes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th>
                                        <?php echo e(++$key); ?>

                                    </th>
                                    <td>
                                        <h3 class="title text-14px my-2"><?php echo e($theme->title); ?></h3>
                                    </td>
                                    <td>
                                       <div class="d-flex align-items-center">

                                            <div class="eSwitches">
                                                <div class="form-check form-switch">
                                                    <input
                                                        onchange="silentAction('<?php echo e(route('admin.theme.status', ['id' => $theme->id])); ?>'); themeSwitcher(this);"
                                                        class="form-check-input form-switch-medium no-disabled" name="home_page" type="checkbox" <?php if($theme->status == 1): ?> checked disabled <?php endif; ?>>
                                                </div>
                                            </div>
                                           <?php if($theme->status == 1): ?>
                                            <a href="<?php echo e(route('home')); ?>" class="btn ol-btn-outline-secondary ol-btn-sm" target="_blank"><?php echo e(get_phrase('Preview')); ?></a>
                                            <?php endif; ?>
                                       </div>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('admin.theme.edit', ['id' => $theme->id])); ?>" data-bs-toggle="tooltip" title="<?php echo e(get_phrase('Edit')); ?>" class="btn btn-primary-light btn-icon"><i class="fi-rr-pencil"></i></a>
                                        
                                        <a href="<?php echo e(route('admin.page.layout.edit', ['id' => $theme->id])); ?>" target="_blank" data-bs-toggle="tooltip" title="<?php echo e(get_phrase('Edit Layout')); ?>" class="btn btn-primary-light btn-icon"><i class="fi-rr-eye"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <!-- Data info and Pagination -->
                <?php if($counted > 0): ?>
                    <div class="admin-tInfo-pagi d-flex justify-content-between justify-content-center align-items-center flex-wrap gr-15">
                        <?php echo e($themes->links()); ?>

                    </div>
                <?php endif; ?>
            <?php else: ?>
                
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script>
        "use strict";

        function themeSwitcher(elem){
            $('.form-switch-medium').not(elem).prop('disabled', false);
            $('.form-switch-medium').not(elem).prop('checked', false);

            setTimeout(() => {
                $(elem).prop('checked', true);
                $(elem).prop('disabled', true); 
                 success('Theme activated successfully');
                  location.reload();

            }, 200);
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\elevate\resources\views/admin/theme/themes.blade.php ENDPATH**/ ?>