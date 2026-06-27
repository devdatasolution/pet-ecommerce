


<!-- Top Header Start -->
<style>
    @media (max-width: 576px) {
    .header-phone {
        display: none !important;
    }

    .contact-wrapper {
         flex-direction: row !important;
        width: 100%;
        justify-content: space-between !important;
    }
}

</style>

<!-- Top Header Start -->
<section class="top-header-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-center justify-content-md-between flex-column flex-md-row flex-wrap column-gap-4 row-gap-2 contact-wrapper">
                    <div class="d-flex align-items-center flex-wrap column-gap-4 row-gap-2 justify-content-center justify-content-md-start flex-column flex-sm-row">
                        <div class="d-flex column-gap-2px align-items-start header-phone">
                            <img src="<?php echo e(asset('assets/frontend/grocery/images/image-icons/call-calling-white-18.svg')); ?>" alt="icon">
                            <p class="text-white mt-2px al-subtitle-14px lh-1"><?php echo e(get_settings('phone')); ?></p>
                        </div>
                        <div class="d-flex column-gap-2px align-items-start">
                            <img src="<?php echo e(asset('assets/frontend/grocery/images/image-icons/sms-white-18.svg')); ?>" alt="icon">
                            <p class="text-white mt-2px al-subtitle-14px lh-1"><?php echo e(get_phrase('Email')); ?> : <?php echo e(get_settings('system_email')); ?></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-wrap column-gap-4 row-gap-2 justify-content-center justify-content-md-end flex-column flex-sm-row">
                       
                        <?php
                            $active_language = App\Models\Language::where('id', session('active_lan_id') ?? get_settings('active_lan_id'))->firstOrNew();
                        ?>
                        <form action="<?php echo e(route('home.switch_language')); ?>" onchange="$(this).submit();">
                            <select name="active_lan_id" class="white-borderless-select right ec-nice-select list-index-1041">
                                <?php $__currentLoopData = App\Models\Language::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($language->id); ?>" <?php echo e($language->id == $active_language->id ? 'selected' : ''); ?>><?php echo e($language->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Top Header End --><?php /**PATH C:\laragon\www\elevate\resources\views/components/home_made_by_developer/grocery/header_top.blade.php ENDPATH**/ ?>