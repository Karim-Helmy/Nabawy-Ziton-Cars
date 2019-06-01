<!-- Side bar start -->
<div class="col-sm-3 col-md-3 col-lg-3 sticky-top">
        <aside  class="side-bar">

            <div class="widget recent-posts-entry">

                <h4 class="widget-title" style="float: right">احدث السيارات</h4>

                <div class="widget-post-bx" style="float: right; margin-bottom: 30px;">

                    <?php if( count( $sidebar_results['products'] ) > 0 ): ?>
                        <?php $__currentLoopData = $sidebar_results['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php 
                            $product->products_id = Crypt::encrypt($product->products_id);
                            $product->categories_id = Crypt::encrypt($product->categories_id);
                         ?>
                            <div class="widget-post clearfix" style="direction: rtl">
                                <div class="dlab-post-media"> <img src="<?php echo e(asset('').'/'.$product->products_image); ?>" alt="" width="200" height="143"> </div>
                                <div class="dlab-post-info">
                                    <div class="dlab-post-header">
                                        <h5><a href=" <?php echo e(url("/brands/$product->categories_id/product/$product->products_id")); ?> "><?php echo e($product->products_name); ?></a></h5>
                                    </div>
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-author open-sans"><b><?php echo e($product->products_price); ?> جنيه</b></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    
                    <a href=" <?php echo e(url('/brands')); ?> " class="site-button btn-block text-center">عرض المزيد</a>
                </div>
            </div>

            <div class="widget ads">
                <img src="<?php echo e(url('public/front/assets/images/ads/img2.jpg')); ?>" alt=""/>
            </div>

            <div class="widget client-logo-wg" >
                <h4 class="widget-title" style="float: right">احدث الماركات</h4>
                <ul style="float: right">
                    <?php $__currentLoopData = $sidebar_results['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php 
                        $categories->id  = Crypt::encrypt($categories->id);
                     ?>
                        <li class="brand-logo" >
                            <a href=" <?php echo e(url("/brands/$categories->id")); ?> "><img src="<?php echo e(asset('').'/'.$categories->image); ?>" alt="<?php echo e($categories->name); ?>"/></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>

        </aside>
    </div>
    <!-- Side bar END -->
    