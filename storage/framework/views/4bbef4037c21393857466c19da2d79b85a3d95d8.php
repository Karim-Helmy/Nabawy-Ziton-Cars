<div class="page-wraper">
    <div id="loading-area"></div>
    <!-- header -->
    <header class="site-header header-transparent">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="dlab-topbar-left">
                        <ul>
                            <li><a href="<?php echo e(url('/used')); ?>" >سيارات مستعملة</a></li>
                            <li><a href="<?php echo e(url('/faq')); ?>" >اسأل سؤال</a></li>
                        </ul>
                    </div>
                    <div class="dlab-topbar-right topbar-social">
                        <ul>
                            <li>
                                <a > النبوى زيتون للسيارات ارخص سعر فى مصر.. ثقة تدوم لسنوات <i class="fa fa-car"></i> </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class="fa fa-envelope-o"></i> info@Elnabweyziton-cars.com</a>
                            </li>
                            <li><a href="https://www.facebook.com/elnabwey/?ti=as" class="site-button-link facebook hover" target="_blank"><i class="fa fa-facebook"></i></a></li>

                            <li><a  <a href="https://www.youtube.com/channel/UC3TLWpqCXjsQUlO0NZ77ISw" class="site-button-link twitter hover" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="https://instagram.com/el_nabwey_auto_?utm_source=ig_profile_share&igshid=1x9ws7tefo3ly" class="site-button-link linkedin hover" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header -->
        <div class="sticky-header main-bar-wraper">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
                        <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(url('public/front/assets/images/nz-01.png')); ?>" class="logos" alt=""></a>
                    </div>
                    <!-- nav toggle button -->
                    <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed" aria-expanded="false" >
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- extra nav -->
                 
                    <!-- Quick search -->
                    <div class="dlab-quik-search bg-primary ">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="ابحث عن سيارة">
                            <span id="quik-search-remove"><i class="fa fa-close"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse" style="direction: rtl !important;margin-top:20px;">
                        <ul class="nav navbar-nav"  >
                            <li><a href="javascript:;">المزيد<i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu" >
                                    <li><a href="<?php echo e(url('/news')); ?>" >أخبار السيارات </a></li>
                                    <li><a href="<?php echo e(url('/insurance')); ?>">تأمين السيارات </a></li>
                                    <li > <a href="<?php echo e(url('/about-us')); ?>">من نحن ؟ </a></li>
                                    <li><a href="<?php echo e(url('/contact')); ?>"> تواصل معنا </a></li>
                                    <li><a href="<?php echo e(url('privacy-policy')); ?>">سياسة الخصوصية</a></li>
                                <!--   <li><a href="">شروط الاستخدام</a></li>-->
                                </ul>
                            </li>
                            <li class="<?php echo e(Request::is('offers')  ? 'active':''); ?>"><a href="<?php echo e(url('offers')); ?>">أحدث العروض </a> </li>
                            <li class="<?php echo e(Request::is('cars-prices') ? 'active' : ''); ?>"><a href="<?php echo e(url('/cars-prices')); ?>">أسعار السيارات </a> </li>
                            <li class="<?php echo e(Request::is('calculate-installment') ? 'active' : ''); ?>"><a href=" <?php echo e(url('/calculate-installment')); ?> ">أحسب قسطك</a></li>
                            <li class="has-mega-menu <?php echo e(Request::is('brands') ? 'active' : ''); ?>"> <a href="<?php echo e(url('/brands')); ?>">الماركات</a></li>
                            <li class="has-mega-menu demos <?php echo e(Request::is('/') ? 'active' : ''); ?> "> <a href="<?php echo e(url('/')); ?>">الرئيسية</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>

    <!-- header END -->    

    <div class="page-content"> 
