<?php $__env->startSection('content'); ?>



    <?php echo $__env->make('front.layouts.pages-banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<style>
    h3 {
        background: #d0241f;
        padding: 10px;
        color: #fff;
    }
</style>

<div class="content-area">
    <!-- Career -->
    <div class="container">
        <div class="row">
            <!-- Left part start -->
            <div class="col-sm-12 col-md-12 col-lg-12 m-b30" style="float:right !important;text-align:right">
                <h1 class="m-b20 m-t0">مرحبا بكم في بنود سياسة الأستخدام الخاصة بموقع النبوى زيتون  </h1>
                
                <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php echo $result->description; ?>


                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
            <!-- Left part END -->
        </div>
    </div>
    <!-- Career END -->
    <?php echo $__env->make('front.layouts.brands', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>