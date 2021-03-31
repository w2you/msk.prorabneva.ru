@extends('frontend.layouts.master')

@section('content')
  @if($category->parentCategory->slug === \App\Models\CategoryMAinRepair::FLAT_REPAIR
  || $category->parentCategory->slug === \App\Models\CategoryMAinRepair::ROOM_REPAIR
  || $category->parentCategory->slug === \App\Models\CategoryMAinRepair::PRIVATE_HOUSE_REPAIR
   || $category->parentCategory->slug === \App\Models\CategoryMainRepair::COMMERCIAL_ROOM_REPAIR)

    @widget('banner_slide',['id'=> $category['banner_slide_id'],'slide_link' => $category['banner_slide_link']])

    @include('frontend.partials.breadcrumbs_in')
  @endif

  @if ($slug == \App\Models\CategoryMainRepair::COMMERCIAL_ROOM_REPAIR)
    {{--<section class="banner_top_section">--}}
    {{--<div class="block_banner">--}}
    {{--<div class="img_banner">--}}
    {{--<img src="/storage/slides/September2018/vOOB0W5r2O1PciggKDy4.jpg" alt="Акция - Прораб нева">--}}
    {{--</div>--}}
    {{--<div class="text_slid_wrapper">--}}
    {{--<div class="text_banner">--}}
    {{--<div class="title_block_banner">--}}
    {{--- 15% на ремонт <br> коммерческих помещений--}}
    {{--</div>--}}
    {{--<p>--}}
    {{--Скидка 15% на ремонт офисов, магазинов, ресторанов . . .--}}
    {{--</p>--}}
    {{--<div class="read_more">--}}
    {{--<a class="call_open_popup_button" href="#">Узнать больше</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}

    {{--<section class='navigation'>--}}
    {{--<div class='wrapper_new'>--}}
    {{--<ul class='clearfix'>--}}
    {{--<li>--}}
    {{--<a href='/'>--}}
    {{--<img src="{{ asset('frontend/images/home_icon.png') }}" alt='Прораб Нева'>--}}
    {{--</a>--}}
    {{--</li>--}}

    {{--@foreach($breadCrumbs as $key => $breadCrumb)--}}
    {{--@if($breadCrumb != "Ремонт квартир")--}}

    {{--<li>--}}
    {{--@if (is_numeric($key))--}}
    {{--<a>--}}
    {{--{{ $breadCrumb }}--}}
    {{--</a>--}}
    {{--@else--}}
    {{--<a href="{{ $key }}">--}}
    {{--{{ $breadCrumb }}--}}
    {{--</a>--}}
    {{--@endif--}}

    {{--</li>--}}
    {{--@endif--}}

    {{--@endforeach--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</section>--}}
  @endif

  @if($category->parentCategory->slug !== \App\Models\CategoryMAinRepair::COMMERCIAL_ROOM_REPAIR && $category->slug != \App\Models\CategoryRepair::OFFISE_REPAIR)
    @include('frontend.repairs.partials.advantages', ['mainCategory' => $category])
    {{--@widget('repair', ['childCategory' => $category])--}}
    @include('frontend.blocks.repairs')
  @else
    @include('frontend.repairs.partials.operations')
    @include('frontend.repairs.partials.what_we_do')
  @endif

  @if($category->parentCategory->slug === \App\Models\CategoryMAinRepair::COMMERCIAL_ROOM_REPAIR || $category->slug == \App\Models\CategoryRepair::OFFISE_REPAIR)
    @widget('whyWe', ['whyWe' => $category->why_we, 'class' => 'commercial_why_we','is_old' => true])
  @endif

  @if($category->parentCategory->slug !== \App\Models\CategoryMAinRepair::COMMERCIAL_ROOM_REPAIR &&
      $category->parentCategory->slug !== \App\Models\CategoryMAinRepair::FLAT_REPAIR && $category->slug != \App\Models\CategoryRepair::OFFISE_REPAIR)
    @if( $category->parentCategory->slug!= \App\Models\CategoryMAinRepair::PRIVATE_HOUSE_REPAIR)
      @if($category->parentCategory->slug == "remont-komnat")
		{{--
        @widget('price_list',[
        'rub'=>' руб.',
        'title' => 'на ремонт комнат',
        'priceListCategories' => $priceListCategories,
        'region'=>$selectRegion
        ])
		--}}
      @endif
    @else
	{{--
      @widget('price_list',[
      'rub'=>' руб.',
      'title' => 'на ремонт квартир и домов',
      'priceListCategories' => $priceListCategories,
      'region'=>$selectRegion
      ])
	  --}}
    @endif
  @endif
  @if($category->parentCategory->slug === \App\Models\CategoryMAinRepair::FLAT_REPAIR)
    @include('frontend.repairs.partials.prices')
  @endif

  @widget('banner', ['banner' => $category->banner, 'class' => 'object_stock object_page_4'])

  @if($category->parentCategory->slug === \App\Models\CategoryMAinRepair::FLAT_REPAIR  && $category->slug != \App\Models\CategoryRepair::OFFISE_REPAIR)
    @include('frontend.blocks.calculator')

    @include('frontend.blocks.trial')
    @include('frontend.blocks.whyWe')

  @endif

  @if($category->parentCategory->slug === \App\Models\CategoryMAinRepair::PRIVATE_HOUSE_REPAIR)
    @if($selectRegion->is_default)
        @widget('partners', ['partners' => $partners, 'region'=>$selectRegion])
    @endif
  @endif

  @if($category->parentCategory->slug === \App\Models\CategoryMAinRepair::ROOM_REPAIR &&
  $category->parentCategory->slug !== \App\Models\CategoryMAinRepair::PRIVATE_HOUSE_REPAIR)
    @if($selectRegion->is_default)
        @widget('partners', ['partners' => $partners, 'region'=>$selectRegion])
    @endif
  @endif

  @if($category->parentCategory->slug !== \App\Models\CategoryMAinRepair::ROOM_REPAIR &&
      $category->parentCategory->slug !== \App\Models\CategoryMAinRepair::PRIVATE_HOUSE_REPAIR
      && $category->parentCategory->slug !== \App\Models\CategoryMAinRepair::FLAT_REPAIR)
    @if($category->parentCategory->slug !== \App\Models\CategoryMAinRepair::COMMERCIAL_ROOM_REPAIR && $category->slug != \App\Models\CategoryRepair::OFFISE_REPAIR)
      @widget('reviews', ['title' => 'ОТЗЫВЫ КЛИЕНТОВ О «ПРОРАБ НЕВА»'])
    @endif
  @else
  @endif

  @if($category->parentCategory->slug === \App\Models\CategoryMAinRepair::FLAT_REPAIR && $category->slug != \App\Models\CategoryRepair::OFFISE_REPAIR)
    @widget('reviews', ['title' => 'НАС БЛАГОДАРЯТ И РЕКОМЕНДУЮТ КЛИЕНТЫ'])
  @endif

  @if($category->parentCategory->slug === \App\Models\CategoryMAinRepair::FLAT_REPAIR)
    @if($selectRegion->is_default)
      @widget('tour3d')
    @endif
  @endif

  @if($category->parentCategory->slug == \App\Models\CategoryMAinRepair::COMMERCIAL_ROOM_REPAIR || $category->slug == \App\Models\CategoryRepair::OFFISE_REPAIR)
    @include('frontend.blocks.we_are_trusted',['class_section' => 'trust_us_padd'])
  @endif
  @if($category->parentCategory->slug == \App\Models\CategoryMAinRepair::FLAT_REPAIR  && $category->slug != \App\Models\CategoryRepair::OFFISE_REPAIR)
    <div class="partner_bg">
        @if($selectRegion->is_default)
            @widget('partners', ['partners' => $partners, 'region'=>$selectRegion])
        @endif
    </div>
    <div class="bg_white">
      @widget('our_team',['region'=>$selectRegion])
    </div>
    @widget('blog_block',['region'=>$selectRegion])
  @endif
  @if(($category->parentCategory->slug == \App\Models\CategoryMAinRepair::ROOM_REPAIR ||
       $category->parentCategory->slug == \App\Models\CategoryMAinRepair::PRIVATE_HOUSE_REPAIR) && $category->slug != \App\Models\CategoryRepair::OFFISE_REPAIR)
    @widget('reviews', ['title' => 'ОТЗЫВЫ КЛИЕНТОВ О «ПРОРАБ НЕВА»'])
  @endif
  @if($category->parentCategory->slug !== \App\Models\CategoryMAinRepair::FLAT_REPAIR &&
  $category->parentCategory->slug !== \App\Models\CategoryMAinRepair::COMMERCIAL_ROOM_REPAIR && $category->slug != \App\Models\CategoryRepair::OFFISE_REPAIR)
    @if($selectRegion->is_default )
      {{-- 3D тур --}}
      {{--@widget('tour3d', ['tours' => $category->tour3d])--}}
      @widget('tour3d')
    @endif
  @endif
  @if($category->parentCategory->slug == \App\Models\CategoryMAinRepair::COMMERCIAL_ROOM_REPAIR || $category->slug == \App\Models\CategoryRepair::OFFISE_REPAIR)
    @include('frontend.repairs.partials.commercial_repair_list',['mainCategory' => $category])
  @endif
  @widget('faq', ['faq' => $category->faq])
  @if($category->slug == "remont-spalni" || $category->slug == "remont-zagorodnyh-domov" || $category->slug == "remont-taunhausov" || $category->slug == "remont-daci")
    @widget('design_repair', ['designRepair' => $category->design_repairs, 'class' => ''])
  @else
    @widget('design_repair', ['designRepair' => $category->design_repairs, 'class' => 'design_repairs_page_4'])
  @endif

  @if($category->parentCategory->slug === \App\Models\CategoryMAinRepair::ROOM_REPAIR)
    <div class="bg_white">
      @widget('our_team',['region'=>$selectRegion])
    </div>
    @if($selectRegion->is_default)
      {{-- Полезное о ремонте --}}
      @widget('blog_block',['region'=>$selectRegion])
    @endif
    @include('frontend.repairs.partials.description', ['mainCategory' => $category,'has_padd_40' => true])
  @else
    @include('frontend.repairs.partials.description', ['mainCategory' => $category])
  @endif

  <div id='popup_portfolio_slider'>
    <div class='popup_block'>
      <div class='close'></div>
    </div>
  </div>
@endsection
