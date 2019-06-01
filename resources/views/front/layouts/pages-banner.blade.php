<style>
    .overlay-black-dark:after, .overlay-black-light:after, .overlay-black-middle:after {
        background: none;
    }

    .dlab-bnr-inr:before {
        content: none;  
    }



    .used-car-banner {
        height: 720px;
    }</style>
<!-- inner page banner -->
<div class="dlab-bnr-inr overlay-black-middle used-car-banner latest-cars"
    style=" background-image:url('{{ asset('/').$pages_banner->banners_image }}');
            background-position: center;
            background-size: cover;
            width: 100vw;
            ">
   <div class="col-md-5 col-md-offset-6 col-sm-12" style="margin-top: 200px;direction: rtl">
        <h1 style="color: white;font-weight: bold;font-size: xx-large;line-height: 50px;">{{$pages_banner->banners_title}} </h1>
        <i class="fa fa-phone" style = "color : white;font-size: xx-large;margin-left: 20px;"></i>
        <h1 style="color: white;font-weight: bold;font-size: sm-large;
    display: inline;">01001883300 / 01025388822 / 01025377766 </h1>
        </div>
</div>

<!-- inner page banner END -->
<!-- Breadcrumb row -->

<div class="breadcrumb-row" style="direction: rtl">
    <div class="container">
        <ul class="list-inline">
            <li><a href="{{ url('/') }}"> الرئيسية </a></li>

            <?php
            $path_segment = 2;
            $sublink = '';
            ?>
            @for($i=1;$i < $path_segment; $i++)

                @if(!empty(Request::segment($i)) and !is_numeric(Request::segment($i)))

                    @if($i != 2)
                        <?php $sublink .= '/'; ?>
                    @endif

                    <?php $sublink .= Request::segment($i); ?>
        
                    @php
                        if ( isset( $results['page_name'] ) ) :
                    @endphp

                        <li> <a href="{{ url('/').$sublink}}"> {{ $results['page_name'] }} </a></li>

                    @php
                        else :        
                    @endphp


                        <li> <a href="{{ url('/').$sublink}}">{{trans('labels.'.Request::segment($i))}}</a></li>

                            @php
                                if ( isset($results['model_name']) ) : 
                                $results['model_id'] = Crypt::encrypt($results['model_id']);
                            @endphp

                                <li> <a href="{{ url('/').$sublink."/".$results['model_id']}}"> {{ $results['model_name'] }} </a></li>

                            @php
                                endif;
                            @endphp
                    
                    @php
                        endif;
                    @endphp

                
                @endif

            @endfor
            
            @if( !empty($master) )
                <li>   {!! $master !!}</li>
            @endif
        
        </ul>
    </div>
</div>


<!-- Breadcrumb row END -->