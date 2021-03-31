@extends('frontend.layouts.master')

@section('content')

  @if( $slug === \App\Models\CategoryMAinRepair::ROOM_REPAIR || $slug === \App\Models\CategoryMAinRepair::PRIVATE_HOUSE_REPAIR || $slug === \App\Models\CategoryMAinRepair::COMMERCIAL_ROOM_REPAIR)
    @widget('banner_slide',['id'=> $mainCategory['banner_slide_id'],'slide_link' => $mainCategory['banner_slide_link']])
    @include('frontend.partials.breadcrumbs_in')
  @endif
  @if($mainCategory->slug !== \App\Models\CategoryMainRepair::COMMERCIAL_ROOM_REPAIR)
    @include('frontend.repairs.partials.advantages')
  @else
    @include('frontend.repairs.partials.operations', ['category' => $mainCategory])
    @include('frontend.repairs.partials.what_we_do', ['category' => $mainCategory])
  @endif
  @if($mainCategory->slug !== \App\Models\CategoryMainRepair::COMMERCIAL_ROOM_REPAIR)
    {{--@include('frontend.repairs.partials.repair_list')--}}
    @include('frontend.blocks.repairs', ['item'=>$mainCategory])
  @endif

  @if($mainCategory->slug !== \App\Models\CategoryMainRepair::COMMERCIAL_ROOM_REPAIR)
    @if($mainCategory->slug == "remont-domov")
      {{--            <section class='price_list_repairs'>
                      <h2 class='title_section'>
                          ПРАЙС-ЛИСТ НА РЕМОНТ <br> ЧАСТНОГО ДОМА
                      </h2>
                      <!--cheng fixs page-->
                      @include('frontend.homepage.partials.prices')
                  </section>
      @widget('price_list',[
      'rub'=>' руб.',
      'title' => 'ремонт квартир и домов',
      'priceListCategories' => $priceListCategories,
      'region'=>$selectRegion
      ])
	  --}}
    @elseif($mainCategory->slug == "remont-komnat")
      {{--            <section class='price_list_repairs'>
                      <h2 class='title_section'>
                          ПРАЙС-ЛИСТ НА РЕМОНТ КОМНАТ
                      </h2>
                      <!--cheng fixs page-->
                      @include('frontend.homepage.partials.prices')
                  </section>
      @widget('price_list',[
      'rub'=>' руб.',
      'title' => 'на ремонт комнат',
      'priceListCategories' => $priceListCategories,
      'region'=>$selectRegion
      ])
	  --}}
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
  @if($mainCategory->slug === \App\Models\CategoryMainRepair::COMMERCIAL_ROOM_REPAIR)
    @include('frontend.blocks.we_are_trusted')
  @else

  @endif
  @widget('banner', ['banner' => $mainCategory->banner, 'class' => 'object_page_4'])

  @if($mainCategory->slug === \App\Models\CategoryMainRepair::COMMERCIAL_ROOM_REPAIR)
    @widget('whyWe', ['whyWe' => $mainCategory->why_we, 'class' => $mainCategory->slug === \App\Models\CategoryMainRepair::COMMERCIAL_ROOM_REPAIR ? 'commercial_why_we' : 'why_we_repairs_rooms','is_old' => true])
  @else
    @widget('whyWe', ['whyWe' => $mainCategory->why_we, 'class' => $mainCategory->slug === \App\Models\CategoryMainRepair::COMMERCIAL_ROOM_REPAIR ? 'commercial_why_we' : 'why_we_repairs_rooms'])
  @endif

  @if($mainCategory->slug !== \App\Models\CategoryMainRepair::COMMERCIAL_ROOM_REPAIR)
    @widget('reviews', ['title' => 'ОТЗЫВЫ КЛИЕНТОВ О «ПРОРАБ НЕВА»'])

    @if($selectRegion->is_default)
      {{-- 3D тур --}}
      {{--@widget('tour3d', ['tours' => $mainCategory->tour3d])--}}
      @widget('tour3d')
    @endif

  @endif

  @if($selectRegion->is_default && $mainCategory->slug != \App\Models\CategoryMainRepair::PRIVATE_HOUSE_REPAIR)
    @include('frontend.repairs.partials.category_list')
  @endif

  @if($mainCategory->slug === \App\Models\CategoryMainRepair::COMMERCIAL_ROOM_REPAIR)
    @include('frontend.repairs.partials.commercial_repair_list')
  @endif

  @widget('faq', ['faq' => $mainCategory->faq])

  @if($mainCategory->slug !== \App\Models\CategoryMainRepair::COMMERCIAL_ROOM_REPAIR)
    @widget('design_repair', ['designRepair' => $mainCategory->design_repairs])
  @endif

  @if($mainCategory->slug !== \App\Models\CategoryMainRepair::COMMERCIAL_ROOM_REPAIR)
    <div class="bg_white">
      @widget('our_team',['region'=>$selectRegion])
    </div>
  @endif

  @if($selectRegion->is_default)
    {{-- Полезное о ремонте --}}
    @widget('blog_block',['region'=>$selectRegion])
  @endif

  @include('frontend.repairs.partials.description',['has_padd_40' => true])
  <div id='popup_portfolio_slider'>
    <div class='popup_block'>
      <div class='close'></div>
    </div>
  </div>
@endsection


@section('styles')
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
@endsection

@section('scripts')
  <script
      src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.scroll-categories').mCustomScrollbar({axis: 'y'});
    });

    $('.owl-item.cloned .hide_block').remove();
  </script>
@endsection
