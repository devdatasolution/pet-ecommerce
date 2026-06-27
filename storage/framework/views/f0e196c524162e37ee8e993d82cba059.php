


<style>
    .sponsor-slider .swiper-wrapper {
	display: flex;
	justify-content: center;
	gap: 12px;
}
</style>
<!-- Sponsors Area Start -->
<section class="overflow-hidden">
    <div>
        <div class="row mb-100px">
            <div class="col-12">
                <!-- Swiper -->
                <div class="swiper sponsor-slider">
                    <div class="swiper-wrapper">
                        <!-- Single Slide -->
                        <?php 
                            $brands = App\Models\Brand::get();
                        ?>
                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">
                                <div class="single-sponsor-wrap">
                                    <img src="<?php echo e(get_image($brand->logo)); ?>" alt="sponsor">
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- Single Slide -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sponsors Area End -->
<?php /**PATH C:\laragon\www\elevate\resources\views/components/home_made_by_builder/fashion/brands.blade.php ENDPATH**/ ?>