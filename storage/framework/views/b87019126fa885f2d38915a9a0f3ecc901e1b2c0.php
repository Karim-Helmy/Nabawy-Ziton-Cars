

<style>
    dl {
        border-bottom: .5px solid #D81517;

    }
</style>
<?php $__env->startSection('content'); ?>



    <?php echo $__env->make('front.layouts.pages-banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>




    


<div class="section-full content-inner bg-white">
    <div class="container">
        <div class="row">

            <!-- left part start -->

            <div class="col-sm-9 col-md-9 col-lg-9">
                <div class="row m-b30">
                    
                    <div class="col-xs-12 col-md-6 col-lg-6 text-center">
                        <img style=" " src="<?php echo e(asset('/').$insurance_data->image); ?>" alt="">
                    </div>
                    
                    <div class="p-lr15 clearfix m-b15 col-xs-12 col-md-6 col-lg-6 text-right">
                        <h1 class="widget-title" ><?php echo e($pageTitle); ?></h1>
                    </div>
                </div>
                <div class="row">

                    <!-- blog grid  -->
                    <div class="col-xs-12 text-right">
                        <dl>
                            <dt> قيمة القسط </dt>
                            <dd> <?php echo e($insurance_data->kest); ?> </dd>
                        </dl>
                        <dl>
                            <dt> نوع التغطية </dt>
                            <dd> <?php echo e($insurance_data->taghtya); ?> </dd>
                        </dl>
                        <dl>
                            <dt> نسبة تحمل التعميل </dt>
                            <dd> <?php echo e($insurance_data->nesbat_ameel); ?> </dd>
                        </dl>
                        <dl>
                            <dt> المسئولية المدنية </dt>
                            <dd> <?php echo e($insurance_data->madanya); ?> </dd>
                        </dl>
                        <dl>
                            <dt> نسبة الاهلاك </dt>
                            <dd> <?php echo e($insurance_data->destruction); ?> </dd>
                        </dl>
                        <dl>
                            <dt> نسبة الأهلاك الكلي </dt>
                            <dd> <?php echo e($insurance_data->ehlak); ?> </dd>
                        </dl>
                        <dl>
                            <dt> الحد الاقصى للتحمل دون محضر </dt>
                            <dd> <?php echo e($insurance_data->aksa); ?> </dd>
                        </dl>
                        <dl>
                            <dt> طريقة صرف قيمة التأمين </dt>
                            <dd> <?php echo e($insurance_data->sarf); ?> </dd>
                        </dl>
                    </div>


                    <div class="col-xs-12">

                    </div>

                </div>
            </div>

            <!-- left part END -->
            
            

                <?php echo $__env->make('front.layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                
            

            
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>