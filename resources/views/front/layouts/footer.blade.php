
</div> {{-- ./page-content --}}

{{-- Page Conent Ends --}}

<!-- Footer -->
    <footer class="site-footer" style="direction: rtl">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6 footer-col-3">
                        <div class="widget ">
                            <h4 class="m-b15 text-uppercase">العنوان </h4>
                            <div class="dlab-separator bg-primary"></div>
                            <p class="m-tb20"><i class="flaticon-placeholder"></i>  الجيزة - 107 شارع الملك فيصل   </p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.4639604424497!2d31.152182320564275!3d29.994831581989043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145845c046ab83f9%3A0xeeaa54b43c315205!2z2LTYsdmD2Kkg2KfZhNmG2KjZiNmJINmE2YTYs9mK2KfYsdin2Ko!5e0!3m2!1sar!2seg!4v1543931434584"
                                    width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-6 footer-col-3">
                        <div class="widget widget_services">
                            <h4 class="m-b15 text-uppercase">روابط قد تهمك</h4>
                            <div class="dlab-separator bg-primary"></div>
                            <ul>
                                <li><a href="{{ url('privacy-policy') }}">سياسة الخصوصية</a></li>
                                <li><a href="{{ url('Refund-policy') }}">شروط الاستخدام</a></li>
                                <li><a href="{{url('/about-us')}}">من نحن</a></li>
                                <li><a href="{{url('/contact')}}">اتصل بنا</a></li>
                                <li><a href="{{ url('/news') }}">اخبار النبوى</a></li>
                                <li><a href="{{ url('offers') }}">احدث العروض</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-6 footer-col-3">
                        <div class="widget widget_about">
                            <div class="logo-footer " style="margin-top: -20px"><img src="{{url('public/front/assets/images/nz-01.png')}}" alt=""></div>
                            <p class="m-tb20"><strong style="font-weight: bold">النبوى</strong> {{strip_tags(str_limit($about->description, 170))}}</p>


                        </div>
                    </div>
                </div>
                <div class="clearfix">
                    <ul class="full-social-icon clearfix">
                        <li class="fb col-md-4 col-sm-6 col-xs-6 m-b30">
                            <a href="https://www.facebook.com/elnabwey/?ti=as" target="_blank"><i class="fa fa-facebook"></i> Follow Us On Facebook </a>
                        </li>
                        <li class="tw col-md-4 col-sm-6 col-xs-6 m-b30">
                            <a href="https://instagram.com/el_nabwey_auto_?utm_source=ig_profile_share&igshid=1x9ws7tefo3ly" target="_blank"><i class="fa fa-instagram"></i> Follow Us On Instgram </a>
                        </li>
                        <li class="gplus col-md-4 col-sm-6 col-xs-6 m-b30">
                            <a href="https://www.youtube.com/channel/UC3TLWpqCXjsQUlO0NZ77ISw" target="_blank"><i class="fa fa-youtube"></i> Subscribe Us On Youtube </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 text-left">  Copyright 2018 NABAWY ZITON Developed By <a href="https://corpy.net/ar/"> <span class="text-primary"> CORPY</span> </a> ©</div>
                    <div class="col-md-6 col-sm-6 text-right ">
                        <a href="{{url('/contact')}}"> اتصل بنا</a> |
                        <a href="{{url('/about-us')}}">من نحن</a> |
                        <a href="{{ url('privacy-policy') }}"> سياسة الخصوصية</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-chevron-up" ></button>
    </div>
    <!-- JavaScript  files ========================================= -->

    {{Html::script('public/front/assets/js/jquery.min.js')}}
    <!-- jquery.min js -->
    {{Html::script('public/front/assets/js/wow.js')}}
    <!-- wow.min js -->
    {{Html::script('public/front/assets/js/bootstrap.min.js')}}
    <!-- bootstrap.min js -->
    {{Html::script('public/front/assets/js/bootstrap-select.min.js')}}
    <!-- Form js -->
    {{Html::script('public/front/assets/js/jquery.bootstrap-touchspin.js')}}
    <!-- Form js -->
    {{Html::script('public/front/assets/js/magnific-popup.js')}}
    <!-- magnific-popup js -->
{{Html::script('public/front/assets/js/waypoints-min.js')}}
    <!-- waypoints js -->
    {{Html::script('public/front/assets/js/counterup.min.js')}}
    <!-- counterup js -->
    {{Html::script('public/front/assets/js/imagesloaded.js')}}
    <!-- masonry  -->
    {{Html::script('public/front/assets/js/masonry-3.1.4.js')}}
    <!-- masonry  -->
    {{Html::script('public/front/assets/js/masonry.filter.js')}}
    <!-- masonry  -->
    {{Html::script('public/front/assets/js/owl.carousel.js')}}
    <!-- OWL  Slider  -->

    {{Html::script('public/front/assets/js/dz.carousel.min.js')}}
    <!-- sortcode fuctions  -->
    {{Html::script('public/front/assets/js/dz.ajax.js')}}
    <!-- contact-us js -->
    <!-- revolution JS FILES -->
    {{Html::script('public/front/assets/plugins/revolution/v5.4.3/js/jquery.themepunch.tools.min.js')}}
    {{Html::script('public/front/assets/plugins/revolution/v5.4.3/js/jquery.themepunch.revolution.min.js')}}
    <!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    {{Html::script('public/front/assets/plugins/revolution/v5.4.3/js/extensions/revolution.extension.actions.min.js')}}
    {{Html::script('public/front/assets/plugins/revolution/v5.4.3/js/extensions/revolution.extension.carousel.min.js')}}
    {{Html::script('public/front/assets/plugins/revolution/v5.4.3/js/extensions/revolution.extension.kenburn.min.js')}}
    {{Html::script('public/front/assets/plugins/revolution/v5.4.3/js/extensions/revolution.extension.layeranimation.min.js')}}
    {{Html::script('public/front/assets/plugins/revolution/v5.4.3/js/extensions/revolution.extension.migration.min.js')}}
    {{Html::script('public/front/assets/plugins/revolution/v5.4.3/js/extensions/revolution.extension.parallax.min.js')}}
    {{Html::script('public/front/assets/plugins/revolution/v5.4.3/js/extensions/revolution.extension.video.min.js')}}
    {{Html::script('public/front/assets/plugins/revolution/v5.4.3/js/extensions/revolution.extension.slideanims.min.js')}}
    {{Html::script('public/front/assets/js/rev.slider.js')}}
    {{Html::script('public/front/assets/js/modernizr.custom.js')}}
    {{Html::script('public/front/assets/js/jquery.hoverdir.js')}}   
    {{Html::script('public/front/assets/js/jquery.fancybox.min.js')}}
    {{Html::script('public/front/assets/js/jquery.hoverdir.js')}}   
    {{Html::script('public/front/assets/js/custom.js')}}   
    <!-- custom fuctions  -->


    @yield('custome_js')

    <script>

        jQuery(document).ready(function() {
            'use strict';
            dz_rev_slider_1();
        });	/*ready*/

        $(window).load(function(){
            $("#loading-area").fadeOut(500);
        })


    </script>
    </body>
    </html>