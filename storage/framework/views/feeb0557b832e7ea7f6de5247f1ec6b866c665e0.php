

<?php $__env->startSection('content'); ?>


<?php echo $__env->make('front.layouts.pages-banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->

        <!-- Breadcrumb row END -->
        <div class="section-full content-inner bg-white">
            <div class="container">
                <div class="row">
                    <!-- left part start -->
                    <div class="col-md-9 col-sm-8 blog-sticky-left text-right" >
                        <div class="row">
                        <?php if(count($news)>0): ?>
                            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-- blog grid -->
                                <?php 
                                    // Encryptind news ID
                                        $new->news_id = Crypt::encrypt($new->news_id);
                                 ?>
                            <div id="masonry" class="dlab-blog-grid-3" style="direction: rtl">
                                <div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="blog-post blog-grid date-style-2">
                                        <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="<?php echo e(url("/singelnews/$new->news_id")); ?>"><img style="height: 250px;" src="<?php echo e(asset('').'/'.$new->news_image); ?>" alt=""></a> </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-title ">
                                                <h3 class="post-title"><a href="<?php echo e(url("/singelnews/$new->news_id")); ?>"><?php echo e($new->news_name); ?></a></h3>
                                            </div>
                                            <div class="dlab-post-meta ">
                                                <ul>
                                                    <li class="post-date"> <i class="fa fa-calendar"></i><?php echo e(date('d M, Y', strtotime($new->news_date_added))); ?> </li>
                                                    <li class="post-author"><i class="fa fa-user"></i> <a href="#">النبوى زيتون</a> </li>

                                                </ul>
                                            </div>
                                            <div class="dlab-post-text">
                                                <p><?php echo e(strip_tags(str_limit($new->news_description , 100))); ?></p>
                                            </div>
                                            <div class="dlab-post-readmore"> <a href="<?php echo e(url("/singelnews/$new->news_id")); ?>" title="READ MORE" rel="bookmark" class="site-button-link"> اقرأ المزيد<i class="fa fa-angle-double-left"></i></a> </div>
                                            
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- blog grid END -->
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6"><?php echo e(trans('labels.NoRecordFound')); ?>.</td>
                                </tr>
                        <?php endif; ?>
                            <!-- Pagination -->
                            <div class="pagination-bx col-lg-12 clearfix ">
                                <ul class="pagination">
                                    <?php echo e($news->links()); ?>

                                </ul>
                            </div>
                            <!-- Pagination END -->
                        </div>
                    </div>
                    <!-- left part END -->
                    

                    <?php echo $__env->make('front.layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    
                </div>
            </div>
        </div>
        <?php echo $__env->make('front.layouts.brands', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <!-- Left & right section END -->
    <!-- Content END-->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>