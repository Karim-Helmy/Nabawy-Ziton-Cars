@extends('front.index')
@section('content')

{{-- Pages Banner Icluding Starts --}}

    @include('front.layouts.pages-banner', [ $results['page_name'] ])

{{-- Pages Banner Icluding Ends --}}


@foreach ($results['result'] as $result)
    <div class="page-content bg-white">

                {!! $result->description !!}

        @include('front.layouts.brands')
    </div>
    
@endforeach

@endsection