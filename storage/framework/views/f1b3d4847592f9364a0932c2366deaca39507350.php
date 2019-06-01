
<?php $__env->startSection('content'); ?>
    <!-- Content -->
    <div class="page-content">
        <!-- Slider -->
        <div class="main-slider style-two default-banner">
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <div id="dz_rev_slider_4_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery36" data-source="gallery" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                        <!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
                        <div id="dz_rev_slider_4" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.3.3">
                            <ul>
                                <!-- SLIDE 1 -->
                                <li data-index="rs-6" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="revolution/assets/100x50_3176d-road-bg.jpg"  data-rotate="0"  data-savepresentation="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <?php $__currentLoopData = $result['banner1']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$banners): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <img src="<?php echo e(asset('').'/'.$banners->banners_image); ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption   tp-resizeme"
                                         id="slide-2957-layer-5"
                                         data-x="502"
                                         data-y="center"
                                         data-voffset="130"
                                         data-width="['none','none','none','none']"
                                         data-height="['none','none','none','none']"
                                         data-transform_idle="o:1;"
                                         data-transform_in="x:50px;opacity:0;s:1500;e:Power3.easeOut;"
                                         data-transform_out="opacity:0;s:300;"
                                         data-start="1200"
                                         data-responsive_offset="on"
                                         style="z-index: 11;">
                                        <?php $__currentLoopData = $result['car1']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$cars): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <img src="<?php echo e(asset('').'/'.$cars->banners_image); ?>" alt="" data-ww="auto" data-hh="auto" data-no-retina>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </li>

                                <!-- SLIDE 2 -->

                                <!-- SLIDE  -->
                                <li data-index="rs-5" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="revolution/assets/100x50_3176d-road-bg.jpg"  data-rotate="0"  data-savepresentation="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <?php $__currentLoopData = $result['banner2']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$banners): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <img src="<?php echo e(asset('').'/'.$banners->banners_image); ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                    <!-- LAYERS -->
                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption   tp-resizeme"
                                         id="slide-2957-layer-4"
                                         data-x="502"
                                         data-y="center"
                                         data-voffset="130"
                                         data-width="['none','none','none','none']"
                                         data-height="['none','none','none','none']"
                                         data-transform_idle="o:1;"
                                         data-transform_in="x:50px;opacity:0;s:1500;e:Power3.easeOut;"
                                         data-transform_out="opacity:0;s:300;"
                                         data-start="1200"
                                         data-responsive_offset="on"
                                         style="z-index: 11;">
                                        <?php $__currentLoopData = $result['car2']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$cars): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <img src="<?php echo e(asset('').'/'.$cars->banners_image); ?>" alt="" data-ww="auto" data-hh="auto" data-no-retina>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </li>

                            </ul>
                            <div class="tp-bannertimer tp-bottom bg-primary" style="height: 5px; "></div>
                        </div>
                    </div>
                    <!-- END REVOLUTION SLIDER -->
                </div>
            </div>
            <!-- Form -->

            <?php echo $__env->make('front.home_search_form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            
            <!-- Form END -->
        </div>
        <!-- Slider END -->
        <!-- New Car -->
      
        <div class="section-full bg-img-fix dlab-new-work overlay-white-dark " style="background-image: url('http://carzone.dexignlab.com/xhtml/images/main-slider/slide2.jpg');">
            <div class="container-fluid" >
                <div class="row" >
                    <div class="col-md-3 col-sm-4  p-a0 no-of-item text-right" >
                        <div class="no-of-item-dtl">
                            <h2><?php echo e(count($result['products'])); ?>+</h2>
                            <h3>سيارات جديدة</h3>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-8 p-a0">
                        <div class="new-item owl-btn-style-1 owl-carousel">
                            <?php if(count($result['products'])>0): ?>
                                <?php $__currentLoopData = $result['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php 
                                        $product->parent_id = Crypt::encrypt($product->parent_id);
                                        $product->products_id = Crypt::encrypt($product->products_id);
                                     ?>

                            <div class="item dlab-new-item text-right">
                                <div class="dlab-box">
                                    <div class="dlab-media">
                                        <a href="<?php echo e(url("/brands/$product->parent_id/product/$product->products_id/")); ?>">
                                        <img style="height: 221px" src="<?php echo e(asset('').'/'.$product->products_image); ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="dlab-info">
                                        <a href="<?php echo e(url("/brands/$product->parent_id/product/$product->products_id/")); ?>">
                                        <p class="event-date"><?php echo e($product->categories_name); ?></p>
                                        </a>
                                        <p class="event-date"><?php echo e(date('d M, Y', strtotime($product->products_date_added))); ?></p>
                                        <h4 class="dlab-title"><a href="<?php echo e(asset('').'/'.$product->products_image); ?>"> <i class="fa fa-angle-left pull-left"> </i> <?php echo e($product->products_name); ?>ا</a></h4>
                                    </div>
                                </div>
                            </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <!-- New Car New -->
        <!-- About Us -->
        <div class="section-full about-us bg-white content-inner-2" style="background-image: url(<?php echo e(url('public/front/assets/images/about/about-us.jpg')); ?>); background-position:bottom; background-repeat:no-repeat; background-size:100%;">
            <div class="container">
                <div class="section-head text-center head-1">
                    <span class="text-primary">أخر الأخبار</span>
                    <h3 class="h3 text-uppercase">اخبار السيارات</h3>
                    <div class="dlab-separator bg-gray-dark"></div>
                    <p></p>
                </div>
                <div class="row">
                    <?php $__currentLoopData = $result['news']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 col-sm-6  col-xs-6" style="float: right">
                        <div class="dlab-box-bg m-b30 box-hover" style="background-image: url(<?php echo e(asset('').'/'.$new->news_image); ?>)">
                            <div class="icon-bx-wraper center p-lr20 p-tb30">
                                <div class="text-primary m-b20">
                                    <span class="icon-cell"><i class="glyph-icon flaticon-steering-wheel"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-tilte text-uppercase"><?php echo e($new->news_name); ?></h4>
                                    <p><?php echo e(strip_tags(str_limit($new->news_description , 70))); ?></p>
                                </div>
                            </div>
                            <div class="icon-box-btn text-center">
                                <?php 
                                    // Encryptind news ID
                                        $new->news_id = Crypt::encrypt($new->news_id);
                                 ?>
                                <a href="<?php echo e(url("/singelnews/$new->news_id")); ?>" class="site-button btn-block">اقرأ المزيد</a>
                            </div>
                        </div>


                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
            <div class="dlab-info-about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="about-side-img wow fadeInRight" data-wow-duration="1.50s" data-wow-delay="0.50s">
                                <?php $__currentLoopData = $result['car1']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$cars): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <img style="width: 100%;" src="<?php echo e(asset('').'/'.$cars->banners_image); ?>" alt="" >
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="col-md-5 text-right">
                            <div class="">
                                <h3 class="h3 text-uppercase m-b10 m-t0">من نحن </h3>
                            </div>
                            <div class="about-us-info" style="direction: rtl">
                                <p style="font-weight: bold"><?php echo e(strip_tags($result['about']->description)); ?></p>
                                <div class="media media-info">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object"  src="http://carzone.dexignlab.com/xhtml/images/testimonials/pic2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body p-l15">
                                        <h4 class="font-weight-700 text-uppercase text-primary m-b10">للأستفسار عن اى سؤال ؟</h4>
                                        <h2 class="media-heading open-sans font-weight-700">01001883300</h2>
                                    </div>
                                </div>
                                <div class="m-t30">
                                    <a href="#" class="site-button">المزيد</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- About Us END -->
        <!-- For Your Quick Look -->
        <div class="section-full bg-white content-inner car-listing">
            <div class="container">
                <div class="section-head">
                    <h3 class="h3 text-uppercase text-center" >نظرة سريعة</h3>
                    <ul class="nav theme-tabs text-center">
                        <li role="presentation" class="active"><a data-toggle="tab"  aria-controls="upcoming"  href="#upcoming">المنتظرة</a></li>
                        <li role="presentation" ><a data-toggle="tab"  aria-controls="popular" href="#popular">الاكثر شهرة</a></li>
                        <li role="presentation" ><a data-toggle="tab"  aria-controls="latest" href="#latest">الاخيرة</a></li>
                    </ul>
                </div>
                <div class="section-content ">
                    <div class="row">
                        <div class="dlab-tabs">

                            <div class="tab-content">

                                <div id="upcoming"  class="tab-pane active clearfix">
                                    <div class="col-md-12 owl-carousel owl-btn-style-2 quick-look">

                                        <?php $__currentLoopData = $result['most_popular']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $popular): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php 
                                                $popular->parent_id = Crypt::encrypt($popular->parent_id);
                                                $popular->products_id = Crypt::encrypt($popular->products_id);
                                             ?>

                                            <div class="item">
                                                <div class="dlab-feed-list">
                                                    <div class="dlab-media">
                                                        <a href="<?php echo e(asset('/').$popular->products_image); ?>" >
                                                            <img src=" <?php echo e(asset('/').$popular->products_image); ?> " style="height:167.6px" >
                                                        </a>
                                                    </div>
                                                    <div class="dlab-info">
                                                        <h4 class="dlab-title"><a href="<?php echo e(url("/brands/$popular->parent_id/product/$popular->products_id")); ?>"><?php echo e($popular->products_name); ?> </a></h4>
                                                        <div class="dlab-separator bg-black"></div>
                                                        <p class="dlab-price">
                                                            <?php if(isset($popular->specials_id)): ?>
                                                                <del><?php echo e($popular->products_price); ?></del> <span class="text-primary"><?php echo e($popular->specials_new_products_price); ?></span>
                                                            <?php else: ?>
                                                                <span class="text-primary"><?php echo e($popular->products_price); ?></span>
                                                            <?php endif; ?>
                                                        </p>
                                                    </div>
                                                    <div class="icon-box-btn text-center">
                                                        <ul class="clearfix">
                                                            <li><?php echo e($popular->products_model); ?></li>
                                                            <li><?php echo e($popular->products_viewed); ?> views</li>
                                                            <li><?php echo e($popular->products_liked); ?></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                </div>

                                <div id="popular"  class="tab-pane clearfix fade">
                                    <div class="col-md-12 owl-carousel owl-btn-style-2 quick-look">

                                        <?php $__currentLoopData = $result['most_popular']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $popular): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php 
                                                $popular->parent_id = Crypt::encrypt($popular->parent_id);
                                                $popular->products_id = Crypt::encrypt($popular->products_id); 
                                             ?>     

                                            <div class="item">
                                                <div class="dlab-feed-list">
                                                    <div class="dlab-media">
                                                        <a href="<?php echo e(asset('/').$popular->products_image); ?>" > 
                                                            <img src=" <?php echo e(asset('/').$popular->products_image); ?> " style="height:167.6px" > 
                                                        </a> 
                                                    </div>
                                                    <div class="dlab-info">
                                                        <h4 class="dlab-title"><a href="<?php echo e(url("/brands/$popular->parent_id/product/$popular->products_id")); ?>"><?php echo e($popular->products_name); ?> </a></h4>
                                                        <div class="dlab-separator bg-black"></div>
                                                        <p class="dlab-price">
                                                            <?php if(isset($popular->specials_id)): ?>
                                                                <del><?php echo e($popular->products_price); ?></del> <span class="text-primary"><?php echo e($popular->specials_new_products_price); ?></span>
                                                            <?php else: ?>
                                                            <span class="text-primary"><?php echo e($popular->products_price); ?></span>
                                                            <?php endif; ?>
                                                        </p>
                                                    </div>
                                                    <div class="icon-box-btn text-center">
                                                        <ul class="clearfix">
                                                            <li><?php echo e($popular->products_model); ?></li>
                                                            <li><?php echo e($popular->products_viewed); ?> views</li>
                                                            <li><?php echo e($popular->products_liked); ?></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                    </div>
                                </div>

                                <div id="latest"  class="tab-pane clearfix fade">
                                    <div class="col-md-12 owl-carousel owl-btn-style-2 quick-look">

                                        <?php $__currentLoopData = $result['latest_products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latest_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php 
                                                $latest_product->parent_id = Crypt::encrypt($latest_product->parent_id);
                                                $latest_product->products_id = Crypt::encrypt($latest_product->products_id); 
                                             ?>     

                                            <div class="item">
                                                <div class="dlab-feed-list">
                                                    <div class="dlab-media">
                                                        <a href="<?php echo e(asset('/').$latest_product->products_image); ?>" > 
                                                            <img src=" <?php echo e(asset('/').$latest_product->products_image); ?> " style="height:167.6px" > 
                                                        </a> 
                                                    </div>
                                                    <div class="dlab-info">
                                                        <h4 class="dlab-title"><a href="<?php echo e(url("/brands/$latest_product->parent_id/product/$latest_product->products_id")); ?>"><?php echo e($latest_product->products_name); ?> </a></h4>
                                                        <div class="dlab-separator bg-black"></div>
                                                        <p class="dlab-price">
                                                            <?php if(isset($latest_product->specials_id)): ?>
                                                                <del><?php echo e($latest_product->products_price); ?></del> <span class="text-primary"><?php echo e($latest_product->specials_new_products_price); ?></span>
                                                            <?php else: ?>
                                                            <span class="text-primary"><?php echo e($latest_product->products_price); ?></span>
                                                            <?php endif; ?>
                                                        </p>
                                                    </div>
                                                    <div class="icon-box-btn text-center">
                                                        <ul class="clearfix">
                                                            <li><?php echo e($latest_product->products_model); ?></li>
                                                            <li><?php echo e($latest_product->products_viewed); ?> views</li>
                                                            <li><?php echo e($latest_product->products_liked); ?></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                    </div>
                                </div>
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- For Your Quick Look END -->
        <!-- Car Find And Sale -->

        <div class="section-full bg-gray p-tb20 car-listing">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 text-right">
                        <div class="find-car box-hover " style="background-image: url(http://carzone.dexignlab.com/xhtml/images/blog/default/thum1.jpg)">
                            <div class="car-box">
                                <span class="text-primary">هل تريد ؟</span>
                                <h2 class="text-uppercase">شراء سيارة</h2>
                                <p>بينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة..</p>
                                <a href="<?php echo e(url('/brands')); ?>" class="site-button outline">
                                    ابحث عن سيارة المستقبل
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 text-right">
                        <div class="find-car box-hover active" style="background-image: url(http://carzone.dexignlab.com/xhtml/images/blog/default/thum2.jpg)">
                            <div class="car-box">
                                <span class="text-primary">هل تريد ؟</span>
                                <h2 class="text-uppercase">شراء سيارة</h2>
                                <p>بينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة..</p>
                                <a href="<?php echo e(url('/brands')); ?>" class="site-button outline">
                                    ابحث عن سيارة المستقبل
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 text-right">
                        <div class="find-car box-hover" style="background-image: url(http://carzone.dexignlab.com/xhtml/images/blog/default/thum3.jpg)">
                            <div class="car-box">
                                <span class="text-primary">هل تريد ؟</span>
                                <h2 class="text-uppercase">شراء سيارة</h2>
                                <p>بينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة..</p>
                                <a href="<?php echo e(url('/brands')); ?>" class="site-button outline">
                                    ابحث عن سيارة المستقبل
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Car Find And Sale END -->
        <!-- For Your Quick Look -->
        <div class="section-full bg-white content-inner car-listing " style="background-color: #f9f9f9;">
            <div class="container">
                <div class="section-head text-center" >
                    <h3 class="h3 text-uppercase">جميع ماركات السيارات الجديدة كاش و بالتقسيط</h3>

                </div>
                <div class="section-content ">
                    <div class="row">
                        <div class="dlab-tabs">
                            <div class="tab-content">
                                <div id="by-city"  class="tab-pane active clearfix city-list">
                                    <div class="col-md-12 owl-carousel owl-btn-style-2 city-item" id="da-thumbs">
                                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="item" style="height: 200px;width: 150px" >

                                                <div class="city-box">
                                                    <img src="<?php echo e(asset('').'/'.$categories->image); ?>" alt="<?php echo e($categories->name); ?>" style="height: 100px;width: 150px" >
                                                    <div class="city-info" style="margin-top: 10px">
                                                        <a href="<?php echo e(url("/brands/".Crypt::encrypt($categories->id))); ?>"><?php echo e($categories->name); ?></a>
                                                    </div>
                                                    <div class="dlab-move"></div>
                                                </div>

                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- For Your Quick Look END -->
        <!-- Testimonial -->
        <div class="section-full content-inner bg-img-fix overlay-primary-dark" style="background-image: url(http://carzone.dexignlab.com/xhtml/images/background/bg3.jpg);">
            <div class="container">
                <div class="section-head text-center head-1 text-white">
                    <span> </span>
                    <h3 class="h3 text-uppercase">انجازات الشركة</h3>
                    <div class="dlab-separator bg-white"></div>
                    <p>حققت الشركة كثيرا من الانجازات فى العشرة سنين الاخيرة و منها :</p>
                </div>
                <div class="section-content ">

                    <div class="testimonial-center owl-carousel owl-btn-center-lr">
                        <div class="item">
                            <div class="testimonial-2 testimonial-bg style-1">
                                <div class="testimonial-text text-right">
                                    <p>عدد السيارات المتعامل عليها 97 سيارة خلال السنة. وبدورة رأس مال حوالي أحد عشر مليون ومئتان وخمسة وأربعون ألف جنيه مصري.</p>
                                </div>
                                <div class="testimonial-detail clearfix text-center">
                                    <div class="testimonial-box">

                                        <strong class="testimonial-name">2008</strong>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-2 testimonial-bg style-1">
                                <div class="testimonial-text text-right">
                                    <p>عدد السيارات المتعامل عليها 896 سيارة خلال السنة وبدورة رأس مال حوالي ثمانية وسبعون مليون وخمسمائة وثمانون ألف جنية مصري.</p>
                                </div>
                                <div class="testimonial-detail clearfix text-center">
                                    <div class="testimonial-box">

                                        <strong class="testimonial-name"> 2009 </strong>
                                        <span class="text-white"></span>
                                    </div>
                                </div>
                            </div>
                        </div> <div class="item">
                            <div class="testimonial-2 testimonial-bg style-1">
                                <div class="testimonial-text text-right">
                                    <p>عدد السيارات المتعامل عليها 2535 سيارة هلال السنة , وبدورة رأس مال حوالي مئتان وسبعة وأربعون مليون وسبعمائة واحد وأربعون ألف جنيه مصري.</p>
                                </div>
                                <div class="testimonial-detail clearfix text-center">
                                    <div class="testimonial-box">

                                        <strong class="testimonial-name">2010</strong>
                                        <span class="text-white"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-2 testimonial-bg style-1">
                                <div class="testimonial-text text-right">
                                    <p>عدد السيارات المتعامل عليها 852 سيارة خلال السنة , وبدورة رأس مال حوالي ثلاثة وتسعون مليون وستمائة وثلالثون ألف جنية مصري.</p>
                                </div>
                                <div class="testimonial-detail clearfix text-center">
                                    <div class="testimonial-box">

                                        <strong class="testimonial-name">2011</strong>
                                        <span class="text-white"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testimonial-2 testimonial-bg style-1">
                                <div class="testimonial-text text-right">
                                    <p>عدد السيارات المتعامل عليها 1410 سيارة خلال السنة, وبدورة رأس مال حوالي مائة وثمانية وسبعون مليون وثلاثمائة وتسعون ألف جنية مصري.</p>
                                </div>
                                <div class="testimonial-detail clearfix text-center">
                                    <div class="testimonial-box">

                                        <strong class="testimonial-name">2012</strong>
                                        <span class="text-white"></span>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial -->

        <div class="section-full bg-white content-inner-1 bg-img-fix overlay-black-dark dlab-blog-cat-list" style="background-image: url(http://carzone.dexignlab.com/xhtml/images/background/bg2.jpg);">
            <div class="container">
                <div class="m-b30 text-center head-1 text-white">
                    <h3 class="h3 text-uppercase m-t0"> أحدث العروض </h3>
                    <ul class="nav theme-tabs m-t20">
                        <li role="presentation" class="active"> <a> أحدث العروض </a> </li>

                    </ul>
                </div>
                <div class="section-content ">
                    <div class="clearfix">
                        <div class="">
                            <div class="tab-content">
                                <div id="expert-reviews"  class="tab-pane active clearfix">
                                    <div id="reviews" class="carousel slide blog-stories mycarousel" data-ride="carousel">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">

                                            <?php $__currentLoopData = $result['latest_products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latest_single_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                
                                                <div class="item <?php echo e(($loop->first) ? 'active' : ''); ?>">
                                                    <div class="dlab-media">
                                                        <a href=" <?php echo e(url("brands/$latest_single_product->parent_id/product/$latest_single_product->products_id")); ?> ">
                                                            <img src=" <?php echo e(asset('/') . $latest_single_product->products_image); ?> " alt="">
                                                        </a>
                                                    </div>
                                                    <div class="carousel-caption text-right">
                                                        <h4 class="dlab-tilte"><a href=" <?php echo e(url("brands/$latest_single_product->parent_id/product/$latest_single_product->products_id")); ?> " > <?php echo e($latest_single_product->products_name); ?> </a></h4>
                                                    </div>
                                                </div>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                        </div>
                                    </div><!-- End Carousel -->
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php echo $__env->make('front.layouts.brands', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- Content END-->
    </div>
    <!-- Footer -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>