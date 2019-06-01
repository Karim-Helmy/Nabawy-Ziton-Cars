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
            <div class="form-slide">
                <div class="container">
                    <form class="search-car" action="new-car-search-result-list.html" method="post">
                        <div class="form-head">
                            <h2>ابحث عن السيارة المناسبة</h2>
                        </div>
                        <!-- TABS -->
                        <div class="form-find-area">
                            <ul class="nav theme-tabs">
                                <li role="presentation" class="active"><a data-toggle="tab"  aria-controls="new-car"  href="#new-car"> مستعمل</a></li>
                                <li role="presentation" ><a data-toggle="tab"  aria-controls="popular" href="#used-car">جديد</a></li>
                            </ul>
                            <div class="tab-content">
                                <!-- NEW CAR -->
                                <div id="new-car"  class="tab-pane active clearfix">
                                    <ul class="nav text-center check-nav">
                                        <li>
                                            <input id="radio1" type="radio" name="new_search" checked="checked" value="budget"/>
                                            <label for="radio1">السعر</label>
                                        </li>
                                        <li>
                                            <input id="radio2" type="radio" name="new_search" value="brand"/>
                                            <label for="radio2">الموديل</label>
                                        </li>
                                    </ul>
                                    <div  id="budgetDiv" class="new_form_div">
                                        <div class="input-group">
                                            <select class="form-control">
                                                <option>اختر السعر</option>
                                                <option>1 Lakh - 5 Lakh</option>
                                                <option>5 Lakh - 10 Lakh</option>
                                                <option>10 Lakh - 20 Lakh</option>
                                                <option>20 Lakh - 50 Lakh</option>
                                                <option>50 Lakh - 1 Crore</option>
                                                <option>Above 1 Crore</option>
                                            </select>
                                        </div>
                                        <div class="input-group">
                                            <select class="form-control">
                                                <option>اختر النوع</option>
                                                <option>Hatchback</option>
                                                <option>Sedans</option>
                                                <option>MUV</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div  id="brandDiv" class="new_form_div" style="display: none;">
                                        <div class="input-group">
                                            <select class="form-control">
                                                <option>اختر النوع</option>
                                                <option>Hatchback</option>
                                                <option>Sedans</option>
                                                <option>MUV</option>
                                            </select>
                                        </div>
                                        <div class="input-group">
                                            <select class="form-control">
                                                <option>اختر الموديل</option>
                                                <option>Hatchback</option>
                                                <option>Sedans</option>
                                                <option>MUV</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="input-group">
                                        <button class="site-button button-lg btn-block" type="submit">بحث</button>
                                    </div>
                                    <div class="input-group text-center">
                                        <a class="site-button-link" href="new-car-search.html"><i class="fa fa-angle-left"></i>بحث متقدم</a>
                                    </div>
                                </div>
                                <!-- USED CAR -->
                                <div id="used-car"  class="tab-pane clearfix">
                                    <ul class="nav text-center check-nav">
                                        <li>
                                            <input id="radio3" type="radio" name="used_search" checked="checked" value="used_budget"/>
                                            <label for="radio3">بالسعر</label>
                                        </li>
                                        <li>
                                            <input id="radio4" type="radio" name="used_search" value="used_model"/>
                                            <label for="radio4">بالموديل</label>
                                        </li>
                                    </ul>
                                    <div id="used_budgetDiv" class="used_form_div">
                                        <div class="input-group">
                                            <select class="form-control">
                                                <option>اختر السعر</option>
                                                <option>1 Lakh - 5 Lakh</option>
                                                <option>5 Lakh - 10 Lakh</option>
                                                <option>10 Lakh - 20 Lakh</option>
                                                <option>20 Lakh - 50 Lakh</option>
                                                <option>50 Lakh - 1 Crore</option>
                                                <option>Above 1 Crore</option>
                                            </select>
                                        </div>
                                        <div class="input-group">
                                            <select class="form-control">
                                                <option>اختر النوع</option>
                                                <option>Hatchback</option>
                                                <option>Sedans</option>
                                                <option>MUV</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div  id="used_modelDiv" class="used_form_div" style="display: none;">
                                        <div class="input-group">
                                            <select class="form-control">
                                                <option>اختر السعر</option>
                                                <option>1 Lakh - 5 Lakh</option>
                                                <option>5 Lakh - 10 Lakh</option>
                                                <option>10 Lakh - 20 Lakh</option>
                                                <option>20 Lakh - 50 Lakh</option>
                                                <option>50 Lakh - 1 Crore</option>
                                                <option>Above 1 Crore</option>
                                            </select>
                                        </div>
                                        <div class="input-group">
                                            <select class="form-control">
                                                <option>اختر النوع</option>
                                                <option>Hatchback</option>
                                                <option>Sedans</option>
                                                <option>MUV</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <button class="site-button button-lg btn-block" type="submit" onclick="window.location.href='sed-car-search.html'">بحث</button>
                                    </div>
                                    <div class="input-group text-center">
                                        <a class="site-button-link" href="new-car-search.html"><i class="fa fa-angle-left"></i>بحث متقدم </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Form END -->
        </div>
        <!-- Slider END -->
        <!-- New Car -->
        <div class="section-full bg-img-fix dlab-new-work overlay-white-dark " style="background-image: url('http://carzone.dexignlab.com/xhtml/images/main-slider/slide2.jpg');">
            <div class="container-fluid" >
                <div class="row" >
                    <div class="col-md-3 col-sm-4  p-a0 no-of-item text-right" >
                        <div class="no-of-item-dtl">
                            <h2>20+</h2>
                            <h3>سيارات جديدة</h3>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-8 p-a0">
                        <div class="new-item owl-btn-style-1 owl-carousel">
                            <div class="item dlab-new-item text-right">
                                <div class="dlab-box">
                                    <div class="dlab-media">
                                        <a href="#"><img src="http://carzone.dexignlab.com/xhtml/images/our-work/work/pic1.jpg" alt=""></a>
                                    </div>
                                    <div class="dlab-info">
                                        <p class="event-date">November 6, 2018</p>
                                        <h4 class="dlab-title"><a href="http://carzone.dexignlab.com/xhtml/images/our-work/work/pic2.jpg"> <i class="fa fa-angle-left pull-left"> </i> تويوتا كورولا</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item dlab-new-item text-right">
                                <div class="dlab-box">
                                    <div class="dlab-media">
                                        <a href="#"><img src="http://carzone.dexignlab.com/xhtml/images/our-work/work/pic3.jpg" alt=""></a>
                                    </div>
                                    <div class="dlab-info " >
                                        <p class="event-date" >November 6, 2018</p>
                                        <h4 class="dlab-title" style=""><a href="http://carzone.dexignlab.com/xhtml/images/our-work/work/pic2.jpg" > <i class="fa fa-angle-left pull-left"></i> تويوتا كورولا </a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item dlab-new-item text-right">
                                <div class="dlab-box">
                                    <div class="dlab-media">
                                        <a href="#"><img src="http://carzone.dexignlab.com/xhtml/images/our-work/work/pic4.jpg" alt=""></a>
                                    </div>
                                    <div class="dlab-info">
                                        <p class="event-date">November 6, 2018</p>
                                        <h4 class="dlab-title"><a href="http://carzone.dexignlab.com/xhtml/images/our-work/work/pic1.jpg"><i class="fa fa-angle-left pull-left"></i> تويوتا كورولا</a></h4>
                                    </div>
                                </div>
                            </div>
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
                    <span class="text-primary">Welcome To Our Website</span>
                    <h3 class="h3 text-uppercase">Car Dealership</h3>
                    <div class="dlab-separator bg-gray-dark"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6  col-xs-6">
                        <div class="dlab-box-bg m-b30 box-hover" style="background-image: url('http://carzone.dexignlab.com/xhtml/images/car2.png')">
                            <div class="icon-bx-wraper center p-lr20 p-tb30">
                                <div class="text-primary m-b20">
                                    <span class="icon-cell"><i class="glyph-icon flaticon-steering-wheel"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-tilte text-uppercase">All brands</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                                </div>
                            </div>
                            <div class="icon-box-btn text-center">
                                <a href="#" class="site-button btn-block">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="dlab-box-bg m-b30 box-hover" style="background-image: url(http://carzone.dexignlab.com/xhtml/images/car2.png)">
                            <div class="icon-bx-wraper center p-lr20 p-tb30">
                                <div class="text-primary m-b20">
                                    <span class="icon-cell"><i class="glyph-icon flaticon-speech-bubble"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-tilte text-uppercase">Free Support</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                                </div>
                            </div>
                            <div class="icon-box-btn text-center">
                                <a href="#" class="site-button btn-block">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="dlab-box-bg m-b30 box-hover active" style="background-image: url(images/our-work/work/pic3.jpg)">
                            <div class="icon-bx-wraper center p-lr20 p-tb30">
                                <div class="text-primary m-b20">
                                    <span class="icon-cell"><i class="glyph-icon flaticon-mechanic"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-tilte text-uppercase">Dealership</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                                </div>
                            </div>
                            <div class="icon-box-btn text-center">
                                <a href="#" class="site-button btn-block">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="dlab-box-bg m-b30 box-hover" style="background-image: url(http://carzone.dexignlab.com/xhtml/images/car2.png)">
                            <div class="icon-bx-wraper center p-lr20 p-tb30">
                                <div class="text-primary m-b20">
                                    <span class="icon-cell"><i class="glyph-icon flaticon-list"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dlab-tilte text-uppercase">affordable</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                                </div>
                            </div>
                            <div class="icon-box-btn text-center">
                                <a href="#" class="site-button btn-block">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dlab-info-about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="about-side-img wow fadeInRight" data-wow-duration="1.50s" data-wow-delay="0.50s">
                                <img src="http://carzone.dexignlab.com/xhtml/images/car2.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 text-right">
                            <div class="">
                                <h3 class="h3 text-uppercase m-b10 m-t0">من نحن </h3>
                                <p class="p-t0" style="font-weight: bold"> وهذا ما يجعله أول مولّد نص لوريم إيبسوم حقيقي على الإنترنت.</p>
                            </div>
                            <div class="about-us-info" style="direction: rtl">
                                <p style="font-weight: bold">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. بينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة،</p>
                                <div class="media media-info">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object"  src="http://carzone.dexignlab.com/xhtml/images/testimonials/pic2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body p-l15">
                                        <h4 class="font-weight-700 text-uppercase text-primary m-b10">للأستفسار عن اى سؤال ؟</h4>
                                        <h2 class="media-heading open-sans font-weight-700">01123456789</h2>
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
                                        <div class="item">
                                            <div class="dlab-feed-list">
                                                <div class="dlab-media">
                                                    <a href="new-car-upcoming.html"><img src="http://carzone.dexignlab.com/xhtml/images/our-work/work/pic1.jpg" alt=""></a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="new-car-upcoming.html">هونداي توسان </a></h4>
                                                    <div class="dlab-separator bg-black"></div>
                                                    <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                                </div>
                                                <div class="icon-box-btn text-center">
                                                    <ul class="clearfix">
                                                        <li>2017</li>
                                                        <li>Manual</li>
                                                        <li>210 hp </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="dlab-feed-list">
                                                <div class="dlab-media">
                                                    <a href="new-car-upcoming.html"><img src="http://carzone.dexignlab.com/xhtml/images/our-work/work/pic2.jpg" alt=""></a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="new-car-upcoming.html">هونداي توسان </a></h4>
                                                    <div class="dlab-separator bg-black"></div>
                                                    <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                                </div>
                                                <div class="icon-box-btn text-center">
                                                    <ul class="clearfix">
                                                        <li>2017</li>
                                                        <li>Manual</li>
                                                        <li>210 hp </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="dlab-feed-list">
                                                <div class="dlab-media">
                                                    <a href="new-car-upcoming.html"><img src="http://carzone.dexignlab.com/xhtml/images/our-work/work/pic3.jpg" alt=""></a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="new-car-upcoming.html">هونداي توسان</a></h4>
                                                    <div class="dlab-separator bg-black"></div>
                                                    <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                                </div>
                                                <div class="icon-box-btn text-center">
                                                    <ul class="clearfix">
                                                        <li>2017</li>
                                                        <li>Manual</li>
                                                        <li>210 hp </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="dlab-feed-list">
                                                <div class="dlab-media">
                                                    <a href="new-car-upcoming.html"><img src="http://carzone.dexignlab.com/xhtml/images/our-work/work/pic4.jpg" alt=""></a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="new-car-upcoming.html">هونداي توسان </a></h4>
                                                    <div class="dlab-separator bg-black"></div>
                                                    <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                                </div>
                                                <div class="icon-box-btn text-center">
                                                    <ul class="clearfix">
                                                        <li>2017</li>
                                                        <li>Manual</li>
                                                        <li>210 hp </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="popular"  class="tab-pane clearfix fade">
                                    <div class="col-md-12 owl-carousel owl-btn-style-2 quick-look">
                                        <div class="item">
                                            <div class="dlab-feed-list">
                                                <div class="dlab-media">
                                                    <a href="new-car-popular.html"><img src="http://carzone.dexignlab.com/xhtml/images/our-work/work/pic1.jpg" alt=""></a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="new-car-popular.html">هونداي توسان </a></h4>
                                                    <div class="dlab-separator bg-black"></div>
                                                    <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                                </div>
                                                <div class="icon-box-btn text-center">
                                                    <ul class="clearfix">
                                                        <li>2017</li>
                                                        <li>Manual</li>
                                                        <li>210 hp </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="dlab-feed-list">
                                                <div class="dlab-media">
                                                    <a href="new-car-popular.html"><img src="http://carzone.dexignlab.com/xhtml/images/our-work/work/pic2.jpg" alt=""></a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="new-car-popular.html">هونداي توسان </a></h4>
                                                    <div class="dlab-separator bg-black"></div>
                                                    <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                                </div>
                                                <div class="icon-box-btn text-center">
                                                    <ul class="clearfix">
                                                        <li>2017</li>
                                                        <li>Manual</li>
                                                        <li>210 hp </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="dlab-feed-list">
                                                <div class="dlab-media">
                                                    <a href="new-car-popular.html"><img src="http://carzone.dexignlab.com/xhtml/images/our-work/work/pic3.jpg" alt=""></a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="new-car-popular.html">هونداي توسان </a></h4>
                                                    <div class="dlab-separator bg-black"></div>
                                                    <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                                </div>
                                                <div class="icon-box-btn text-center">
                                                    <ul class="clearfix">
                                                        <li>2017</li>
                                                        <li>Manual</li>
                                                        <li>210 hp </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="dlab-feed-list">
                                                <div class="dlab-media">
                                                    <a href="new-car-popular.html"><img src="http://carzone.dexignlab.com/xhtml/images/our-work/work/pic4.jpg" alt=""></a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="new-car-popular.html">هونداي توسان </a></h4>
                                                    <div class="dlab-separator bg-black"></div>
                                                    <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                                </div>
                                                <div class="icon-box-btn text-center">
                                                    <ul class="clearfix">
                                                        <li>2017</li>
                                                        <li>Manual</li>
                                                        <li>210 hp </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="latest"  class="tab-pane clearfix fade">
                                    <div class="col-md-12 owl-carousel owl-btn-style-2 quick-look">
                                        <div class="item">
                                            <div class="dlab-feed-list">
                                                <div class="dlab-media">
                                                    <a href="new-car-latest.html"><img src="http://carzone.dexignlab.com/xhtml/images/our-work/work/pic2.jpg" alt=""></a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="new-car-latest.html">هونداي توسان </a></h4>
                                                    <div class="dlab-separator bg-black"></div>
                                                    <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                                </div>
                                                <div class="icon-box-btn text-center">
                                                    <ul class="clearfix">
                                                        <li>2017</li>
                                                        <li>Manual</li>
                                                        <li>210 hp </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="dlab-feed-list">
                                                <div class="dlab-media">
                                                    <a href="new-car-latest.html"><img src="http://carzone.dexignlab.com/xhtml/images/our-work/work/pic1.jpg" alt=""></a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="new-car-latest.html">هونداي توسان </a></h4>
                                                    <div class="dlab-separator bg-black"></div>
                                                    <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                                </div>
                                                <div class="icon-box-btn text-center">
                                                    <ul class="clearfix">
                                                        <li>2017</li>
                                                        <li>Manual</li>
                                                        <li>210 hp </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="dlab-feed-list">
                                                <div class="dlab-media">
                                                    <a href="new-car-latest.html"><img src="http://carzone.dexignlab.com/xhtml/images/our-work/work/pic4.jpg" alt=""></a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="new-car-latest.html">هونداي توسان </a></h4>
                                                    <div class="dlab-separator bg-black"></div>
                                                    <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                                </div>
                                                <div class="icon-box-btn text-center">
                                                    <ul class="clearfix">
                                                        <li>2017</li>
                                                        <li>Manual</li>
                                                        <li>210 hp </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="dlab-feed-list">
                                                <div class="dlab-media">
                                                    <a href="new-car-latest.html"><img src="http://carzone.dexignlab.com/xhtml/images/our-work/work/pic3.jpg" alt=""></a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="new-car-latest.html">هونداي توسان </a></h4>
                                                    <div class="dlab-separator bg-black"></div>
                                                    <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                                </div>
                                                <div class="icon-box-btn text-center">
                                                    <ul class="clearfix">
                                                        <li>2017</li>
                                                        <li>Manual</li>
                                                        <li>210 hp </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
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
                                <a href="new-car-search.html" class="site-button outline">
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
                                <a href="new-car-search.html" class="site-button outline">
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
                                <a href="new-car-search.html" class="site-button outline">
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
        <div class="section-full bg-white content-inner car-listing ">
            <div class="container">
                <div class="section-head text-center" >
                    <h3 class="h3 text-uppercase">Used Cars</h3>
                    <ul class="nav theme-tabs">
                        <li role="presentation" class="active"><a data-toggle="tab"  aria-controls="by-city"  href="#by-city">BY CITY</a></li>
                        <li role="presentation" ><a data-toggle="tab"  aria-controls="by-price" href="#by-price">BY PRICE</a></li>
                    </ul>
                </div>
                <div class="section-content ">
                    <div class="row">
                        <div class="dlab-tabs">
                            <div class="tab-content">
                                <div id="by-city"  class="tab-pane active clearfix city-list">
                                    <div class="col-md-12 owl-carousel owl-btn-style-2 city-item" id="da-thumbs">
                                        <div class="item">
                                            <div class="city-box">
                                                <div class="glyph-icon flaticon-university"></div>
                                                <div class="city-info">
                                                    <span>Used Cars In </span>
                                                    <a href="used-car-search-result.html">United Kingdom</a>
                                                </div>
                                                <div class="dlab-move"></div>
                                            </div>
                                            <div class="city-box">
                                                <div class="glyph-icon flaticon-office-1"></div>
                                                <div class="city-info">
                                                    <span>Used Cars In </span>
                                                    <a href="used-car-search-result.html">United Kingdom</a>
                                                </div>
                                                <div class="dlab-move"></div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="city-box">
                                                <div class="glyph-icon flaticon-school"></div>
                                                <div class="city-info">
                                                    <span>Used Cars In </span>
                                                    <a href="used-car-search-result.html">United Kingdom</a>
                                                </div>
                                                <div class="dlab-move"></div>
                                            </div>
                                            <div class="city-box">
                                                <div class="glyph-icon flaticon-cityscape"></div>
                                                <div class="city-info">
                                                    <span>Used Cars In </span>
                                                    <a href="used-car-search-result.html">United Kingdom</a>
                                                </div>
                                                <div class="dlab-move"></div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="city-box">
                                                <div class="glyph-icon flaticon-holidays-1"></div>
                                                <div class="city-info">
                                                    <span>Used Cars In </span>
                                                    <a href="used-car-search-result.html">United Kingdom</a>
                                                </div>
                                                <div class="dlab-move"></div>
                                            </div>
                                            <div class="city-box">
                                                <div class="glyph-icon flaticon-building"></div>
                                                <div class="city-info">
                                                    <span>Used Cars In </span>
                                                    <a href="used-car-search-result.html">United Kingdom</a>
                                                </div>
                                                <div class="dlab-move"></div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="city-box">
                                                <div class="glyph-icon flaticon-construction"></div>
                                                <div class="city-info">
                                                    <span>Used Cars In </span>
                                                    <a href="used-car-search-result.html">United Kingdom</a>
                                                </div>
                                                <div class="dlab-move"></div>
                                            </div>
                                            <div class="city-box">
                                                <div class="glyph-icon flaticon-holidays"></div>
                                                <div class="city-info">
                                                    <span>Used Cars In </span>
                                                    <a href="used-car-search-result.html">United Kingdom</a>
                                                </div>
                                                <div class="dlab-move"></div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="city-box">
                                                <div class="glyph-icon flaticon-monument-1"></div>
                                                <div class="city-info">
                                                    <span>Used Cars In </span>
                                                    <a href="used-car-search-result.html">United Kingdom</a>
                                                </div>
                                                <div class="dlab-move"></div>
                                            </div>
                                            <div class="city-box">
                                                <div class="glyph-icon flaticon-skyscraper"></div>
                                                <div class="city-info">
                                                    <span>Used Cars In </span>
                                                    <a href="used-car-search-result.html">United Kingdom</a>
                                                </div>
                                                <div class="dlab-move"></div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="city-box">
                                                <div class="glyph-icon flaticon-office"></div>
                                                <div class="city-info">
                                                    <span>Used Cars In </span>
                                                    <a href="used-car-search-result.html">United Kingdom</a>
                                                </div>
                                                <div class="dlab-move"></div>
                                            </div>
                                            <div class="city-box">
                                                <div class="glyph-icon flaticon-city-hall"></div>
                                                <div class="city-info">
                                                    <span>Used Cars In </span>
                                                    <a href="used-car-search-result.html">United Kingdom</a>
                                                </div>
                                                <div class="dlab-move"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="by-price"  class="tab-pane clearfix fade">
                                    <div class="col-md-12 owl-carousel owl-btn-style-2 quick-look">
                                        <div class="item">
                                            <div class="dlab-feed-list">
                                                <div class="dlab-media">
                                                    <a href="used-car-search-result.html"><img src="images/our-work/work/pic1.jpg" alt=""></a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="used-car-search-result.html">Hyundai santa fe sport </a></h4>
                                                    <div class="dlab-separator bg-black"></div>
                                                    <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                                </div>
                                                <div class="icon-box-btn text-center">
                                                    <ul class="clearfix">
                                                        <li>2017</li>
                                                        <li>Manual</li>
                                                        <li>210 hp </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="dlab-feed-list">
                                                <div class="dlab-media">
                                                    <a href="used-car-search-result.html"><img src="images/our-work/work/pic2.jpg" alt=""></a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="used-car-search-result.html">Hyundai santa fe sport </a></h4>
                                                    <div class="dlab-separator bg-black"></div>
                                                    <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                                </div>
                                                <div class="icon-box-btn text-center">
                                                    <ul class="clearfix">
                                                        <li>2017</li>
                                                        <li>Manual</li>
                                                        <li>210 hp </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="dlab-feed-list">
                                                <div class="dlab-media">
                                                    <a href="used-car-search-result.html"><img src="images/our-work/work/pic3.jpg" alt=""></a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="used-car-search-result.html">Hyundai santa fe sport </a></h4>
                                                    <div class="dlab-separator bg-black"></div>
                                                    <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                                </div>
                                                <div class="icon-box-btn text-center">
                                                    <ul class="clearfix">
                                                        <li>2017</li>
                                                        <li>Manual</li>
                                                        <li>210 hp </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="dlab-feed-list">
                                                <div class="dlab-media">
                                                    <a href="used-car-search-result.html"><img src="images/our-work/work/pic4.jpg" alt=""></a>
                                                </div>
                                                <div class="dlab-info">
                                                    <h4 class="dlab-title"><a href="used-car-search-result.html">Hyundai santa fe sport </a></h4>
                                                    <div class="dlab-separator bg-black"></div>
                                                    <p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
                                                </div>
                                                <div class="icon-box-btn text-center">
                                                    <ul class="clearfix">
                                                        <li>2017</li>
                                                        <li>Manual</li>
                                                        <li>210 hp </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
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
        <div class="section-full content-inner bg-img-fix overlay-primary-dark" style="background-image: url(images/background/bg3.jpg);">
            <div class="container">
                <div class="section-head text-center head-1 text-white">
                    <span>What Our Happy Clients say about us </span>
                    <h3 class="h3 text-uppercase">our Testimonial</h3>
                    <div class="dlab-separator bg-white"></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="section-content ">

                    <div class="testimonial-center owl-carousel owl-btn-center-lr">
                        <div class="item">
                            <div class="testimonial-2 testimonial-bg style-1">
                                <div class="testimonial-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                </div>
                                <div class="testimonial-detail clearfix">
                                    <div class="testimonial-box">
                                        <div class="testimonial-pic radius shadow"><img src="images/testimonials/pic1.jpg" alt="" width="100" height="100"></div>
                                        <strong class="testimonial-name">John Doe</strong>
                                        <span class="text-white">Car Dealer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-2 testimonial-bg style-1">
                                <div class="testimonial-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                </div>
                                <div class="testimonial-detail clearfix">
                                    <div class="testimonial-box">
                                        <div class="testimonial-pic radius shadow"><img src="images/testimonials/pic2.jpg" alt="" width="100" height="100"></div>
                                        <strong class="testimonial-name">John Doe</strong>
                                        <span class="text-white">Car Dealer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-2 testimonial-bg style-1">
                                <div class="testimonial-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                </div>
                                <div class="testimonial-detail clearfix">
                                    <div class="testimonial-box">
                                        <div class="testimonial-pic radius shadow"><img src="images/testimonials/pic3.jpg" alt="" width="100" height="100"></div>
                                        <strong class="testimonial-name">John Doe</strong>
                                        <span class="text-white">Car Dealer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial -->
        <!-- Latest News -->
        <div class="section-full bg-white content-inner-1">
            <div class="container">
                <div class="section-head text-center head-1">
                    <span class="text-primary">Read our latest news</span>
                    <h3 class="h3 text-uppercase">Latest News</h3>
                </div>
                <div class="row">
                    <div class="blog-carousel owl-carousel col-md-12">
                        <div class="item">
                            <div class="ow-blog-post date-style-2 dlab-latest-blog">
                                <div class="ow-post-media dlab-img-effect zoom-slow"> <img src="images/blog/latest-blog/pic2.jpg" alt=""> </div>
                                <div class="ow-post-meta">
                                    <ul>
                                        <li class="profile-user">
                                            <img src="images/testimonials/pic1.jpg" alt=""/>
                                        </li>
                                        <li><span>John Doe</span></li>
                                        <li><i class="fa fa-calendar"></i></li>
                                        <li><i class="fa fa-comments"></i></li>
                                    </ul>
                                </div>
                                <div class="ow-post-info ">
                                    <div class="ow-post-title">
                                        <h4 class="post-title"> <a href="blog-single-sidebar.html" title="Video post">Porche Release New Model</a> </h4>
                                    </div>
                                    <div class="ow-post-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry......</p>
                                    </div>
                                    <div class="ow-post-readmore ">
                                        <a href="#" rel="bookmark" class="site-button-link"> Read More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-blog-post date-style-2 dlab-latest-blog">
                                <div class="ow-post-media dlab-img-effect zoom-slow"> <img src="images/blog/latest-blog/pic1.jpg" alt=""> </div>
                                <div class="ow-post-meta">
                                    <ul>
                                        <li class="profile-user">
                                            <img src="images/testimonials/pic2.jpg" alt=""/>
                                        </li>
                                        <li><span>John Doe</span></li>
                                        <li><i class="fa fa-calendar"></i></li>
                                        <li><i class="fa fa-comments"></i></li>
                                    </ul>
                                </div>
                                <div class="ow-post-info ">
                                    <div class="ow-post-title">
                                        <h4 class="post-title"> <a href="blog-single-sidebar.html" title="Video post">Porche Release New Model</a> </h4>
                                    </div>
                                    <div class="ow-post-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry......</p>
                                    </div>
                                    <div class="ow-post-readmore ">
                                        <a href="#" rel="bookmark" class="site-button-link"> Read More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-blog-post date-style-2 dlab-latest-blog">
                                <div class="ow-post-media dlab-img-effect zoom-slow"> <img src="images/blog/latest-blog/pic3.jpg" alt=""> </div>
                                <div class="ow-post-meta">
                                    <ul>
                                        <li class="profile-user">
                                            <img src="images/testimonials/pic3.jpg" alt=""/>
                                        </li>
                                        <li><span>John Doe</span></li>
                                        <li><i class="fa fa-calendar"></i></li>
                                        <li><i class="fa fa-comments"></i></li>
                                    </ul>
                                </div>
                                <div class="ow-post-info ">
                                    <div class="ow-post-title">
                                        <h4 class="post-title"> <a href="blog-single-sidebar.html" title="Video post">Porche Release New Model</a> </h4>
                                    </div>
                                    <div class="ow-post-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry......</p>
                                    </div>
                                    <div class="ow-post-readmore ">
                                        <a href="#" rel="bookmark" class="site-button-link"> Read More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest News END-->
        <div class="section-full bg-white content-inner-1 bg-img-fix overlay-black-dark dlab-blog-cat-list" style="background-image: url(images/background/bg2.jpg);">
            <div class="container">
                <div class="m-b30 text-center head-1 text-white">
                    <h3 class="h3 text-uppercase m-t0">You might be interested in</h3>
                    <ul class="nav theme-tabs m-t20">
                        <li role="presentation" class="active"><a data-toggle="tab"  aria-controls="expert-reviews"  href="#expert-reviews">EXPERT REVIEWS</a></li>
                        <li role="presentation" ><a data-toggle="tab"  aria-controls="featured-stories" href="#featured-stories">FEATURED STORIES</a></li>
                        <li role="presentation" ><a data-toggle="tab"  aria-controls="videos" href="#videos">VIDEOS</a></li>
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
                                            <div class="item active">
                                                <div class="dlab-media">
                                                    <a href="#"><img src="images/our-work/work1/pic2.jpg" alt=""></a>
                                                </div>
                                                <div class="carousel-caption">
                                                    <h4 class="dlab-tilte"><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting dustry. Lorem Ipsum has been the industry..</a></h4>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="dlab-media">
                                                    <a href="#"><img src="images/our-work/work1/pic1.jpg" alt=""></a>
                                                </div>
                                                <div class="carousel-caption">
                                                    <h4 class="dlab-tilte"><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting dustry. Lorem Ipsum has been the industry..</a></h4>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="dlab-media">
                                                    <a href="#"><img src="images/our-work/work1/pic3.jpg" alt=""></a>
                                                </div>
                                                <div class="carousel-caption">
                                                    <h4 class="dlab-tilte"><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting dustry. Lorem Ipsum has been the industry..</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nav nav-pills nav-justified blog-nav-list">
                                            <li data-target="#reviews" data-slide-to="0" class="active">
                                                <a class="media">
                                                    <div class="media-left">
                                                        <img class="media-object" src="images/our-work/work1/thumb2.jpg" alt="">
                                                    </div>
                                                    <div class="media-body p-l15">
                                                        <h4 class="dlab-title">Porche Release New Model</h4>
                                                    </div>
                                                </a>
                                            </li>
                                            <li data-target="#reviews" data-slide-to="1">
                                                <a class="media">
                                                    <div class="media-left">
                                                        <img class="media-object" src="images/our-work/work1/thumb1.jpg" alt="">
                                                    </div>
                                                    <div class="media-body p-l15">
                                                        <h4 class="dlab-title">Porche Release New Model</h4>
                                                    </div>
                                                </a>
                                            </li>
                                            <li data-target="#reviews" data-slide-to="2">
                                                <a class="media">
                                                    <div class="media-left">
                                                        <img class="media-object" src="images/our-work/work1/thumb3.jpg" alt="">
                                                    </div>
                                                    <div class="media-body p-l15">
                                                        <h4 class="dlab-title">Porche Release New Model</h4>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- End Carousel -->
                                </div>
                                <div id="featured-stories"  class="tab-pane clearfix fade">
                                    <div id="featured" class="carousel slide blog-stories mycarousel" data-ride="carousel">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="dlab-media">
                                                    <a href="#"><img src="images/our-work/work1/pic1.jpg" alt=""></a>
                                                </div>
                                                <div class="carousel-caption">
                                                    <h4 class="dlab-tilte"><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting dustry. Lorem Ipsum has been the industry..</a></h4>
                                                </div>
                                            </div>
                                            <div class="item ">
                                                <div class="dlab-media">
                                                    <a href="#"><img src="images/our-work/work1/pic2.jpg" alt=""></a>
                                                </div>
                                                <div class="carousel-caption">
                                                    <h4 class="dlab-tilte"><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting dustry. Lorem Ipsum has been the industry..</a></h4>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="dlab-media">
                                                    <a href="#"><img src="images/our-work/work1/pic3.jpg" alt=""></a>
                                                </div>
                                                <div class="carousel-caption">
                                                    <h4 class="dlab-tilte"><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting dustry. Lorem Ipsum has been the industry..</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nav nav-pills nav-justified blog-nav-list">
                                            <li data-target="#featured" data-slide-to="1" >
                                                <a class="media">
                                                    <div class="media-left">
                                                        <img class="media-object" src="images/our-work/work1/thumb1.jpg" alt="">
                                                    </div>
                                                    <div class="media-body p-l15">
                                                        <h4 class="dlab-title">Porche Release New Model</h4>
                                                    </div>
                                                </a>
                                            </li>
                                            <li data-target="#featured" data-slide-to="0" >
                                                <a class="media">
                                                    <div class="media-left">
                                                        <img class="media-object" src="images/our-work/work1/thumb2.jpg" alt="">
                                                    </div>
                                                    <div class="media-body p-l15">
                                                        <h4 class="dlab-title">Porche Release New Model</h4>
                                                    </div>
                                                </a>
                                            </li>
                                            <li data-target="#featured" data-slide-to="2">
                                                <a class="media">
                                                    <div class="media-left">
                                                        <img class="media-object" src="images/our-work/work1/thumb3.jpg" alt="">
                                                    </div>
                                                    <div class="media-body p-l15">
                                                        <h4 class="dlab-title">Porche Release New Model</h4>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- End Carousel -->
                                </div>
                                <div id="videos"  class="tab-pane clearfix fade">
                                    <div id="video" class="carousel slide blog-stories mycarousel" data-ride="carousel">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="dlab-media">
                                                    <a href="#"><img src="images/our-work/work1/pic3.jpg" alt=""></a>
                                                </div>
                                                <div class="carousel-caption">
                                                    <h4 class="dlab-tilte"><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting dustry. Lorem Ipsum has been the industry..</a></h4>
                                                </div>
                                            </div>
                                            <div class="item ">
                                                <div class="dlab-media">
                                                    <a href="#"><img src="images/our-work/work1/pic2.jpg" alt=""></a>
                                                </div>
                                                <div class="carousel-caption">
                                                    <h4 class="dlab-tilte"><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting dustry. Lorem Ipsum has been the industry..</a></h4>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="dlab-media">
                                                    <a href="#"><img src="images/our-work/work1/pic1.jpg" alt=""></a>
                                                </div>
                                                <div class="carousel-caption">
                                                    <h4 class="dlab-tilte"><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting dustry. Lorem Ipsum has been the industry..</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="nav nav-pills nav-justified blog-nav-list">
                                            <li data-target="#video" data-slide-to="2" class="active">
                                                <a class="media">
                                                    <div class="media-left">
                                                        <img class="media-object" src="images/our-work/work1/thumb3.jpg" alt="">
                                                    </div>
                                                    <div class="media-body p-l15">
                                                        <h4 class="dlab-title">Porche Release New Model</h4>
                                                    </div>
                                                </a>
                                            </li>
                                            <li data-target="#video" data-slide-to="0" >
                                                <a class="media">
                                                    <div class="media-left">
                                                        <img class="media-object" src="images/our-work/work1/thumb2.jpg" alt="">
                                                    </div>
                                                    <div class="media-body p-l15">
                                                        <h4 class="dlab-title">Porche Release New Model</h4>
                                                    </div>
                                                </a>
                                            </li>
                                            <li data-target="#video" data-slide-to="1">
                                                <a class="media">
                                                    <div class="media-left">
                                                        <img class="media-object" src="images/our-work/work1/thumb1.jpg" alt="">
                                                    </div>
                                                    <div class="media-body p-l15">
                                                        <h4 class="dlab-title">Porche Release New Model</h4>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- End Carousel -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Client logo Carousel -->
        <div class="section-full bg-img-fix p-t30 p-b30 ">
            <div class="container">
                <div class="section-content">
                    <div class="client-logo-carousel owl-carousel mfp-gallery gallery owl-btn-center-lr">
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"><a href="#"><img src="images/client-logo/logo1.jpg" alt=""></a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="images/client-logo/logo2.jpg" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="images/client-logo/logo3.jpg" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="images/client-logo/logo4.jpg" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="images/client-logo/logo5.jpg" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="images/client-logo/logo2.jpg" alt=""></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client logo Carousel END -->
        <!-- Content END-->
    </div>
    <!-- Footer -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>