@extends('frontend.layouts.master')

@section('content')

    @if($isOther ?? null)
        @include('frontend.price_list.partials.mechanized_plaster')
    @else
        @include('frontend.price_list.partials.price_list')
        @include('frontend.price_list.partials.child_category_list')
        {{--
            @include('frontend.blocks.repair_request')
        --}}
        @if( $bid_title != "" )
            @widget('bid', ['bid' => $bid_title])
        @else
            @include('frontend.blocks.repair_request')
        @endif

        {{--@widget('tour3d', ['tours' => $categoryPriceList->tour3d, 'title' => 'Посмотрите максимально реалистичные интерактивные туры по нашим объектам после ремонта'])--}}
        @widget('tour3d')
        @widget('faq', ['faq' => $categoryPriceList->faq])

        @include('frontend.price_list.partials.repair_category_list')

        @widget('blog_block',['category' => 'sovety-uchenogo-proraba','region'=>$selectRegion])
        @include('frontend.price_list.partials.description', ['mainCategory' => $categoryPriceList,'has_padd_40' => true])

    @endif


@endsection
