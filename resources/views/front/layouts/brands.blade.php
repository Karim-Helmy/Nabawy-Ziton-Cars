<!-- Client logo Carousel -->
<div class="section-full bg-img-fix p-t30 p-b30 ">
    <div class="container">
        <div class="section-content">
            <div class="client-logo-carousel owl-carousel mfp-gallery gallery owl-btn-center-lr">
                @foreach ($brands as $categories)
                @php
                    $categories->id = Crypt::encrypt($categories->id);
                @endphp
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo">
                                <a href="{{ url("/brands/$categories->id") }}">
                                    <img 
                                        src="{{asset('').'/'.$categories->image}}" 
                                        alt="{{ $categories->name }}"
                                        style="height: 70px!important"
                                        >
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Client logo Carousel END -->