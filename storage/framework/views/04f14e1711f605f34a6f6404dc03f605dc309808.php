<style>
    .overlay-black-dark:after, .overlay-black-light:after, .overlay-black-middle:after {
        background: none;
    }

    .dlab-bnr-inr:before {
        content: none;  
    }



    .used-car-banner {
        height: 720px;
    }</style>
<!-- inner page banner -->
<div class="dlab-bnr-inr overlay-black-middle used-car-banner latest-cars"
    style=" background-image:url('<?php echo e(asset('/').$pages_banner->banners_image); ?>');
            background-position: center;
            background-size: cover;
            width: 100vw;
            ">
   <div class="col-md-5 col-md-offset-6 col-sm-12" style="margin-top: 200px;direction: rtl">
        <h1 style="color: white;font-weight: bold;font-size: xx-large;line-height: 50px;"><?php echo e($pages_banner->banners_title); ?> </h1>
        <i class="fa fa-phone" style = "color : white;font-size: xx-large;margin-left: 20px;"></i>
        <h1 style="color: white;font-weight: bold;font-size: sm-large;
    display: inline;">01001883300 / 01025388822 / 01025377766 </h1>
        </div>
</div>

<!-- inner page banner END -->
<!-- Breadcrumb row -->

<div class="breadcrumb-row" style="direction: rtl">
    <div class="container">
        <ul class="list-inline">
            <li><a href="<?php echo e(url('/')); ?>"> الرئيسية </a></li>

            <?php
            $path_segment = 2;
            $sublink = '';
            ?>
            <?php for($i=1;$i < $path_segment; $i++): ?>

                <?php if(!empty(Request::segment($i)) and !is_numeric(Request::segment($i))): ?>

                    <?php if($i != 2): ?>
                        <?php $sublink .= '/'; ?>
                    <?php endif; ?>

                    <?php $sublink .= Request::segment($i); ?>
        
                    <?php 
                        if ( isset( $results['page_name'] ) ) :
                     ?>

                        <li> <a href="<?php echo e(url('/').$sublink); ?>"> <?php echo e($results['page_name']); ?> </a></li>

                    <?php 
                        else :        
                     ?>


                        <li> <a href="<?php echo e(url('/').$sublink); ?>"><?php echo e(trans('labels.'.Request::segment($i))); ?></a></li>

                            <?php 
                                if ( isset($results['model_name']) ) : 
                                $results['model_id'] = Crypt::encrypt($results['model_id']);
                             ?>

                                <li> <a href="<?php echo e(url('/').$sublink."/".$results['model_id']); ?>"> <?php echo e($results['model_name']); ?> </a></li>

                            <?php 
                                endif;
                             ?>
                    
                    <?php 
                        endif;
                     ?>

                
                <?php endif; ?>

            <?php endfor; ?>
            
            <?php if( !empty($master) ): ?>
                <li>   <?php echo $master; ?></li>
            <?php endif; ?>
        
        </ul>
    </div>
</div>


<!-- Breadcrumb row END -->