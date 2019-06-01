
@extends('front.index')

@section('content')

{{-- Pages Banner Icluding Starts --}}

    @include('front.layouts.pages-banner')

{{-- Pages Banner Icluding Ends --}}

{{-- Page Content Starts --}}

{{-- Facebook Comments Starts --}}

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=260020104655754&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

{{-- Facebook Comments Ends --}}



<div class="section-full content-inner bg-white">
    <div class="container">
        <div class="row">

            <!-- left part start -->

            <div class="col-sm-9 col-md-9 col-lg-9">
                <div class="row">
                    <div class="p-lr15 clearfix m-b15">
                        <h1 class="widget-title" style="float: right">{{$pageTitle}}</h1>
                    </div>
                    <!-- blog grid  -->
                        @foreach ($results['categories'] as $key=>$categories)
                        @php
                        // Encryptind Brand_ID
                            $categories->categories_id = Crypt::encrypt($categories->categories_id);
                        @endphp
                        <div 
                            class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center" style="float:right;">
                            <a href="{{ url("/brands/$categories->categories_id/") }}">
                                <div style="width: 95%;height: 150px;padding: 10px;border: 1px solid #eee;margin: 15px auto;box-shadow: 0px 2px 0px #ccc;">
                                    <img src="{{asset('').'/'.$categories->categories_image}}" alt="{{ $categories->categories_name }}" style="height: 90px;">
                                    <h4 style="text-align: center" style="font-weight: bold !important;">
                                        {{ $categories->categories_name }}
                                    </h4>
                                </div>
                            </a>
                        </div>
                        @endforeach

                    <!-- blog grid END -->
                    <div class="fb-comments" data-href="https://www.facebook.com/elnabwey/" data-width="100%" data-numposts="41"></div>
                </div>
            </div>

            <!-- left part END -->
            
            {{-- Sidebar Starts --}}

                @include('front.layouts.sidebar')
                
            {{-- Sidebar Ends --}}

            
        </div>
    </div>
</div>

{{-- Page Content Ends --}}

@endsection

