@extends('frontend.layouts.master')
@section('content')

    <section class='all_stock'>
        <div class='wrapper_new'>
            <h1>Новый год – новый ремонт</h1>
            <div class='text_under_title under_max_w'>
                <p>
                    Новый год – самая волшебная пора, ожидание чуда и неожиданных подарков . . .
                    <br>
                    И мы хотим сделать вам самый грандиозный подарок – скидку 19% на ремонт в новом году. Такого еще не было
                    и уже больше не будет! Поэтому торопитесь – успейте заказать замер и расчет сметы и оформить договор на
                    ремонт до 15 января (включительно). Выжмите максимум из этого года!
                </p>
            </div>
            <div class='all_three_block'>
                <div class='title_block'>Как получить МЕГА-скидку 19% на ремонт</div>
                <div class='flex_block'>
                    <div class='block'>
                        <div class='icon'>
                            <img src='{{asset('frontend/images/icon_prom_1.png')}}'>
                        </div>
                        <div class='name_block'>Замер</div>
                        <p>Закажите замер помещения (квартиры, дома) техническим специалистом нашей компании</p>
                    </div>
                    <div class='block'>
                        <div class='icon'>
                            <img src='{{asset('frontend/images/icon_prom_2.png')}}'>
                        </div>
                        <div class='name_block'>Смета</div>
                        <p>Дождитесь письма с расчетом сметы и подробным описанием работ по вашему ремонту</p>
                    </div>
                    <div class='block'>
                        <div class='icon'>
                            <img src='{{asset('frontend/images/icon_prom_3.png')}}'>
                        </div>
                        <div class='name_block'>Договор</div>
                        <p>Оформите договор на ремонтные услуги в одном из наших офисов до 15 января 2019 года</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class='estimates_stock estimates_stock_new_year'>
        <div class='wrapper_new'>
            <div class='title_block'>Скидка 19% по вашему договору будет действовать до марта 2019 года!</div>
            <div class='text_tel_number'>
                Подробности по телефону:
                <a class="tel roistat-phone" href="tel:{{$selectRegion->phone}}" onclick="yaCounter44756221.reachGoal('tel'); return true;">{{$selectRegion->phone}}</a>
            </div>
        </div>
    </section>
    <section class='conditions_promotion conditions_promotion_hause'>
        <div class='wrapper_new clearfix'>
            <div class='questions_title_block'>
                <p>Условия акции:</p>
            </div>
            <div class='questions_block'>
                <ol>
                    <li>
                        1. В акции могут участвовать все заказы на ремонт при сумме сметы от 100 000 руб.
                    </li>
                    <li>
                        2. Акция действует для договоров, заключенных с 15 декабря 2018 г. по 15 января 2019 года.
                    </li>
                    <li>3. Срок действия скидки 19% по договору (необходимый срок начала ремонтных работ) – до марта 2019
                        года.
                    </li>
                </ol>
            </div>
        </div>
    </section>
    <section class='object object_stock'>
        <div class='wrapper_new'>
            <div class='object_title'>
                Так просто…
            </div>
            <p>
                Оставьте заявку, и мы сделаем расчет сметы вашего ремонта.
                Выполним замер, рассчитаем все виды работ, объемы и стоимость, проконсультируем по технологиям и этапам ремонтных работ — всё это за {{ env('PARRAM_TRIAL') }} руб.
            </p>
            <a href='#' class="call_open_popup_button">Заказать расчет сметы</a>
        </div>
    </section>
    @widget('tour3d')
    {{--<section class='tur_3d tur_3d_home_page tur_3d_stock'>--}}
        {{--<div class='wrapper_new'>--}}
            {{--<div class='title_section'>3D туры</div>--}}
            {{--<div class='under_title_section'>Посмотрите максимально реалистичные интерактивные туры по нашим объектам после--}}
                {{--ремонта--}}
            {{--</div>--}}
            {{--<div class='tur_slider'>--}}
                {{--<div class='block'>--}}
                    {{--<div class='owl_slid'></div>--}}
                    {{--<iframe allow='vr' allowfullscreen='' frameborder='0' height='480'--}}
                            {{--src='https://my.matterport.com/show/?m=juV4G9jXPQi' width='853'></iframe>--}}
                {{--</div>--}}
                {{--<div class='block'>--}}
                    {{--<div class='owl_slid'></div>--}}
                    {{--<iframe allow='vr' allowfullscreen='' frameborder='0' height='480'--}}
                            {{--src='https://my.matterport.com/show/?m=9GAYFAn4fJ8' width='853'></iframe>--}}
                {{--</div>--}}
                {{--<div class='block'>--}}
                    {{--<div class='owl_slid'></div>--}}
                    {{--<iframe allow='vr' allowfullscreen='' frameborder='0' height='480'--}}
                            {{--src='https://my.matterport.com/show/?m=14NqnuQnZPK' width='853'></iframe>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    @include('frontend.blocks.whyWe')

    <!--Comment questions-->

    {{-- @include('frontend.sale_promotions.partials.conditions')--}}
    <!--Comment questions-->

    @if($sale->slug !="chistyj-dom" && $sale->slug !="teplyj-priem")
        @include('frontend.sale_promotions.partials.banner')

    @endif
 {{--   @widget('banner', ['banner' => @json_decode($sale->banner), 'isHome' => false])
    @widget('tour3d', ['tours' => $sale->tour3d])
    @widget('whyWe', ['whyWe' => @json_decode($sale->why_we)])--}}
@endsection
