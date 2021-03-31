@php
    $conditions = json_decode($sale->conditions);
    $i = 1
@endphp
@if($conditions && count($conditions) > 0)
    @if( $sale->slug =="chistyj-dom")
        <section class='estimates_hause estimates_stock'>
            <div class='wrapper_new'>
                <div class='title_block'>Выбирайте, что вам более интересно, или получите все.</div>
                <div class='text_tel_number'>
                    Подробности по телефону:
{{--
                    <a href='tel:+78123896508'>+7 (812) 389-65-08</a>
--}}
                    <div class="ya-phone tel_number" style="display: inline-block">
                        <a class='tel roistat-phone call_link' href="tel:{{$selectRegion->phone}}" onclick="yaCounter44756221.reachGoal('tel'); return true;">
                            {{$selectRegion->phone}}
                        </a>
                    </div>
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
                            1. В акции могут участвовать все заказы по комплексному ремонту квартир.
                        </li>
                        <li>
                            2. Заказчик имеет возможность выбора подарка:
                            <ul>
                                <li>Вывоз строительного мусора (2 машины с грузчиками)</li>
                                <li>Клининг (профессиональная уборка)</li>
                            </ul>
                            <p>Условиями акции предусмотрена возможность получения сразу двух подарков одним заказчиком. Подробности уточняйте у менеджеров.</p>
                        </li>
                        <li>3. Акция действует для всех договоров, заключенных с 1 по 15 декабря 2018.</li>
                    </ol>
                </div>
            </div>
        </section>
    @elseif($sale->slug =="teplyj-priem")
        <section class='estimates_hause estimates_stock'>
            <div class='wrapper_new'>
                <div class='warm_text_tel_number'>
                    Звоните прямо сейчас и узнайте больше:
                    <br>
                    {{--<a href='tel:+78123896508'>+7 (812) 389-65-08</a>--}}
                    <div class="ya-phone tel_number" style="display: inline-block">
                        <a class='tel roistat-phone call_link' href="tel:{{$selectRegion->phone}}" onclick="yaCounter44756221.reachGoal('tel'); return true;">
                            {{$selectRegion->phone}}</a>
                    </div>
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
                            1. В акции участвуют заказы по комплексному ремонту квартир.
                        </li>
                        <li>
                            2. Скидка действует для жителей всех регионов России, дальнего и ближнего зарубежья при условии наличия постоянной регистрации за пределами Санкт-Петербурга и Ленинградской области.
                            <p>Размер скидки уточняйте у менеджеров Отдела продаж.</p>
                        </li>
                        <li>3.  Акция действует для договоров, заключенных с 1 по 15 декабря 2018.</li>
                    </ol>
                </div>
            </div>
        </section>
    @else
        <section class='conditions_promotion'>
            <div class='wrapper_new clearfix'>
                <div class='questions_title_block'>
                    <p>Условия акции:</p>
                </div>
                <div class='questions_block'>
                    <ol>
                        @foreach($conditions as $condition)
                            <li>
                                {{ $i }}. {!! $condition !!}
                            </li>
                            @php
                                $i ++
                            @endphp
                        @endforeach
                    </ol>
                </div>
            </div>
        </section>
    @endif
@endif