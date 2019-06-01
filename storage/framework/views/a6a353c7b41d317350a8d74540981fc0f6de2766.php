

<?php $__env->startSection('content'); ?>



    <?php echo $__env->make('front.layouts.pages-banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>




<!-- About -->
		
    <div class="section-full p-t50 bg-white content-inner">
        <div class="container">
            <div class="section-head text-center head-1">
                <span class="text-primary">من نحن ؟</span>
                <h3 class="h3 text-uppercase">مرحباً بكم في موقع النبوى زيتون للسيارات ارخص سعر فى مصر 
                    <br>
                    ثقة تدوم لسنوات</h3>
                <div class="dlab-separator bg-gray-dark"></div>
                <?php echo e(strip_tags($about_section->description)); ?>

            </div>
        </div>
    </div>
    <!-- About End -->
     <!-- Stats -->
    <div class="section-full content-inner text-white bg-gray bg-img-fix overlay-black-middle" 
    style="background-image: url('<?php echo e(asset('/')."public/front/assets/images/background/bg2.jpg"); ?>');">
        <div class="container">
            <div class="section-content">
                 <div class="row">
                    <div class="col-md-3 col-sm-6 m-b30" style="">
                        <div class="counter-style-1">
                            <div class="">
                                    <i class="fa fa-car" aria-hidden="true" 
                                    style="
                                        font-size: 45px;
                                        margin-right: 10px;
                                        "></i>
                                <span class="counter">5608</span>
                            </div>
                            <span class="counter-text"> سيارة </span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 m-b30">
                        <div class="counter-style-1">
                            <div class="">
                                <i class="icon flaticon-mechanic"></i>
                                <span class="counter">4562</span>
                            </div>
                            <span class="counter-text"> عميل سعيد </span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 m-b30">
                        <div class="counter-style-1">
                            <div class="">
                                <i class="icon flaticon-speech-bubble"></i>
                                <span class="counter">3569</span>
                            </div>
                            <span class="counter-text"> استفسار تمت الأجابة عنه </span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 m-b30">
                        <div class="counter-style-1">
                            <div class="">
                                <i class="icon flaticon-steering-wheel"></i>
                                <span class="counter"><?php echo e($products_numbers); ?></span>
                            </div>
                            <span class="counter-text"> منتج حالي </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Stats End -->

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>