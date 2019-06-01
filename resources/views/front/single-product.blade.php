@extends('front.index')
@section('content')
@include('front.layouts.pages-banner')
<div class="section-full p-t50 bg-white content-inner-2">
    <div class="container">
        <div class="row">
            
            <div class="col-md-8">

                <div class="m-b30">
                    <h3 class="h3 m-t0">
                        {{ $results['product']->products_name }}   <br>
                    </h3>
                    @if ( isset($results['remaining_to_expire']) )
                        <span
                            style="
                            padding: 5px;
                            color:#D81517;
                            margin: 25px 0px ;"
                            
                            >{{ $results['remaining_to_expire'] }}</span>
                    @endif
                    <ul class="used-car-dl-info">
                        @if ($results['product']->specials_id != null)
                            <li>
                                {{ $results['product']->specials_products_price }}
                                <del>
                                    {{ $results['product']->products_price }}
                                </del>
                                جنية    
                            </li>
                        @else 
                            <li>
                              جنيه {{ $results['product']->products_price }}
                            </li>
                        @endif
                        <li>
                            <i class="fa fa-calendar"></i> Updated on : {{ 
                                date('d M, Y', strtotime($results['product']->products_date_added)) }} 
                        </li>
                        <li>
                            <i class="fa fa-eye"></i> {{ $results['product']->products_viewed+1 }} Views
                        </li>
                    </ul>
                </div>

                <div class="image-heading">
                    <a data-fancybox-trigger="gallery" href="{{ asset('/').$results['product']->products_image }}" data-fancybox="images"> 
                
                    <img src=" {{ asset('/').$results['product']->products_image }} " alt="">
                    </a>
                </div>

            </div>

            <div class="col-md-4">
                <div class="widget-post clearfix" style="direction: rtl">
                    <h4 class="widget-title"> سيارات مشابهة </h4>
                        <div class="widget recent-posts-entry">

                            <div class="widget-post-bx">

                                @foreach ($results['products_in_categories'] as $product)
                                    
                                @php
                                    $product->parent_id = Crypt::encrypt($product->parent_id);
                                    $product->products_id = Crypt::encrypt($product->products_id);
                                @endphp
                                    
                                <div class="widget-post clearfix">
                                   
                                    <div class="dlab-post-media"> 
                                        <img src=" {{ asset('/').$product->products_image }} " alt="" width="200" height="143"> 
                                    </div>
                                   
                                    <div class="dlab-post-info">
                                        <div class="dlab-post-header">
                                            <h5>
                                                <a 
                                                    href=" {{ url("/brands/$product->parent_id/product/$product->products_id") }} ">
                                                    {{ $product->products_name }}
                                                </a>
                                            </h5>
                                        </div>
                                   
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <li class="post-author open-sans"><b> {{ $product->products_price }} </b></li>
                                            </ul>
                                        </div>
                                   
                                    </div>
                                </div>

                                @endforeach
                                
                            </div>
                            
                        </div>
                </div>
            </div>

        </div>
    </div>

    <div class="specifications owl-carousel owl-btn-center-lr">

        @foreach($results['product_images'] as $single_image)

        <div class="item" >
            <div class="dlab-thum-bx"> 
                <a data-fancybox-trigger="gallery" href="{{ asset('/').$single_image->image }}" data-fancybox="images"> 
                    <img src=" {{ asset('/').$single_image->image }} " alt=""> 
                </a>
            </div>
        </div>
        
        @endforeach

    </div>


    <div class="container">
        <div class="row">
            <!-- Side bar start -->
            
            <div class="icon-bx-wraper bx-style-1 p-a20 text-center">
                <h2>DESCRIPTION {{ $results['product']->products_name }} </h2>
                <div class="text-right">  {!!  $results['product']->products_description !!}</div>
            </div>
            
            <div class="col-md-12 text-center">

                <div class="used-car-features grid2 clearfix m-b30 m-t30 text-center" >
                    
                    <div class="car-features">
                        <i class="flaticon-calendar"></i>
                        <h5> {{ $results['product']->products_model }} </h5>
                        <span>سنة الموديل</span>	
                    </div>

                    <div class="car-features">
                        <i class="flaticon-gas-station"></i>
                        <h5>Diesel</h5>
                        <span>Fuel</span>	
                    </div>

                    <div class="car-features">
                        <i class="flaticon-mechanic"></i>
                        <h5>Individual</h5>
                        <span>Seller</span>	
                    </div>

                    <div class="car-features">
                        <i class="flaticon-calendar"></i>
                        <h5>Automatic</h5>
                        <span>Transmission</span>	
                    </div>

                    <div class="car-features">
                        <i class="flaticon-car-key"></i>
                        <h5> الحالة </h5>
                        <span> {{ $results['product']->manufacturers_name }}  </span>	
                    </div>
                    
                    <div class="car-features">
                        <i class="flaticon-car-key"></i>
                        <h5> الحالة </h5>
                        <span> {{ $results['product']->manufacturers_name }}  </span>	
                    </div>

                </div>

                <div class="clearfix m-t30">
                    <div class="dlab-tabs">
                        <div class="tab-content">
                            <div  class="tab-pane active clearfix city-list">
                                <div class="icon-bx-wraper bx-style-1 p-a30">
                                    <h3 
                                        style="
                                        background-color: #D81517;
                                        border-radius: 2px;
                                        color: #fff;
                                        font-weight: 800;
                                        padding: 10px;"> خصائص السيارة </h3>
                                    <ul class="table-dl clearfix">
                                        @foreach( $results['attributtes'] as $attribute )
                                        <li>
                                            <div class="rightview"> {{ $attribute->products_options_values_name }} </div>
                                            <div class="leftview"> {{ $attribute->products_options_name }} </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="modal fade lead-form-modal" id="car-details" tabindex="-1" role="dialog" >
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="modal-body clearfix">
                                <div class="pull-letf max-width-300"></div>
                                <div class="lead-form">
                                    <form>
                                        <h3 class="m-t0">Personal Details</h3>
                                        <div class="form-group">
                                            <input  value="" class="form-control" placeholder="Name"/>
                                        </div>	
                                        <div class="form-group">
                                            <input  value="" class="form-control" placeholder="Mobile Number"/>
                                        </div>
                                        <div class="clearfix">
                                            <button type="button" class="btn-primary site-button btn-block">Submit </button>
                                        </div>
                                    </form>
                                </div>
                            </div>	
                        </div>
                    </div>
                </div>


            </div>
            
            <!-- Side bar END -->
        </div>
    </div>
    @include('front.layouts.brands')
</div>
@endsection