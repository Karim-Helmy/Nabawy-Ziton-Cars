


<?php $__env->startSection('content'); ?>



    <?php echo $__env->make('front.layouts.pages-banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>







<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=260020104655754&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>





<div class="section-full content-inner bg-white">
    <div class="container">
        <div class="row">

            <!-- left part start -->

            <div class="col-sm-9 col-md-9 col-lg-9">
                <div class="row">
                    <div class="p-lr15 clearfix m-b15">
                        <h1 class="widget-title" style="float: right"><?php echo e($pageTitle); ?></h1>
                    </div>
                    <!-- blog grid  -->
                        <?php $__currentLoopData = $results['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php 
                        // Encryptind Brand_ID
                            $categories->categories_id = Crypt::encrypt($categories->categories_id);
                         ?>
                        <div 
                            class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center" style="float:right;">
                            <a href="<?php echo e(url("/brands/$categories->categories_id/")); ?>">
                                <div style="width: 95%;height: 150px;padding: 10px;border: 1px solid #eee;margin: 15px auto;box-shadow: 0px 2px 0px #ccc;">
                                    <img src="<?php echo e(asset('').'/'.$categories->categories_image); ?>" alt="<?php echo e($categories->categories_name); ?>" style="height: 90px;">
                                    <h4 style="text-align: center" style="font-weight: bold !important;">
                                        <?php echo e($categories->categories_name); ?>

                                    </h4>
                                </div>
                            </a>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <!-- blog grid END -->
                    <div class="fb-comments" data-href="https://www.facebook.com/elnabwey/" data-width="100%" data-numposts="41"></div>
                </div>
            </div>

            <!-- left part END -->
            
            

                <?php echo $__env->make('front.layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                
            

            
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>