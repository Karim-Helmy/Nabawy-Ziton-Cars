
@extends('front.index')

@section('content')

{{-- Pages Banner Icluding Starts --}}

    @include('front.layouts.pages-banner')

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
                        @foreach ($insurancesData['insurances'] as $key=>$Insurances)
                        @php
                            $Insurances->id = Crypt::encrypt($Insurances->id);
                        @endphp
                        <div 
                            class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center" 
                            style="float:right;">
                            <a href="{{ route('single_insurance', $Insurances->id) }}">
                                <div style="padding: 10px;border: 1px solid #eee;margin: 15px auto;box-shadow: 0px 2px 0px #ccc;">
                                    <img src="{{asset('').$Insurances->image}}" alt="{{ $Insurances->name }}" 
                                    style="
                                        width: 100%;
                                        height: 200px;
                                    ">
                                    <h4 style="text-align: center" style="font-weight: bold !important;">
                                        {{ $Insurances->name}}
                                    </h4>
                                </div>
                            </a> 
                        </div>
                        @endforeach

                    <!-- blog grid END -->

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

