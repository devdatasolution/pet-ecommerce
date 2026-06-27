<?php $__env->startPush('title', get_phrase('System settings')); ?>
<?php $__env->startPush('meta'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>


    <div class="row">
        <div class="col-md-7">
            <div class="ol-card p-4">
                <div class="ol-card-body">
                    <form action="<?php echo e(route('admin.system.settings.update')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="mb-3">
                            <label for="system_name" class="form-label ol-form-label"><?php echo e(get_phrase('System name')); ?></label>
                            <input type="text" value="<?php echo e(get_settings('system_name')); ?>" name="system_name" class="form-control ol-form-control" id="system_name" placeholder="<?php echo e(get_phrase('Enter system name')); ?>" aria-label="<?php echo e(get_phrase('Enter system name')); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="system_title" class="form-label ol-form-label"><?php echo e(get_phrase('System title')); ?></label>
                            <input type="text" value="<?php echo e(get_settings('system_title')); ?>" name="system_title" class="form-control ol-form-control" id="system_title" placeholder="<?php echo e(get_phrase('Enter system title')); ?>" aria-label="<?php echo e(get_phrase('Enter system title')); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="system_email" class="form-label ol-form-label"><?php echo e(get_phrase('System email')); ?></label>
                            <input type="email" value="<?php echo e(get_settings('system_email')); ?>" name="system_email" class="form-control ol-form-control" id="system_email" placeholder="<?php echo e(get_phrase('Enter system email')); ?>" aria-label="<?php echo e(get_phrase('Enter system email')); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label ol-form-label"><?php echo e(get_phrase('Phone')); ?></label>
                            <input type="text" value="<?php echo e(get_settings('phone')); ?>" name="phone" class="form-control ol-form-control" id="phone" placeholder="<?php echo e(get_phrase('Enter phone number')); ?>" aria-label="<?php echo e(get_phrase('Enter phone number')); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="summary" class="form-label ol-form-label"><?php echo e(get_phrase('Summary')); ?></label>
                            <textarea name="summary" id="summary" class="form-control" rows="4"><?php echo e(get_settings('summary')); ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label ol-form-label"><?php echo e(get_phrase('Address')); ?></label>
                            <textarea name="address" id="address" class="form-control"><?php echo e(get_settings('address')); ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="active_lan_id" class="form-label ol-form-label"><?php echo e(get_phrase('System language')); ?></label>
                            <select class="ol-select2" name="active_lan_id" id="active_lan_id">
                                <option value=""><?php echo e(get_phrase('Select a category')); ?></option>
                                <?php $__currentLoopData = App\Models\Language::get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($language->id); ?>" <?php if($language->id == get_settings('active_lan_id')): ?> selected <?php endif; ?>><?php echo e($language->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="purchase_code" class="form-label ol-form-label"><?php echo e(get_phrase('Purchase code')); ?></label>
                            <input type="text" value="<?php echo e(get_settings('purchase_code')); ?>" name="purchase_code" class="form-control ol-form-control" id="purchase_code" placeholder="<?php echo e(get_phrase('Enter purchase code')); ?>" aria-label="<?php echo e(get_phrase('Enter purchase code')); ?>" required>
                        </div>

                         <div class="mb-3">
                            <label for="verification" class="form-label ol-form-label"> <?php echo e(get_phrase('Email Verification')); ?> </label>
                            <select name="signup_email_verification" id="verification" class="form-control ol-form-control ol-select2"  required>
                                <option value=""><?php echo e(get_phrase('Select email verification')); ?> </option>
                                <option value="1" <?php if(get_settings('signup_email_verification') == 1): ?> selected <?php endif; ?>>
                                    <?php echo e(get_phrase('Enable')); ?>

                                </option>
                                <option value="0" <?php if(get_settings('signup_email_verification') == 0): ?> selected <?php endif; ?>>
                                    <?php echo e(get_phrase('Disable')); ?>

                                </option>  
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="timezone" class="form-label ol-form-label"><?php echo e(__('TimeZone')); ?></label>
                            <select class="ol-select2" id="timezone" name="timezone">
                                <?php $tzlist = DateTimeZone::listIdentifiers(DateTimeZone::ALL); ?>
                                <?php foreach ($tzlist as $tz): ?>
                                    <option value="<?php echo e($tz); ?>" <?php echo e($tz == get_settings('timezone') ? 'selected' : ''); ?>><?php echo e($tz); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        
                         <div class="fpb-7 mb-3">
                            <label class="form-label ol-form-label" for="facebook"><?php echo e(get_phrase('Facebook')); ?></label>
                            <input type="text" name = "contact_facebook" id = "facebook" class="form-control ol-form-control" value="<?php echo e(get_settings('contact_facebook')); ?>">
                        </div>

                        <div class="fpb-7 mb-3">
                            <label class="form-label ol-form-label" for="twitter"><?php echo e(get_phrase('Twitter')); ?></label>
                            <input type="text" name = "contact_twitter" id = "twitter" class="form-control ol-form-control" value="<?php echo e(get_settings('contact_twitter')); ?>">
                        </div>

                        <div class="fpb-7 mb-3">
                            <label class="form-label ol-form-label" for="linkedin"><?php echo e(get_phrase('Linkedin')); ?></label>
                            <input type="text" name = "contact_linkedin" id = "linkedin" class="form-control ol-form-control" value="<?php echo e(get_settings('contact_linkedin')); ?>">
                        </div>
                        <div class="fpb-7 mb-3">
                            <label class="form-label ol-form-label" for="instagram"><?php echo e(get_phrase('Instagram')); ?></label>
                            <input type="text" name = "contact_instagram" id = "instagram" class="form-control ol-form-control" value="<?php echo e(get_settings('contact_instagram')); ?>">
                        </div>

                        <div class="mb-3">
                            <label for="system_video" class="form-label ol-form-label"><?php echo e(get_phrase('System Video')); ?></label>
                            <input type="text" value="<?php echo e(get_settings('system_video')); ?>" name="system_video" class="form-control ol-form-control" id="system_video" placeholder="<?php echo e(get_phrase('Enter system video')); ?>" aria-label="<?php echo e(get_phrase('Enter system video')); ?>">
                        </div>

                        <div class="mb-2">
                            <button class="btn ol-btn-primary"><?php echo e(get_phrase('Save changes')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="ol-card p-4">
                <h3 class="title text-14px mb-3"><?php echo e(get_phrase('Update your software version')); ?></h3>
                <div class="ol-card-body">
                    <div class="col-lg-12">
                        <form action="<?php echo e(route('admin.setting.version.update')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="fpb-7 mb-3">
                                <label class="form-label ol-form-label" class=""><?php echo e(get_phrase('Update pack')); ?> <small>(.zip)</small></label>

                                <input type="file" class="form-control ol-form-control" id="file_name" name="file" required onchange="changeTitleOfImageUploader(this)">
                                <small>
                                    <?php echo get_phrase('Your current version is ____', '<b>'.get_settings('version').'</b>'); ?>

                                </small>
                            </div>

                            <button type="submit" class="btn ol-btn-primary"><?php echo e(get_phrase('Update')); ?></button>
                        </form>
                    </div>
                </div> <!-- end card body-->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\elevate\resources\views/admin/settings/system_settings.blade.php ENDPATH**/ ?>