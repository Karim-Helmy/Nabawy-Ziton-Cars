@extends('front.index')

@section('content')

{{-- Pages Banner Icluding Starts --}}
@include('front.layouts.pages-banner')
<!-- Content -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=260020104655754&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="page-content">

    <div class="section-full content-inner bg-white">
        <div class="container">
            <div class="row">
                <!-- Left part start -->
                <div class="col-md-9 ">
                    <!-- blog start -->
                    <div class="blog-post blog-single text-right">
                        <div class="dlab-post-title ">
                            <h3 class="post-title"><a href="#">{{$result['news'][0]->news_name }}</a></h3>
                        </div>
                        <div class="dlab-post-meta m-b20">
                            <ul>
                                <li class="post-date"> <i class="fa fa-calendar"></i>{{ date('d M, Y', strtotime($result['news'][0]->news_date_added)) }}</li>
                                <li class="post-author"><i class="fa fa-user"></i> <a href="#">النبوى زيتون</a> </li>
                                <li class="post-comment"><i class="fa fa-comments-o"></i> <a href="#"></a> </li>
                            </ul>
                        </div>
                        <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="#"><img src="{{asset('').$result['news'][0]->news_image}}" alt=""></a> </div>
                        <div class="dlab-post-text text-right">
                            {!! $result['news'][0]->news_description  !!}
                        </div>
                        <div class="dlab-post-tags clear">
                            <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a href="#">Money </a> <a href="#">Resturent </a> </div>
                        </div>
                    </div>
                    <div class="clear" id="comment-list">
                        <div class="comments-area" id="comments">

                            <div class="fb-comments"  data-href="https://www.facebook.com/elnabwey/" data-width="100%" data-numposts="41" ></div>
                        </div>
                    </div>
                    <!-- blog END -->
                </div>
                <!-- Left part END -->
                <!-- Side bar start -->
            @include('front.layouts.sidebar')
                <!-- Side bar END -->
            </div>
        </div>
    </div>
    @include('front.layouts.brands')
</div>
<!-- Content END-->



@endsection