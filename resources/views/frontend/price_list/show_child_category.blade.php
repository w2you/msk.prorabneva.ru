@extends('frontend.layouts.master')

@section('content')
    @include('frontend.price_list.partials.child_price_list')
    @widget('whyWe', ['whyWe' => $childCategory->why_we, 'hideTitle' => true])
    @include('frontend.blocks.repair_request')

    @widget('blog_block',['category' => 'sovety-uchenogo-proraba','region'=>$selectRegion])

    @include('frontend.price_list.partials.description', ['categoryPriceList' => $childCategory,'has_padd_40' => true])
@endsection
