
@extends('front.index')

@section('content')

    {{-- Pages Banner Icluding Starts --}}

    @include('front.layouts.pages-banner' )

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


                            @foreach ($result['single_brand_data'] as $results)

                                @php

                                    $results->parent_id = Crypt::encrypt($results->parent_id);
                                    $results->products_id = Crypt::encrypt($results->products_id);
                                @endphp

                                <div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="dlab-feed-list m-b30" >
                                        <a href=" {{ url("/brands/$results->parent_id/product/$results->products_id/") }} ">
                                            <div class="dlab-media" style="height: 150px!important;">

                                                @if ($results->specials_id != null)
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

                                                <img src="{{asset('').'/'.$results->products_image}}" alt="" style="height: 150px!important;">
                                            </div>
                                        </a>
                                        <div class="dlab-info">
                                            <h4 class="dlab-title">
                                                <a href=" {{ url("/brands/$results->parent_id/product/$results->products_id/") }} "> {{ $results->products_name }} </a>
                                            </h4>
                                            <div class="dlab-separator bg-black"></div>
                                            <p class="dlab-price">
                                            <span class="text-primary">
                                                @if ($results->specials_id != null)

                                                    <del> {{ $results->products_price}} </del>

                                                    {{ $results->specials_products_price}}
                                                @else
                                                    {{ $results->products_price }}
                                                @endif
                                            </span>
                                            </p>
                                        </div>
                                        <div class="icon-box-btn text-center">
                                            <ul class="clearfix">
                                                <li>
                                                    {{
                                                        ( !empty( $results->products_model ) ) ? $results->products_model : '-'
                                                    }}
                                                </li>
                                                <li>
                                                    {{
                                                        ( !empty( $results->products_weight ) ) ? $results->products_weight ." ".$results->products_weight_unit : " - "
                                                    }}
                                                </li>
                                                <li>
                                                    {{-- {{

                                                    }}     --}}
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

