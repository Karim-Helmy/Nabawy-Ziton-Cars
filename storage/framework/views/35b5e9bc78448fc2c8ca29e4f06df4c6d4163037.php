
<?php $__env->startSection('content'); ?>



    <?php echo $__env->make('front.layouts.pages-banner', [ $results['page_name'] ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>




<?php $__currentLoopData = $results['result']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="page-content bg-white">

                <?php echo $result->description; ?>


        <?php echo $__env->make('front.layouts.brands', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>