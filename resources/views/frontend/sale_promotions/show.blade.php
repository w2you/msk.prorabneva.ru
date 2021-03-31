@extends('frontend.layouts.master')

@section('content')
    @include('frontend.sale_promotions.partials.sale_list')
    @include('frontend.sale_promotions.partials.conditions')
    @if($sale->slug !="chistyj-dom" && $sale->slug !="teplyj-priem")
        @include('frontend.sale_promotions.partials.banner')

    @endif
    @widget('banner', ['banner' => @json_decode($sale->banner), 'isHome' => false])
    {{--@widget('tour3d', ['tours' => $sale->tour3d])--}}
    @widget('tour3d')
    @widget('whyWe', ['whyWe' => @json_decode($sale->why_we)])
@endsection
