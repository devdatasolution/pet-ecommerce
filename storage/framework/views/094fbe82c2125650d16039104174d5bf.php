<?php $__env->startPush('title', get_phrase('Store List')); ?>
<?php $__env->startPush('meta'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>

    <div class="ol-card">
       
        <div class="ol-card-body p-3 mb-5">
            <div class="row mb-4">
                <div class="col-md-6 d-flex align-items-center flex-wrap gap-3">
                    <a href="<?php echo e(route('admin.store.add')); ?>" class="btn ol-btn-outline-secondary d-flex align-items-center cg-10px">
                        <span class="fi-rr-plus"></span>
                        <span><?php echo e(get_phrase('Add new Store')); ?></span>
                    </a>
                    <div class="custom-dropdown ms-2">
                        <button class="dropdown-header btn ol-btn-light"> 
                            <?php echo e(get_phrase('Export')); ?> 
                            <i class="fi-rr-file-export ms-2"></i>
                        </button>
                        <ul class="dropdown-list">
                            <li>
                                <a class="dropdown-item export-btn" href="javascript:;" onclick="downloadPDF('.print-table', 'Store-list')"><i class="fi-rr-file-pdf"></i> <?php echo e(get_phrase('PDF')); ?></a>
                            </li>
                            <li>
                                <a class="dropdown-item export-btn" href="javascript:;" onclick="window.print();"><i class="fi-rr-print"></i> <?php echo e(get_phrase('Print')); ?></a>
                            </li>
                        </ul>
                    </div>

                    <div class="custom-dropdown dropdown-filter <?php if(!isset($_GET) || (isset($_GET) && count($_GET) == 0)): ?>  <?php endif; ?>">
                        <button class="dropdown-header btn ol-btn-light">
                            <i class="fi-rr-filter me-2"></i>
                            <?php echo e(get_phrase('Filter')); ?>


                        </button>
                        <ul class="dropdown-list w-250px">
                            <li>
                                <form id="filter-dropdown" action="<?php echo e(route('admin.stores')); ?>" method="get">
                                    <input type="hidden" name="search" value="<?php echo e(request('search')); ?>">
                                    <div class="filter-option d-flex flex-column gap-3">
                                        <div>
                                            <label for="eDataList" class="form-label ol-form-label"><?php echo e(get_phrase('Owner')); ?></label>
                                            <select class="form-control ol-form-control ol-select2" data-toggle="select2" name="owner_id" class="ol-select-2" data-placeholder="Type to search...">
                                                <option value="all"><?php echo e(get_phrase('All')); ?>

                                                </option>
                                                <?php $__currentLoopData = App\Models\User::whereIn('id', App\Models\Store::pluck('user_id')->unique())->orderBy('name')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($user->id); ?>" <?php if(request('owner_id') == $user->id): ?> selected <?php endif; ?>>
                                                        <?php echo e(ucfirst($user->name)); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="filter-button d-flex justify-content-end align-items-center mt-3">
                                        <button type="submit" class="ol-btn-primary"><?php echo e(get_phrase('Apply')); ?></button>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>

                    <?php if(isset($_GET) && count($_GET) > 0): ?>
                        <a href="<?php echo e(route('admin.stores')); ?>" class="me-2" data-bs-toggle="tooltip" title="<?php echo e(get_phrase('Clear')); ?>"><i class="fi-rr-cross-circle"></i></a>
                    <?php endif; ?>
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <form action="<?php echo e(route('admin.stores')); ?>" method="get">

                        <?php
                            $queries = request()->query();
                            unset($queries['search']);
                        ?>
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-7">
                                <div class="search-input flex-grow-1">
                                    <input type="text" name="search" value="<?php echo e(request('search')); ?>" placeholder="<?php echo e(get_phrase('Search by store name')); ?>" class="ol-form-control form-control" />
                                </div>
                            </div>
                            <div class="col-3">
                                <button type="submit" class="btn ol-btn-primary w-100" id="submit-button"><?php echo e(get_phrase('Search')); ?></button>
                            </div>
                        </div>
                        <?php $__currentLoopData = $queries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $query): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <input type="hidden" name="<?php echo e($key); ?>" value="<?php echo e($query); ?>">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </form>
                </div>
            </div>

            <?php if($counted = $stores->count() > 0): ?>
                <div class="table-responsive overflow-auto">
                    <table class="table print-table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col"><?php echo e(get_phrase('Store name')); ?></th>
                                <th scope="col"><?php echo e(get_phrase('Store Owner')); ?></th>
                                <th scope="col"><?php echo e(get_phrase('Phone')); ?></th>
                                <th scope="col"><?php echo e(get_phrase('Address')); ?></th>
                                <th scope="col"><?php echo e(get_phrase('Options')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th>
                                        <?php echo e(++$key); ?>

                                    </th>
                                    <td>
                                        <h3 class="title text-14px"><?php echo e($store->name); ?></h3>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center min-w-200px">
                                            <img class="image-40" width="40" height="40" src="<?php echo e(get_image($store->user->photo)); ?>">
                                            <div class="ms-2 mt-1">
                                                <h4 class="title fs-14px"><?php echo e($store->user->name); ?></h4>
                                                <p class="sub-title2 text-12px"><?php echo e($store->user->email); ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-light btn-icon" href="tel:<?php echo e($store->phone); ?>"><i class="fi-rr-phone-plus"></i></a> <?php echo e($store->phone); ?>

                                    </td>
                                    <td>
                                        <?php echo e($store->address); ?>

                                    </td>
                                    <td>
                                        <div class="print-d-none d-flex flex-wrap align-items-center gap-2 row-gap-2">
                                            <a href="<?php echo e(route('admin.store.edit', ['id' => $store->id])); ?>" data-bs-toggle="tooltip" title="<?php echo e(get_phrase('Edit')); ?>" class="btn btn-primary-light btn-icon"><i class="fi-rr-pencil"></i></a>
                                            
                                            <?php if(auth()->check() && auth()->user()->role_id == 1 && auth()->id() != $store->user_id): ?>
                                                <a href="#"
                                                onclick="confirmModal('<?php echo e(route('admin.store.delete', ['id' => $store->id])); ?>')"
                                                data-bs-toggle="tooltip"
                                                title="<?php echo e(get_phrase('Delete')); ?>"
                                                class="btn btn-danger-light btn-icon">
                                                    <i class="fi-rr-trash"></i>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <!-- Data info and Pagination -->
                <?php if($counted > 0): ?>
                    <div class="admin-tInfo-pagi d-flex justify-content-between justify-content-center align-items-center flex-wrap gr-15">
                        <?php echo e($stores->links()); ?>

                    </div>
                <?php endif; ?>
            <?php else: ?>
                <?php echo $__env->make('admin.data_not_found', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\elevate\resources\views/admin/store/stores.blade.php ENDPATH**/ ?>