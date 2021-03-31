@extends('frontend.layouts.master')

@section('content')
@if(isset($page->slides))
@widget('slider', ['slides' => $page->slides,'region'=>$selectRegion])
@endif
@if(isset($page->repairInfo))
@widget('repair_info', ['repairInfo' => $page->repairInfo])
@endif
{{--Только для базовой главной страницы--}}
{{-- && $page->region_id === \App\Models\Region::REGION_DEFAULT--}}

{{--Примеры работ--}}
@include('frontend.blocks.repairs')

{{--калькулятор--}}
@if($page->region->is_default)
@include('frontend.blocks.calculator')
@endif

{{--@widget('banner', ['banner' => $page->banner, 'isHome' => true, 'title' => 'Подробнее'])--}}

{{--бесплатный замер--}}
@if($page->region->is_default)
@include('frontend.blocks.trial')
@else
@if($page->stabanner && $page->stabanner->title)
@widget('banner', ['banner' => $page->stabanner,'isHome'=>true])
@endif
@endif

@if($selectRegion->is_default)
{{-- 3D тур --}}
@widget('tour3d')
@endif

{{--прайсы
@widget('price_list',[
'rub'=>' руб.',
'title' => 'На ремонт квартир',
'priceListCategories' => $priceListCategories,
'region'=>$selectRegion
])

--}}
{{-- отзывы --}}
@widget('reviews', ['reviews' => $reviews, 'isHome' => true, 'title' => 'НАС БЛАГОДАРЯТ И РЕКОМЕНДУЮТ КЛИЕНТЫ', 'avgRating' => $avgRating])
{{--@widget('tour3d', ['tours' => $page->tour3d])--}}



@if($page->region->is_default)
{{-- Виды  ремонта квартир --}}
@include('frontend.homepage.partials.repair_categories')
@endif

{{-- ПОЧЕМУ ВЫБИРАЮТ НАС --}}
@widget('whyWe', ['whyWe' => $page->why_we])

{{-- Почему мы --}}
@widget('design_repair', ['designRepair' => $page->design_repairs])

{{-- ОТВЕТЫ НА ВОПРОСЫ ПО ЗАПРОСУ --}}
@widget('faq', ['faq' => $page->faq])

@if($selectRegion->is_default)
{{-- Полезное о ремонте --}}
@widget('blog_block',['has_padding' => true,'region'=>$selectRegion])
@endif

{{--@include('frontend.homepage.partials.blog_list')--}}
@include('frontend.homepage.partials.description',['has_padd_40' => true])
<div id='popup_portfolio_slider'>
    <div class='popup_block'>
        <div class='close'></div>
    </div>
</div>
@endsection
