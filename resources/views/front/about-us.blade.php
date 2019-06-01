@extends('front.index')

@section('content')

{{-- Pages Banner Icluding Starts --}}

    @include('front.layouts.pages-banner')

{{-- Pages Banner Icluding Ends --}}


<!-- About -->
		
    <div class="section-full p-t50 bg-white content-inner">
        <div class="container">
            <div class="section-head text-center head-1">
                <span class="text-primary">من نحن ؟</span>
                <h3 class="h3 text-uppercase">مرحباً بكم في موقع النبوى زيتون للسيارات ارخص سعر فى مصر 
                    <br>
                    ثقة تدوم لسنوات</h3>
                <div class="dlab-separator bg-gray-dark"></div>
                {{ strip_tags($about_section->description) }}
            </div>
        </div>
    </div>
    <!-- About End -->
     <!-- Stats -->
    <div class="section-full content-inner text-white bg-gray bg-img-fix overlay-black-middle" 
    style="background-image: url('{{ asset('/')."public/front/assets/images/background/bg2.jpg" }}');">
        <div class="container">
            <div class="section-content">
                 <div class="row">
                    <div class="col-md-3 col-sm-6 m-b30" style="">
                        <div class="counter-style-1">
                            <div class="">
                                    <i class="fa fa-car" aria-hidden="true" 
                                    style="
                                        font-size: 45px;
                                        margin-right: 10px;
                                        "></i>
                                <span class="counter">5608</span>
                            </div>
                            <span class="counter-text"> سيارة </span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 m-b30">
                        <div class="counter-style-1">
                            <div class="">
                                <i class="icon flaticon-mechanic"></i>
                                <span class="counter">4562</span>
                            </div>
                            <span class="counter-text"> عميل سعيد </span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 m-b30">
                        <div class="counter-style-1">
                            <div class="">
                                <i class="icon flaticon-speech-bubble"></i>
                                <span class="counter">3569</span>
                            </div>
                            <span class="counter-text"> استفسار تمت الأجابة عنه </span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 m-b30">
                        <div class="counter-style-1">
                            <div class="">
                                <i class="icon flaticon-steering-wheel"></i>
                                <span class="counter">{{ $products_numbers }}</span>
                            </div>
                            <span class="counter-text"> منتج حالي </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Stats End -->

    {{--
    <!-- About Us -->
    <div class="section-full bg-white content-inner-1" >
        <div class="container">
            <div class="row dzseth m-b50">
                @foreach ($results as $result)
                    <h2 class="h1 m-b10 m-t0 text-center" >{{ $result->name}} </h2>
                <br><br>
                <div class="col-md-12 col-sm-12 dis-tbl" style="float:right!important; text-align:right">
                    <div class="dis-tbl-cell">

                        <div class="col-sm-12 col-md-12 col-lg-12 m-b30" style="direction: rtl;">
                            {!! $result->description !!}  
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @include('front.layouts.brands')
    </div>
    <!-- About Us End --> --}}
@endsection