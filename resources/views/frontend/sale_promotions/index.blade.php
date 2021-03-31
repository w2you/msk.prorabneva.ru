@extends('frontend.layouts.master')

@section('content')
  <section class='promotions_new'>
    <div class='wrapper_new'>
      <h1>{{ $page->title }}</h1>
      <div class='under_title_section'>{!! $page->top_description !!}</div>
      <div class='promotions_block'>


        {{--<div class="all_block">--}}
        {{--<div class="block block_1">--}}
        {{--<div class="promotions_text">--}}
        {{--<div class="text">--}}
        {{--<div class="name_block">Скидка -14% на ремонт квартир</div>--}}
        {{--<p>--}}
        {{--До 31 октября скидка -14% от Прайса на все ремонтные и отделочные работы. Успейте оформить заказ на--}}
        {{--ремонт по низким ценам!--}}
        {{--</p>--}}
        {{--<div class="learn_more learn_more_1">--}}
        {{--<a href="#" class="call_open_popup_button">Узнать подробнее</a>--}}

        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="promotions_img">--}}
        {{--<a href="#" class="call_open_popup_button">--}}
        {{--<div class="img">--}}
        {{--<img src="https://www.prorabneva.ru/storage/slides/happy/ng1.png" alt="Акции - Прораб Нева">--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="for_whom">--}}
        {{--<p>Для кого։</p>--}}
        {{--<strong>Частичный и комплексный ремонт квартир. При смете свыше 700 000 руб. скидка 20% от Прайса!</strong>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class='all_block'>--}}
        {{--<div class="block block_144" style="background-color: #dcecf9!important;">--}}
        {{--<div class="promotions_text">--}}
        {{--<div class="text">--}}
        {{--<div class="name_block">Дизайн-проект в подарок!</div>--}}
        {{--<p>--}}
        {{--При заказе индивидуального комплексного ремонта квартиры дарим эксклюзивный технический дизайн-проект!--}}
        {{--</p>--}}
        {{--<div class="learn_more learn_more_2">--}}
        {{--<a href="{{ route('saleShow') }}" class="more">Узнать подробнее</a>--}}

        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="promotions_img">--}}
        {{--<a href="{{ route('saleShow') }}">--}}
        {{--<div class="img">--}}
        {{--<img src="https://www.prorabneva.ru/storage/sale-promotions/February2019/MbdKEXnq77fEDH02s0lU.png"--}}
        {{--alt="Акции - Прораб Нева">--}}
        {{--</div>--}}
        {{--</a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="for_whom">--}}
        {{--<p>Для кого։</p>--}}
        {{--<strong>Новостройки, Вторичка, Старый фонд</strong>--}}
        {{--</div>--}}
        {{--</div>--}}
        @if(count($sales) > 0)
          @foreach($sales as $key => $sale)
            @include('frontend.sale_promotions.partials.item', ['sale' => $sale, 'key' => $key + 1])
          @endforeach
        @endif
      </div>
      <div class='last_discount_info'>
        <span>Акции и скидки не суммируются друг с другом.</span>
        <p>
          Узнайте, какая акция будет для вас наиболее выгодной, по телефону:
        </p>
        <div class="ya-phone tel_number" style="display: inline-block">
          <a class='tel roistat-phone call_link' href="tel:{{$selectRegion->phone}}"
             onclick="yaCounter44756221.reachGoal('tel'); return true;">{{$selectRegion->phone}}</a>
        </div>
      </div>
    </div>
  </section>
@endsection
