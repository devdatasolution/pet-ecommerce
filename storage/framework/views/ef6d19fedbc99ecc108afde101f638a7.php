



<!-- Featured Area Start -->
<section>
    <div class="container">
        <div class="row mb-30px wow animate__fadeInUp" data-wow-delay=".2s">
            <div class="col-12">
                <h1 class="mu-title-36px text-center builder-editable" builder-identity="1"><?php echo e(get_phrase('Featured Categories')); ?></h1>
            </div>
        </div>
        <div class="row section-margin wow animate__fadeInUp" data-wow-delay=".3s">
            <div class="col-12">
                <!-- Swiper -->
                <div class="swiper category-slider">
                    <?php
                        $categories = App\Models\Category::where('parent_id', '=', 0)->orderBy('sort', 'asc')->orderBy('title', 'asc')->get();
                    ?>
                    <div class="swiper-wrapper">
                        <?php
                            $colors = ['salmon', 'purple', 'green', 'orange']; // Define the colors
                        ?>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">
                                <a href="<?php echo e(route('products', get_category_params($category))); ?>" class="category-item bg-<?php echo e($colors[$index % count($colors)]); ?>-light">
                                    <div class="category-img">
                                        <img src="<?php echo e(get_image($category->thumbnail)); ?>" alt="category">
                                    </div>
                                    <div class="category-content">
                                        <h4 class="al-title-18px fw-medium mb-10px text-center"><?php echo e($category->title); ?></h4>
                                        
                                    </div>
                                </a> 
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Featured Area End -->
<?php /**PATH C:\laragon\www\elevate\resources\views/components/home_made_by_developer/grocery/featured.blade.php ENDPATH**/ ?>