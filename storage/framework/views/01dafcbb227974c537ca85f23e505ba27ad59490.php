


<?php $__env->startSection('content'); ?>



    <?php echo $__env->make('front.layouts.pages-banner', [ $results['model_name'] ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>





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

                    <div id="masonry" class="dlab-blog-grid-3">


                        <?php $__currentLoopData = $result['single_brand_data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <?php 

                            $result->parent_id = Crypt::encrypt($result->parent_id);
                            $result->products_id = Crypt::encrypt($result->products_id);
                         ?> 

                           <div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="dlab-feed-list m-b30" >
                                    <a href=" <?php echo e(url("/brands/$result->parent_id/product/$result->products_id/")); ?> ">
                                    <div class="dlab-media" style="height: 150px!important;">
                                        
                                        <?php if($result->specials_id !== null): ?>
                                        <div class="featured"
                                        style="background: #D81517;
                                        color: #fff;
                                        transform: rotate(45deg);
                                        text-align: center;
                                        position: relative;
                                        top: 25px;
                                        padding: 5px;
                                        left: 100px;"
                                        >
                                        عرض خاص
                                        </div>
                                        <?php endif; ?>
                                            <?php if($result->manufacturers_id == 7): ?>
                                                <div class="featured"
                                                     style="background: greenyellow;
                                        color: black;
                                        transform: rotate(45deg);
                                        text-align: center;
                                        position: relative;
                                        top: 25px;
                                        padding: 5px;
                                        left: 100px;"
                                                >
                                                   مستعمل
                                                </div>
                                            <?php endif; ?>
                                        <img src="<?php echo e(asset('').'/'.$result->products_image); ?>" alt="" style="height: 150px!important;">
                                    </div>
                                    </a>
                                    <div class="dlab-info">
                                        <h4 class="dlab-title">
                                            <a href=" <?php echo e(url("/brands/$result->parent_id/product/$result->products_id/")); ?> "> <?php echo e($result->products_name); ?> </a>
                                        </h4>
                                        <div class="dlab-separator bg-black"></div>
                                        <p class="dlab-price">
                                            <span class="text-primary">
                                                <?php if($result->specials_id != null): ?>

                                                <del> <?php echo e($result->products_price); ?> </del>

                                                    <?php echo e($result->specials_products_price); ?> 
                                                <?php else: ?> 
                                                    <?php echo e($result->products_price); ?>

                                                <?php endif; ?>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="icon-box-btn text-center">
                                        <ul class="clearfix">
                                            <li>
                                            <?php echo e(( !empty( $result->products_model ) ) ? $result->products_model : '-'); ?> 
                                            </li>
                                            <li>
                                                مشاهدة <?php echo e($result->products_viewed); ?> 
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </div>

                    <!-- blog grid END -->
                    
                </div>
            </div>

            

                <?php echo $__env->make('front.layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            
            
        </div>
    </div>
    <?php echo $__env->make('front.layouts.brands', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>