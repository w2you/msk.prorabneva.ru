@extends('frontend.layouts.master')

@section('content')

    @include('frontend.about.partials.map')
    @widget('whyWe', ['whyWe' => $page->why_we])
    @widget('our_team',['region'=>$selectRegion])
    @include('frontend.about.partials.principles')
    @widget('reviews', ['title' => 'НАС БЛАГОДАРЯТ И РЕКОМЕНДУЮТ КЛИЕНТЫ'])
    {{--@widget('tour3d', ['tours' => $page->tour3d])--}}

    @if($selectRegion->is_default)
        @widget('tour3d')
    @endif

    @if($selectRegion->is_default)
        @widget('blog_block',['region'=>$selectRegion])
    @endif

    @if($selectRegion->is_default)
        @widget('partners', ['partners' => $page->partners,'region'=>$selectRegion])
    @endif


    {{--@include('frontend.homepage.partials.description',['has_padd_40' => true])--}}
    {{--@include('frontend.about.partials.info')--}}
@endsection
