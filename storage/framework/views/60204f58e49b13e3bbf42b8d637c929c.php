<style>
    .fsh-form-control::placeholder{
        text-transform: lowercase;
    }
    .toggle-password{
        position: absolute;
        right: 12px;
        top: 50%;
        transform:translateY(-50%);
         cursor:pointer;
    }
    .w-20{
        width:20px;
    }
</style>

<div class="mb-20px">
    <h4 class="al-title-24px text-center dark"><?php echo e(get_phrase('Log In')); ?></h4>
</div>

<form action="<?php echo e(route('login')); ?>" method="post" class="form">
    <?php echo csrf_field(); ?>
    <div class="mb-4">
        <label for="email" class="form-label fsh-form-label"><?php echo e(get_phrase('Email')); ?></label>
        <input type="text" class="form-control fsh-form-control" id="email" name="email" placeholder="<?php echo e(get_phrase('Enter your email address')); ?>">
    </div>

    <div class="mb-20px">
        <label for="password" class="form-label fsh-form-label"><?php echo e(get_phrase('Password')); ?></label>
        <div class="input-password-wrap position-relative">
            
            <input type="password" class="form-control fsh-form-control password-field1" name="password" id="user-password1" placeholder="<?php echo e(get_phrase('Enter your Password')); ?>">

            <div class="password-icons toggle-password" data-target=".password-field1" >
                <!-- Default: password hidden, so show eye-slash -->
                <img class="eye-lock w-20" src="<?php echo e(asset('assets/frontend/fashion/images/image-icons/eye-slash-gray-20.svg')); ?>" alt="Hide">
                <img class="eye-unlock w-20 d-none" src="<?php echo e(asset('assets/frontend/fashion/images/image-icons/eye-gray-20.svg')); ?>" alt="Show">
            </div>
        </div>
    </div>

    <div class="mb-4">
        <div class="d-flex align-items-center gap-3 flex-wrap justify-content-between">
            <div class="form-check form-checkbox">
                <input class="form-check-input form-checkbox-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label form-checkbox-label" for="flexCheckDefault">
                    <?php echo e(get_phrase('Remember me')); ?>

                </label>
            </div>
            <a href="javascript:;" class="al-title-14px text-link" onclick="load_view('<?php echo e(route('view', ['path' => 'auth.forgot-password'])); ?>', '#formModal .modal-body')"><?php echo e(get_phrase('Forgot Password')); ?> ?</a>
        </div>
    </div>

    <button type="submit" class="btn fsh-btn-dark w-100 mb-12px"><?php echo e(strtoupper(get_phrase('LOG IN'))); ?></button>
    <a onclick="load_view('<?php echo e(route('view', ['path' => 'auth.register'])); ?>', '#formModal .modal-body')" class="btn fsh-btn-outline-secondary w-100"><?php echo e(strtoupper(get_phrase('CREATE ACCOUNT'))); ?></a>
    
</form>

<script>
"use strict";
$(document).ready(function () {
    $(".toggle-password").click(function () {
        const input = $($(this).data("target"));
        const eyeOpen = $(this).find(".eye-unlock"); 
        const eyeClose = $(this).find(".eye-lock");  

        if (input.attr("type") === "password") {
            // Show password → show open eye
            input.attr("type", "text");
            eyeOpen.removeClass("d-none");
            eyeClose.addClass("d-none");
        } else {
            // Hide password → show slash eye
            input.attr("type", "password");
            eyeOpen.addClass("d-none");
            eyeClose.removeClass("d-none");
        }
    });
});
</script>
<?php /**PATH C:\laragon\www\elevate\resources\views/auth/login_modal.blade.php ENDPATH**/ ?>