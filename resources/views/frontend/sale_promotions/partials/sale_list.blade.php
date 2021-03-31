@if( $sale->slug =="chistyj-dom")
    <section class='all_stock'>
        <div class='wrapper_new'>
            <h1>{{ $sale->title }}</h1>
            <div class='text_under_title'>
                <p>
                    {!! $sale->description !!}
                </p>
            </div>
            <div class='blocks_two_new'>
                <div class='block'>
                    <div class='img_icon'>
                        <img src='{{asset('frontend/images/house_icon_1.png')}}'>
                    </div>
                    <div class='text_block'>
                        <div class='title_block'>Вывоз мусора в подарок</div>
                        <ul>
                            <li>сбор, сортировка и упаковка строительного мусора в полиэтиленовые или бумажные пакеты
                            </li>
                            <li>вынос и погрузка мусора грузчиками</li>
                            <li>вывоз и утилизация строительного мусора</li>
                        </ul>
                    </div>
                </div>
                <div class='block'>
                    <div class='img_icon'>
                        <img src='{{asset('frontend/images/house_icon_2.png')}}'>
                    </div>
                    <div class='text_block'>
                        <div class='title_block'>Клининг в подарок</div>
                        <ul>
                            <li>обеспыливание всех поверхностей</li>
                            <li>мытье полов, дверей и мебели</li>
                            <li>мытье кафеля, ванной и сантехники</li>
                            <li>мытье окон, устранение строительных загрязнений</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@elseif( $sale->slug =="teplyj-priem")
    <section class='all_stock'>
        <div class='wrapper_new'>
            <h1>Теплый прием</h1>
            <div class='text_under_title'>
                <p>Купили квартиру в Санкт-Петербурге или ближайшем пригороде? Готовитесь к ремонту и переезду? Мы
                    решили вам помочь! Для всех иногородних покупателей квартир действует специальное предложение –
                    дополнительная скидка на комплексный ремонт. Закажите расчет сметы и успейте сделать качественный
                    ремонт вашей новой квартиры по выгодной цене!</p>
            </div>
            <div class='img_block_new'>
                <img src='{{asset('frontend/images/image_warm.png')}}'>
            </div>
        </div>
    </section>
@else
    <section class='all_stock'>
        <div class='wrapper_new'>
            <h1>{{ $sale->title }}</h1>
            <div class='text_under_title'>
                {!! $sale->description !!}
            </div>
            <div class='all_blocks'>
                <div class='block_two clearfix'>
                    @php
                        $sales = @json_decode($sale->sales);
                        $i = 1
                    @endphp
                    @if($sales && count($sales) > 0)
                        @foreach($sales as $item)
                            @php
                                $class = ($i%2 === 0) ? 'right' : 'left'
                            @endphp
                            @if($i < 5)
                                <div class='blocks'>
                                    <div class='block block_{{ $class }}'>
                                        <div class='img'>
                                            <img src='{{ asset('storage/' . $item->image) }}'>
                                        </div>
                                        <div class='name_block'>{!! $item->title !!}</div>
                                        <p>{!! $item->description !!}</p>
                                    </div>
                                    <div class='price_block price_block_{{ $i }}'>
                                        <div class='price'>
                                            {{ $item->price }}
                                            <span>т.р.</span>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class='blocks_all_width'>
                                    <div class='block'>
                                        <div class='img'>
                                            <img src='{{ asset('storage/' . $item->image) }}'>
                                        </div>
                                        <div class='name_block'>{!! $item->title !!}</div>
                                        <p>{!! $item->description !!}</p>
                                    </div>
                                    <div class='price_block price_block_{{ $i }}'>
                                        <div class='price'>
                                            {{ $item->price }}
                                            <span>т.р.</span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @php
                                $i ++
                            @endphp
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endif