


<?php $__env->startSection('content'); ?>



    <?php echo $__env->make('front.layouts.pages-banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>








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
                        <?php $__currentLoopData = $insurancesData['insurances']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$Insurances): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php 
                            $Insurances->id = Crypt::encrypt($Insurances->id);
                         ?>
                        <div 
                            class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center" 
                            style="float:right;">
                            <a href="<?php echo e(route('single_insurance', $Insurances->id)); ?>">
                                <div style="padding: 10px;border: 1px solid #eee;margin: 15px auto;box-shadow: 0px 2px 0px #ccc;">
                                    <img src="<?php echo e(asset('').$Insurances->image); ?>" alt="<?php echo e($Insurances->name); ?>" 
                                    style="
                                        width: 100%;
                                        height: 200px;
                                    ">
                                    <h4 style="text-align: center" style="font-weight: bold !important;">
                                        <?php echo e($Insurances->name); ?>

                                    </h4>
                                </div>
                            </a> 
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <!-- blog grid END -->

                </div>
            </div>

            <!-- left part END -->
            
            

                <?php echo $__env->make('front.layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                
            

            
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>