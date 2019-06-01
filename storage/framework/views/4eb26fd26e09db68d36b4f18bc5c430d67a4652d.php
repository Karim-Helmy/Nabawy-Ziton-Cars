

<?php $__env->startSection('content'); ?>
    
        <?php echo $__env->make('front.layouts.pages-banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    

    <div class="container">
        <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-9">
                        <div class="row" >
                
                            <div class="p-lr15 clearfix m-b15">
                                <h2 class="h2 m-t30 text-right">أخر العروض</h2>
                            </div>
                
                            <div id="masonry" class="dlab-blog-grid-3">

                                <?php $__currentLoopData = $offered_projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php 
                                        $project->products_id = Crypt::encrypt($project->products_id);
                                        $project->parent_id = Crypt::encrypt($project->parent_id);
                                     ?>
                                <div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12" style="float: right;">
                                    <div class="dlab-feed-list m-b30">
                                        <div class="dlab-media"> 
                                            <a href="<?php echo e(url("/brands/$project->parent_id/products/$project->products_id")); ?>"><img src="<?php echo e(asset('/')."/".$project->products_image); ?>" alt=""></a> 
                                        </div>
                                        <div class="dlab-info">
                                            <h4 class="dlab-title"><a href="<?php echo e(url("/brands/$project->parent_id/product/$project->products_id")); ?>">
                                                <?php echo e($project->products_name); ?> 
                                            </a></h4>
                                            <div class="dlab-separator bg-black"></div>
                                            <p class="dlab-price"><del><?php echo e($project->products_price); ?></del> <span class="text-primary"><?php echo e($project->specials_new_products_price); ?></span></p>
                                        </div>
                                        <div class="icon-box-btn text-center">
                                            <span><strong><?php echo e($project->products_model); ?></strong></span>
                                        </div>
                                    </div>
                                </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </div>
                
                        </div>
                    </div>


                

                    <?php echo $__env->make('front.layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>