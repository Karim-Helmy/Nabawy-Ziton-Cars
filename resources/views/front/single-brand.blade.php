
@extends('front.index')

@section('content')

{{-- Pages Banner Icluding Starts --}}

    @include('front.layouts.pages-banner', [ $results['model_name'] ])

{{-- Pages Banner Icluding Ends --}}

{{-- Page Content Starts --}}

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

                    <div id="masonry" class="dlab-blog-grid-3">


                        @foreach ($result['single_brand_data'] as $result)

                        @php

                            $result->parent_id = Crypt::encrypt($result->parent_id);
                            $result->products_id = Crypt::encrypt($result->products_id);
                        @endphp 

                           <div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="dlab-feed-list m-b30" >
                                    <a href=" {{ url("/brands/$result->parent_id/product/$result->products_id/") }} ">
                                    <div class="dlab-media" style="height: 150px!important;">
                                        
                                        @if ($result->specials_id !== null)
                                        <div class="featured"
                                        style="background: #D81517;
                                        color: #fff;
                                        transform: rotate(45deg);
                                        text-align: center;
                                        position: relative;
                                        top: 25px;
                                        padding: 5px;
                                        left: 100px;"
                                        >
                                        عرض خاص
                                        </div>
                                        @endif
                                            @if ($result->manufacturers_id == 7)
                                                <div class="featured"
                                                     style="background: greenyellow;
                                        color: black;
                                        transform: rotate(45deg);
                                        text-align: center;
                                        position: relative;
                                        top: 25px;
                                        padding: 5px;
                                        left: 100px;"
                                                >
                                                   مستعمل
                                                </div>
                                            @endif
                                        <img src="{{asset('').'/'.$result->products_image}}" alt="" style="height: 150px!important;">
                                    </div>
                                    </a>
                                    <div class="dlab-info">
                                        <h4 class="dlab-title">
                                            <a href=" {{ url("/brands/$result->parent_id/product/$result->products_id/") }} "> {{ $result->products_name }} </a>
                                        </h4>
                                        <div class="dlab-separator bg-black"></div>
                                        <p class="dlab-price">
                                            <span class="text-primary">
                                                @if ($result->specials_id != null)

                                                <del> {{ $result->products_price}} </del>

                                                    {{ $result->specials_products_price}} 
                                                @else 
                                                    {{ $result->products_price }}
                                                @endif
                                            </span>
                                        </p>
                                    </div>
                                    <div class="icon-box-btn text-center">
                                        <ul class="clearfix">
                                            <li>
                                            {{ 
                                                ( !empty( $result->products_model ) ) ? $result->products_model : '-'  
                                            }} 
                                            </li>
                                            <li>
                                                مشاهدة {{ $result->products_viewed }} 
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        @endforeach


                    </div>

                    <!-- blog grid END -->
                    
                </div>
            </div>

            {{-- Sidebar Starts --}}

                @include('front.layouts.sidebar')

            {{-- Sidebar Ends --}}
            
        </div>
    </div>
    @include('front.layouts.brands')
</div>

{{-- Page Content Ends --}}

@endsection

