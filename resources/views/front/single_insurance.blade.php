
@extends('front.index')
<style>
    dl {
        border-bottom: .5px solid #D81517;

    }
</style>
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
                <div class="row m-b30">
                    
                    <div class="col-xs-12 col-md-6 col-lg-6 text-center">
                        <img style=" " src="{{ asset('/').$insurance_data->image }}" alt="">
                    </div>
                    
                    <div class="p-lr15 clearfix m-b15 col-xs-12 col-md-6 col-lg-6 text-right">
                        <h1 class="widget-title" >{{$pageTitle}}</h1>
                    </div>
                </div>
                <div class="row">

                    <!-- blog grid  -->
                    <div class="col-xs-12 text-right">
                        <dl>
                            <dt> قيمة القسط </dt>
                            <dd> {{ $insurance_data->kest }} </dd>
                        </dl>
                        <dl>
                            <dt> نوع التغطية </dt>
                            <dd> {{ $insurance_data->taghtya }} </dd>
                        </dl>
                        <dl>
                            <dt> نسبة تحمل التعميل </dt>
                            <dd> {{ $insurance_data->nesbat_ameel }} </dd>
                        </dl>
                        <dl>
                            <dt> المسئولية المدنية </dt>
                            <dd> {{ $insurance_data->madanya }} </dd>
                        </dl>
                        <dl>
                            <dt> نسبة الاهلاك </dt>
                            <dd> {{ $insurance_data->destruction }} </dd>
                        </dl>
                        <dl>
                            <dt> نسبة الأهلاك الكلي </dt>
                            <dd> {{ $insurance_data->ehlak }} </dd>
                        </dl>
                        <dl>
                            <dt> الحد الاقصى للتحمل دون محضر </dt>
                            <dd> {{ $insurance_data->aksa }} </dd>
                        </dl>
                        <dl>
                            <dt> طريقة صرف قيمة التأمين </dt>
                            <dd> {{ $insurance_data->sarf }} </dd>
                        </dl>
                    </div>


                    <div class="col-xs-12">

                    </div>

                </div>
            </div>

            <!-- left part END -->
            
            {{-- Sidebar Starts --}}

                @include('front.layouts.sidebar')
                
            {{-- Sidebar Ends --}}

            
        </div>
    </div>
</div>

@endsection