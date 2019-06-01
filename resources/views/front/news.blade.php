@extends('front.index')

@section('content')

{{-- Pages Banner Icluding Starts --}}
@include('front.layouts.pages-banner')
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->

        <!-- Breadcrumb row END -->
        <div class="section-full content-inner bg-white">
            <div class="container">
                <div class="row">
                    <!-- left part start -->
                    <div class="col-md-9 col-sm-8 blog-sticky-left text-right" >
                        <div class="row">
                        @if(count($news)>0)
                            @foreach ($news as  $key=>$new)
                            <!-- blog grid -->
                                @php
                                    // Encryptind news ID
                                        $new->news_id = Crypt::encrypt($new->news_id);
                                @endphp
                            <div id="masonry" class="dlab-blog-grid-3" style="direction: rtl">
                                <div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <div class="blog-post blog-grid date-style-2">
                                        <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="{{url("/singelnews/$new->news_id")}}"><img style="height: 250px;" src="{{asset('').'/'.$new->news_image}}" alt=""></a> </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-title ">
                                                <h3 class="post-title"><a href="{{url("/singelnews/$new->news_id")}}">{{ $new->news_name }}</a></h3>
                                            </div>
                                            <div class="dlab-post-meta ">
                                                <ul>
                                                    <li class="post-date"> <i class="fa fa-calendar"></i>{{ date('d M, Y', strtotime($new->news_date_added)) }} </li>
                                                    <li class="post-author"><i class="fa fa-user"></i> <a href="#">النبوى زيتون</a> </li>

                                                </ul>
                                            </div>
                                            <div class="dlab-post-text">
                                                <p>{{ strip_tags(str_limit($new->news_description , 100)) }}</p>
                                            </div>
                                            <div class="dlab-post-readmore"> <a href="{{url("/singelnews/$new->news_id")}}" title="READ MORE" rel="bookmark" class="site-button-link"> اقرأ المزيد<i class="fa fa-angle-double-left"></i></a> </div>
                                            
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- blog grid END -->
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6">{{ trans('labels.NoRecordFound') }}.</td>
                                </tr>
                        @endif
                            <!-- Pagination -->
                            <div class="pagination-bx col-lg-12 clearfix ">
                                <ul class="pagination">
                                    {{$news->links()}}
                                </ul>
                            </div>
                            <!-- Pagination END -->
                        </div>
                    </div>
                    <!-- left part END -->
                    {{-- Sidebar Starts --}}

                    @include('front.layouts.sidebar')

                    {{-- Sidebar Ends --}}
                </div>
            </div>
        </div>
        @include('front.layouts.brands')
    </div>
    <!-- Left & right section END -->
    <!-- Content END-->



@endsection