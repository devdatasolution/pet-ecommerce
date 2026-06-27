



<!-- Start Category Highlight -->
<section>
    <div class="container section-mb">
        <div class="row">
            <div class="col-12">
                <div class="section-title-area mx-auto cetegory-st-mb">
                    <p class="title-badge mx-auto mb-30px wow animate__fadeInUp builder-editable" builder-identity="sC1" data-wow-delay=".1s"><?php echo e(get_phrase('Category highlight')); ?></p>
                    <h2 class="section-title text-capitalize text-center mb-20px wow animate__fadeInUp builder-editable" builder-identity="sC2" data-wow-delay=".2s"><?php echo e(get_phrase('Curated Collections for Every Walk of Life')); ?></h2>
                    <p class="section-subtitle text-center text-capitalize section-subtitle-max-w mx-auto mb-30px wow animate__fadeInUp builder-editable" builder-identity="sC3" data-wow-delay=".3s"><?php echo e(get_phrase('Explore top picks for every vibe men’s, women’s, sport, and casual.')); ?></p>
                    <div class="text-center wow animate__fadeInUp" data-wow-delay=".4s">
                        <a href="<?php echo e(route('all_products')); ?>" class="btn sh1-btn-dark builder-editable" builder-identity="sC4"><?php echo e(get_phrase('View Products')); ?></a>
                    </div>
                </div>
            </div>
        </div>
         <?php
            $categories = App\Models\Category::where('parent_id', '=', 0)->orderBy('sort', 'asc')->orderBy('title', 'asc')->get();
        ?>
            <?php $__currentLoopData = $categories->chunk(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <div class="row g-3 wow animate__fadeInUp" data-wow-delay=".2s">
                    <div class="col-sm-6 col-md-6 col-lg-4 order-sm-1 order-md-1 order-lg-1">
                        <?php if(isset($category[0])): ?>
                            <a href="javascript:;" class="lng-category-card">
                                <img class="banner" src="<?php echo e(get_image($category[0]->thumbnail)); ?>" alt="category">
                                <h3 class="category-card-title text-capitalize"><?php echo e($category[0]->title); ?></h3>
                            </a>
                        <?php endif; ?>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-4 order-sm-3 order-md-3 order-lg-2">
                        <div class="d-flex flex-column flex-sm-row flex-lg-column gap-20px">
                            <?php if(isset($category[1])): ?>
                                <a href="javascript:;" class="sml-category-card">
                                    <img class="banner" src="<?php echo e(get_image($category[1]->thumbnail)); ?>" alt="category">
                                    <h3 class="category-card-title text-capitalize"><?php echo e($category[1]->title); ?></h3>
                                </a>
                            <?php endif; ?>
                            <?php if(isset($category[2])): ?>
                                <a href="javascript:;" class="sml-category-card">
                                    <img class="banner" src="<?php echo e(get_image($category[2]->thumbnail)); ?>" alt="category">
                                    <h3 class="category-card-title text-capitalize"><?php echo e($category[2]->title); ?></h3>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4 order-sm-2 order-md-2 order-lg-3">
                        <?php if(isset($category[3])): ?>
                            <a href="javascript:;" class="lng-category-card">
                                <img class="banner" src="<?php echo e(get_image($category[3]->thumbnail)); ?>" alt="category">
                                <h3 class="category-card-title text-capitalize"><?php echo e($category[3]->title); ?></h3>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<!-- End Category Highlight --><?php /**PATH C:\laragon\www\elevate\resources\views/components/home_made_by_developer/fashion/category.blade.php ENDPATH**/ ?>