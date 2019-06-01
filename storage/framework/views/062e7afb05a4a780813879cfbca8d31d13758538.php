<!-- Client logo Carousel -->
<div class="section-full bg-img-fix p-t30 p-b30 ">
    <div class="container">
        <div class="section-content">
            <div class="client-logo-carousel owl-carousel mfp-gallery gallery owl-btn-center-lr">
                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php 
                    $categories->id = Crypt::encrypt($categories->id);
                 ?>
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo">
                                <a href="<?php echo e(url("/brands/$categories->id")); ?>">
                                    <img 
                                        src="<?php echo e(asset('').'/'.$categories->image); ?>" 
                                        alt="<?php echo e($categories->name); ?>"
                                        style="height: 70px!important"
                                        >
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<!-- Client logo Carousel END -->