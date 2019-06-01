@extends('front.index')

@section('content')
    {{-- Pages Banner Starts --}}
        @include('front.layouts.pages-banner')
    {{-- Pages Banner Ends --}}

    <div class="container">
        <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-9">
                        <div class="row" >
                
                            <div class="p-lr15 clearfix m-b15">
                                <h2 class="h2 m-t30 text-right">أخر العروض</h2>
                            </div>
                
                            <div id="masonry" class="dlab-blog-grid-3">

                                @foreach ($offered_projects as $project)
                                    @php
                                        $project->products_id = Crypt::encrypt($project->products_id);
                                        $project->parent_id = Crypt::encrypt($project->parent_id);
                                    @endphp
                                <div class="post card-container col-lg-4 col-md-6 col-sm-6 col-xs-12" style="float: right;">
                                    <div class="dlab-feed-list m-b30">
                                        <div class="dlab-media"> 
                                            <a href="{{ url("/brands/$project->parent_id/products/$project->products_id") }}"><img src="{{ asset('/')."/".$project->products_image}}" alt=""></a> 
                                        </div>
                                        <div class="dlab-info">
                                            <h4 class="dlab-title"><a href="{{ url("/brands/$project->parent_id/product/$project->products_id") }}">
                                                {{ $project->products_name }} 
                                            </a></h4>
                                            <div class="dlab-separator bg-black"></div>
                                            <p class="dlab-price"><del>{{ $project->products_price }}</del> <span class="text-primary">{{ $project->specials_new_products_price }}</span></p>
                                        </div>
                                        <div class="icon-box-btn text-center">
                                            <span><strong>{{ $project->products_model }}</strong></span>
                                        </div>
                                    </div>
                                </div>

                                @endforeach


                            </div>
                
                        </div>
                    </div>


                {{-- Sidebar Starts --}}

                    @include('front.layouts.sidebar')

                {{-- Sidebar Ends --}}
        </div>
    </div>


@endsection