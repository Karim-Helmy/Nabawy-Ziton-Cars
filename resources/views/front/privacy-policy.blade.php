@extends('front.index')

@section('content')

{{-- Pages Banner Icluding Starts --}}

    @include('front.layouts.pages-banner')

{{-- Pages Banner Icluding Ends --}}
<style>
    h3 {
        background: #d0241f;
        padding: 10px;
        color: #fff;
    }
</style>

<div class="content-area">
    <!-- Career -->
    <div class="container">
        <div class="row">
            <!-- Left part start -->
            <div class="col-sm-12 col-md-12 col-lg-12 m-b30" style="float:right !important;text-align:right">
                <h1 class="m-b20 m-t0">مرحباً بكم في سياسة الأستخدم الخاصة بموقع النبوى زيتونة </h1>
                
                @foreach ($results as $result)

                    {!! $result->description !!}

                @endforeach
                
            </div>
            <!-- Left part END -->
        </div>
    </div>
    <!-- Career END -->
    @include('front.layouts.brands')
</div>

@endsection