<!-- Side bar start -->
<div class="col-sm-3 col-md-3 col-lg-3 sticky-top">
        <aside  class="side-bar">

            <div class="widget recent-posts-entry">

                <h4 class="widget-title" style="float: right">احدث السيارات</h4>

                <div class="widget-post-bx" style="float: right; margin-bottom: 30px;">

                    @if( count( $sidebar_results['products'] ) > 0 )
                        @foreach ($sidebar_results['products'] as  $key=>$product)
                        @php
                            $product->products_id = Crypt::encrypt($product->products_id);
                            $product->categories_id = Crypt::encrypt($product->categories_id);
                        @endphp
                            <div class="widget-post clearfix" style="direction: rtl">
                                <div class="dlab-post-media"> <img src="{{asset('').'/'.$product->products_image}}" alt="" width="200" height="143"> </div>
                                <div class="dlab-post-info">
                                    <div class="dlab-post-header">
                                        <h5><a href=" {{ url("/brands/$product->categories_id/product/$product->products_id") }} ">{{ $product->products_name }}</a></h5>
                                    </div>
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-author open-sans"><b>{{ $product->products_price }} جنيه</b></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    
                    <a href=" {{ url('/brands') }} " class="site-button btn-block text-center">عرض المزيد</a>
                </div>
            </div>

            <div class="widget ads">
                <img src="{{url('public/front/assets/images/ads/img2.jpg')}}" alt=""/>
            </div>

            <div class="widget client-logo-wg" >
                <h4 class="widget-title" style="float: right">احدث الماركات</h4>
                <ul style="float: right">
                    @foreach ($sidebar_results['categories'] as $key=>$categories)
                    @php
                        $categories->id  = Crypt::encrypt($categories->id);
                    @endphp
                        <li class="brand-logo" >
                            <a href=" {{ url("/brands/$categories->id") }} "><img src="{{asset('').'/'.$categories->image}}" alt="{{ $categories->name }}"/></a>
                        </li>
                    @endforeach
                </ul>
            </div>

        </aside>
    </div>
    <!-- Side bar END -->
    