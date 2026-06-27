



<!-- Testimonial Area Start -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mb-30px">
                    <h1 class="mv-title-40px text-center wow animate__fadeInUp  builder-editable" builder-identity="27" data-wow-delay=".2s"><?php echo e(get_phrase('What People Are Saying')); ?></h1>
                </div>
            </div>
        </div>
        <div class="row mb-100px wow animate__fadeInUp" data-wow-delay=".4s">
            <div class="col-12">

                <div class="swiper testimonial testimonial-shadow">
                    <div class="swiper-wrapper">
                        <?php 
                           $reviews = App\Models\Review::where('rating', 5)->latest()->take(10)->get(); 
                        ?>
                        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="swiper-slide">
                            <div class="single-testimonial-card">
                                <div class="d-flex align-items-center gap-1 mb-3">
                                    <?php for($i = 1; $i <= 5; $i++): ?>
                                      <img src="<?php echo e(asset('assets/frontend/fashion/images/image-icons/star-yellow-14.svg')); ?>" alt="star">
                                    <?php endfor; ?>
                                </div>
                                <p class="al-subtitle-16px fsh-text-dark mb-4"><?php echo e($review->comment); ?></p>
                                <h4 class="al-title-16px mb-2"><?php echo e($review->user->name); ?></h4>
                                <p class="al-subtitle-14px lh-1"><?php echo e($review->created_at->format('F j, Y')); ?></p>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Area End --><?php /**PATH C:\laragon\www\elevate\resources\views/components/home_made_by_builder/fashion/testimonials.blade.php ENDPATH**/ ?>