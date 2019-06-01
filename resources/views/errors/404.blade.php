@extends('front.index')

@section('content')
<!-- contact area -->
<div class="section-full bg-white content-inner-1" style="background-image:url(http://carzone.dexignlab.com/xhtml/images/banner/bnr3.jpg);">
    <div class="container">
    <!-- 404 Page -->
        <div class="row">
            <div class="col-md-12">
                <div class="page-notfound text-center">
                    <strong style="color:#fff;text-shadow:5px 5px 20px #000">404</strong>
                    <h5 class="m-b20 text-uppercase">Page not found</h5>
                    <a href="{{ url('/') }}" class="site-button-secondry button-lg"><span>Go to home</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 Page END -->
</div>
@endsection