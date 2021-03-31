@extends('frontend.layouts.master')

@section('content')
    <!-- /  home page 2020 -->
    <section class="top_banner">
        <div class="wrapper_new-n">
            <div class="flex_block_n">
                <div class="banner_left">
                    <h1 class="banner_left_title">
                        Механизированная
                        <span class="text_blue">штукатурка</span>
                    </h1>
                    <p>Выполняем штукатурку стен и потолка машинным способом, а также заливку пола финишным ровнителем.
                        Профессиональное оборудование, выгодные цены и качественное исполнение.</p>
                    <a class="btn_style_n btn_style_n-orange scroll__prices" href="#">Смотреть цены</a>
                </div>
                <div class="banner_right">
                    <img src="/frontend/images_4/mechanized__img.png">
                </div>
            </div>
        </div>
        <div class="decoration_arrows">
            <div class="wrapper_new-n">
                <ul>
                    <li></li>
                    <li class="color_blue"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li class="color_orange"></li>
                    <li></li>
                    <li></li>
                    <li class="color_blue"></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="information_section information_section-margin-sm">
        <div class="wrapper_new-n">
            <div class="section_top_two">
                <div class="flex_block_n">
                    <div>
                        <h2 class="title_section_g">
                            Каковы особенности
                            <br>
                            механизированной
                            <br>
                            штукатурки?
                        </h2>
                    </div>
                    <div>
                        <div class="under_title_section-n">Машинная штукатурка – новый, но уже достаточно популярный
                            метод обработки поверхностей во время ремонта. Представляет собой скоростной способ
                            нанесения выравнивающего раствора на пол, стены и потолок, существенно сокращающий временные
                            и денежные затраты. В то же время строителям удается добиться более высокого качества
                            исполнения работ.
                        </div>
                    </div>
                </div>
            </div>
            <div class="information__section--overflow information__section--overflow--block_num">
                <div class="flex_block_n flex_block_n-wrap">
                    <div class="information__section--block information__section--block-big">
                        <div class="information__section--block-number">01</div>
                        <div class="information__section--block-name">
                            До 20% экономия времени
                            <br>
                            на приготовления смеси
                        </div>
                        <p>Раствор замешивается в автоматическом режиме при помощи специального оборудования</p>
                    </div>
                    <div class="information__section--block information__section--block-big">
                        <div class="information__section--block-number">02</div>
                        <div class="information__section--block-name">
                            Лучшее качество
                            <br>
                            раствора
                        </div>
                        <p>При таком способе наведения смеси исключается образование комков, песчаная и цементная крошка
                            на 100% растворяются в воде, образуя однородную массу</p>
                    </div>
                    <div class="information__section--block information__section--block-big">
                        <div class="information__section--block-number">03</div>
                        <div class="information__section--block-name">
                            Быстрое нанесение
                            <br>
                            штукатурки
                        </div>
                        <p>Во время замеса происходит насыщение раствора воздухом, благодаря чему он приобретает бóльшую
                            пластичность</p>
                    </div>
                    <div class="information__section--block information__section--block-big">
                        <div class="information__section--block-number">04</div>
                        <div class="information__section--block-name">
                            Отличное сцепление
                            <br>
                            с поверхностью
                        </div>
                        <p>
                            Готовая масса наносится под давлением,
                            <br>
                            это обеспечивает высокую адгезию
                        </p>
                    </div>
                    <div class="information__section--block information__section--block-big">
                        <div class="information__section--block-number">05</div>
                        <div class="information__section--block-name">
                            Идеально ровное
                            <br>
                            покрытие
                        </div>
                        <p>
                            Штукатурка машинного нанесения распределяется равномерно, что облегчает ее распределение по
                            поверхности и позволяет создать идеально ровный слой
                            <br>
                            без бугров
                        </p>
                    </div>
                    <div class="information__section--block information__section--block-big">
                        <div class="information__section--block-number">06</div>
                        <div class="information__section--block-name">
                            Равномерное высыхание
                            <br>
                            и высокая прочность
                        </div>
                        <p>Нанесенная штукатурка не дает усадки, а значит исключено появление трещин после высыхания</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="price_list-section bg__light-blue">
        <div class="wrapper_new-n">
            <h2 class="title_section_g">
                Сколько стоит услуга
                <br>
                машинной штукатурки?
            </h2>
            <div class="price_list--blocks">
                <div class="flex_block_n">
                    <div class="price_list--block">
                        <div class="price_list--block-name">
                            Штукатурка стен
                            гипсовая Knauf
                        </div>
                        <div class="price_list--block-price">от 210 ₽/м2</div>
                    </div>
                    <div class="price_list--block">
                        <div class="price_list--block-name">
                            Штукатурка стен
                            цементная Knauf
                            Unterputz
                        </div>
                        <div class="price_list--block-price">от 290 ₽/м2</div>
                    </div>
                    <div class="price_list--block">
                        <div class="price_list--block-name">
                            Штукатурка
                            <br>
                            потолка гипсовая
                        </div>
                        <div class="price_list--block-price">от 310 ₽/м2</div>
                    </div>
                    <div class="price_list--block">
                        <div class="price_list--block-name">
                            Штукатурка оконных
                            <br>
                            и дверных откосов
                        </div>
                        <div class="price_list--block-price">от 270 ₽/мп</div>
                    </div>
                </div>
                <div class="show_all--price">
                    <a class="btn_style_n btn_style_n-orange" href="https://www.prorabneva.ru/price#category_price_list_mech">Перейти в Прайс</a>
                </div>
            </div>
        </div>
    </section>
    <section class="rooms_suitable">
        <div class="wrapper_new-n">
            <h2 class="title_section_g">
                Для каких стен и помещений
                <br>
                подходит машинный метод
                <br>
                штукатурки?
            </h2>
            <div class="under_title_section-n">
                Готовый слой сразу подходит под финишную отделку
                <br>
                и не требует дополнительного шпаклевания.
            </div>
            <div class="rooms_suitable--blocks">
                <div class="flex_block_n">
                    <div class="rooms_suitable--block">
                        <div class="rooms_suitable--block-img">
                            <img src="/frontend/images_4/Rectangle_76.png">
                        </div>
                        <p>Исключение – механизированная штукатурка перед покраской. Чтобы краска легла ровно, а на
                            стенах не было мелких соринок, ее дополнительно шпаклюют.</p>
                    </div>
                    <div class="rooms_suitable--block">
                        <div class="rooms_suitable--block-img">
                            <img src="/frontend/images_4/Rectangle_77.png">
                        </div>
                        <p>
                            Для влажных помещений
                            <br>
                            рекомендуем использовать
                            <br>
                            песчано-цементные растворы.
                        </p>
                    </div>
                    <div class="rooms_suitable--block">
                        <div class="rooms_suitable--block-img">
                            <img src="/frontend/images_4/Rectangle_78.png">
                        </div>
                        <p>В хорошо проветриваемых комнатах подходят смеси на основе гипса или цементно-известковые.
                            Улучшить адгезию и получить идеально ровную поверхность помогают минеральные добавки.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our__team__info bg__light-blue our__team__info-equal">
        <div class="wrapper_new-n">
            <div class="our__team__info--title">
<span>
Наша компания
<br>
выполняет машинную штукатурку под обои, для покраски,
</span>
                а также заливку пола финишным ровнителем и механизированное выравнивание потолков. Стоимость работ
                зависит от площади помещения.
            </div>
            <div class="flex_block_n flex_block-big">
                <div class="left__text">
                    <p>
                        Позвоните нам, чтобы рассчитать цену за м2. Скорость нанесения штукатурки механизированным
                        способом и дальнейшей обработки «под ключ» в среднем составляет около 8-10 м2/ч. В стоимость
                        входит грунтовка,
                        <br>
                        установка/выемка маяков, собственно оштукатуривание, глянцевание поверхности (заглаживание).
                    </p>
                    <a class="btn_style_n btn_style_n-orange call_open_popup_button--new" href="#">Вызвать замерщика</a>
                </div>
                <div class="right__img">
                    <div class="flex_block_n">
                        <div class="images_block--sm">
                            <img src="/frontend/images_4/Rectangle_82.png">
                        </div>
                        <div class="images_block">
                            <div class="images_block--big">
                                <img src="/frontend/images_4/Rectangle_8.png">
                            </div>
                            <div class="images_block--sm">
                                <img src="/frontend/images_4/Rectangle_83.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="information_section">
        <div class="wrapper_new-n">
            <div class="title_section--g-big">
                Почему с нами
                <br>
                выгодно
            </div>
            <div class="information__section--overflow">
                <div class="flex_block_n">
                    <div class="information__section--block information__section--block-sm mob_bg_gray">
                        <div class="information__section--block-icon big-icon icon-blue">
                            <img src="/frontend/images_4/icon_i_1.png">
                        </div>
                        <div class="information__section--block-name">
                            Без предоплаты
                        </div>
                        <p>
                            Не берём авансов, оплата — по подписанным Актам выполненных
                            <br>
                            и принятых работ
                        </p>
                    </div>
                    <div class="information__section--block information__section--block-sm mob_bg_gray">
                        <div class="information__section--block-icon big-icon icon-orange">
                            <img src="/frontend/images_4/icon_i_2.png">
                        </div>
                        <div class="information__section--block-name">
                            Прозрачная смета
                        </div>
                        <p>
                            Ничего не скрываем
                            <br>
                            и не накручиваем, помогаем анализировать сметы
                        </p>
                    </div>
                    <div class="information__section--block information__section--block-sm mob_bg_gray">
                        <div class="information__section--block-icon big-icon icon-black">
                            <img src="/frontend/images_4/icon_i_3.png">
                        </div>
                        <div class="information__section--block-name">
                            Твёрдые цены
                        </div>
                        <p>
                            Цены фиксируются при
                            <br>
                            заключении договора, никаких "сюрпризов" во время ремонта
                        </p>
                    </div>
                    <div class="information__section--block information__section--block-sm mob_bg_gray">
                        <div class="information__section--block-icon big-icon">
                            <img src="/frontend/images_4/icon_i_4.png">
                        </div>
                        <div class="information__section--block-name">
                            Рассрочка
                        </div>
                        <p>
                            Возможно оформление беспроцентной рассрочки сроком
                            <br>
                            до 1 года на сумму до 250 000 ₽.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="colored_info_section bottom-minus colored_info_section-mech">
        <div class="wrapper_new-n_big">
            <div class="colored_info_section--block colored_info_section--block-bg-blue">
                <div class="wrapper_new-n">
                    <div class="flex_block_n">
                        <div>
                            <div class="title_section--g-big title_section--g-big-white">
                                Расчитаем смету
                                <br>
                                вашего
                                ремонта
                                <br>
                                со скидкой
                                <span>до 20%</span>
                            </div>
                        </div>
                        <div>
                            <p>
                                Принимаем заявки на штукатурные работы в Санкт-Петербурге и Ленинградской области.
                                Заказать услугу можно онлайн на сайте или по телефону <a class='tel roistat-phone' href="tel:{{$selectRegion->phone}}" onclick="yaCounter44756221.reachGoal('tel'); return true;">
                                    {{$selectRegion->phone}}
                                </a>. Звоните сейчас
                                и получите скидку до 20% на все работы!
                            </p>
                            <a class="btn_style_n btn_style_n-orange call_open_popup_button--new" href="#">Оставить заявку</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="specialists_company">
        <div class="wrapper_new-n">
            <div class="title_section_g">
                Специалисты компании «Прораб НЕВА» ответят
                <br>
                на любые вопросы
                <span>
по нюансам механизированной штукатурки под покраску и другие виды отделки.
</span>
            </div>
            <div class="under_title_section-n">
                Один из таких вопросов: насколько машинная штукатурка
                <br>
                выгоднее ручного выравнивания, и в чем заключается
                <br>
                экономия?
            </div>
            <div class="flex_block_n">
                <div class="specialists_company--block">
                    <div class="specialists_company--block-icon"></div>
                    <div class="specialists_company--block-name">Экономия материала</div>
                    <p>При выполнении машинной штукатурки сокращается расход раствора. Распределяющий агрегат наносит
                        состав равномерным слоем средней толщины. В результате удается сэкономить до 20% материала при
                        более высоком качестве работ.</p>
                    <p>
                        После нанесения штукатурки машинным методом не требуется шпаклевание стен под поклейку обоев.
                        Можно сразу переходить
                        <br>
                        к финишной отделке, а это дополнительная экономия.
                    </p>
                </div>
                <div class="specialists_company--block">
                    <div class="specialists_company--block-icon"></div>
                    <div class="specialists_company--block-name">Экономия сил и времени</div>
                    <p>
                        При механизированном способе нанесения скорость подачи
                        <br>
                        и распределения раствора возрастает в
                        4 раза! Двух человек достаточно, чтобы обработать стены в квартире
                        <br class="mob__br">
                        за 1-2 дня.
                    </p>
                    <p>Стоимость оплаты труда бригады при штукатурке машинным способом уменьшается до 30%.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="our__team__info">
        <div class="wrapper_new-n">
            <div class="our__team__info--title">
                <span>
                Ремонт выполняют
                <br>
                специализированные
                <br>
                бригады
                </span>
            </div>
            <div class="flex_block_n">
                <div class="left__text">
                    <p>
                        Комплексный ремонт и отделку квартир выполняют профессиональные бригады под руководством опытных
                        прорабов.
                        <br class="mob__br">
                        На разных участках работают мастера узкой специализации, имеющие необходимые допуски и
                        соответствующий стаж.
                    </p>
                    <a class="btn_style_n btn_style_n-orange mt16 call_open_popup_button--new" href="#">Вызвать замерщика</a>
                </div>
                <div class="right__img">
                    <div class="flex_block_n">
                        <div class="images_block--sm">
                            <img src="/frontend/images_4/Rectangle_6.png">
                        </div>
                        <div class="images_block">
                            <div class="images_block--big">
                                <img src="/frontend/images_4/Rectangle_81.png">
                            </div>
                            <div class="images_block--sm">
                                <img src="/frontend/images_4/Rectangle_80.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--<section class='our__team__info'>--}}
    {{--<div class='wrapper_new-n'>--}}
    {{--<div class='flex_block_n'>--}}
    {{--<div class='specialized_teams_left'>--}}
    {{--<div class='title_section_g'>--}}
    {{--Ремонт выполняют специализированные--}}
    {{--<br>--}}
    {{--бригады--}}
    {{--</div>--}}
    {{--<p>Комплексный ремонт и отделку квартир выполняют профессиональные бригады под руководством опытных--}}
    {{--прорабов. На разных участках работают мастера узкой специализации, имеющие необходимые допуски и--}}
    {{--соответствующий стаж.</p>--}}
    {{--<a class='btn_style_n btn_style_n-blue-hover btn_style_n-big call_open_popup_button--new' href='#'>Вызвать замерщика</a>--}}
    {{--</div>--}}
    {{--<div class='specialized_teams_right'>--}}
    {{--<div class='specialized_teams--images_block'>--}}
    {{--<div class='images_block--big'>--}}
    {{--<img src='/frontend/images_4/Rectangle8.png'>--}}
    {{--</div>--}}
    {{--<div class='flex_block_n'>--}}
    {{--<div class='images_block--sm'>--}}
    {{--<img src='/frontend/images_4/Rectangle6.png'>--}}
    {{--</div>--}}
    {{--<div class='images_block--av'>--}}
    {{--<img src='/frontend/images_4/Rectangle7.png'>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    @widget('reviews',['color_white' => true, 'title' => false])
    @widget('blog_block',['color_white' => true,'title_custom' => true,'region'=>$selectRegion])
    <div id="popup_services_table">
        <div class="popup_block">
            <div class="close"></div>
            <div class="popup__title">Подберите пакет услуг</div>
            <div class="popup__tables">
                <div class="popup__table--head">
                    <div class="table__tr">
                        <div class="table__td"></div>
                        <div class="table__td">
                            <div class="table__tariff text_grey">Стандарт</div>
                        </div>
                        <div class="table__td">
                            <div class="table__tariff text_blue">Комфорт</div>
                        </div>
                        <div class="table__td">
                            <div class="table__tariff text_orange">Экслюзив</div>
                        </div>
                    </div>
                    <div class="table__tr">
                        <div class="table__td"></div>
                        <div class="table__td">
                            <div class="table__list--price">
                                800 p/м
                                <sup>2</sup>
                            </div>
                        </div>
                        <div class="table__td">
                            <div class="table__list--price">
                                1 400 p/м
                                <sup>2</sup>
                            </div>
                        </div>
                        <div class="table__td">
                            <div class="table__list--price">
                                1 800 p/м
                                <sup>2</sup>
                            </div>
                        </div>
                    </div>
                    <div class="table__tr">
                        <div class="table__td">Сроки выполнения работ</div>
                        <div class="table__td">от 30 дней</div>
                        <div class="table__td">от 45 дней</div>
                        <div class="table__td">от 60 дней</div>
                    </div>
                </div>
                <div class="popup__table--body scroll_content_int mCustomScrollbar _mCS_5 mCS_no_scrollbar">
                    <div id="mCSB_5" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0"
                         style="max-height: 0px;">
                        <div id="mCSB_5_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                             style="position:relative; top:0; left:0;" dir="ltr">
                            <div class="table__tr">
                                <div class="table__td">Обмерный план существующих стен и перегородок</div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                            </div>
                            <div class="table__tr">
                                <div class="table__td">План возводимых конструкций, стен и перегородок</div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                            </div>
                            <div class="table__tr">
                                <div class="table__td">План демонтажа перегородок и инженерных коммуникаций</div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                            </div>
                            <div class="table__tr">
                                <div class="table__td">План помещения после перепланировки с размерами и экспликация
                                    помещений
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                            </div>
                            <div class="table__tr">
                                <div class="table__td">План мебели и оборудования (с экспликацией помещений и
                                    расположением мебели и оборудования в масштабе)
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                            </div>
                            <div class="table__tr">
                                <div class="table__td">Концептуальная подборка (цветовое художественное представление)
                                </div>
                                <div class="table__td">
                                    <div class="active__td"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                            </div>
                            <div class="table__tr">
                                <div class="table__td">План расположения напольных покрытий</div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                            </div>
                            <div class="table__tr">
                                <div class="table__td">План расположения теплых полов</div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                            </div>
                            <div class="table__tr">
                                <div class="table__td">План потолков с указанием типа используемого материала</div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                            </div>
                            <div class="table__tr">
                                <div class="table__td">План размещения осветительных приборов и групп их включения (с
                                    указанием типов оборудования)
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                            </div>
                            <div class="table__tr">
                                <div class="table__td">План розеток и выключателей теплого пола</div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                            </div>
                            <div class="table__tr">
                                <div class="table__td">План-схема отделочных материалов</div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                            </div>
                            <div class="table__tr">
                                <div class="table__td">План расположения проемов и дверей</div>
                                <div class="table__td">
                                    <div class="active__td"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                            </div>
                            <div class="table__tr">
                                <div class="table__td">План расположения разверток и экспликация помещений</div>
                                <div class="table__td">
                                    <div class="active__td"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                            </div>
                            <div class="table__tr">
                                <div class="table__td">Развертки санузлов с раскладкой плитки, с указанием размеров,
                                    площадей, декоративных элементов и материалов
                                </div>
                                <div class="table__td">
                                    <div class="active__td"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                            </div>
                            <div class="table__tr">
                                <div class="table__td">Развертка стен основных помещений (санузлы и кухня)</div>
                                <div class="table__td">
                                    <div class="active__td"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                            </div>
                            <div class="table__tr">
                                <div class="table__td">Ведомость мебели и оборудования</div>
                                <div class="table__td">
                                    <div class="active__td"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                            </div>
                            <div class="table__tr">
                                <div class="table__td">Ведомость отделочных материалов</div>
                                <div class="table__td">
                                    <div class="active__td"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                            </div>
                            <div class="table__tr">
                                <div class="table__td">3D визуализация всех помещений</div>
                                <div class="table__td">
                                    <div class="active__td"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td"></div>
                                </div>
                                <div class="table__td">
                                    <div class="active__td--check"></div>
                                </div>
                            </div>
                        </div>
                        <div id="mCSB_5_scrollbar_vertical"
                             class="mCSB_scrollTools mCSB_5_scrollbar mCS-light mCSB_scrollTools_vertical"
                             style="display: none;">
                            <div class="mCSB_draggerContainer">
                                <div id="mCSB_5_dragger_vertical" class="mCSB_dragger"
                                     style="position: absolute; min-height: 30px; top: 0px;">
                                    <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                </div>
                                <div class="mCSB_draggerRail"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup__table--foot">
                    <div class="table__tr">
                        <div class="table__td">Консультация, звоните +7 812 646-88-87</div>
                        <div class="table__td">
                            <a class="btn_table bg__grey call_open_popup_button" href="#">Заказать</a>
                        </div>
                        <div class="table__td">
                            <a class="btn_table bg__blue call_open_popup_button" href="#">Заказать</a>
                        </div>
                        <div class="table__td">
                            <a class="btn_table bg__orange call_open_popup_button" href="#">Заказать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id='popup_call--new'>
        <div class='popup_block'>
            <div class='close'>
                <img src='/frontend/images_4/close_black.png'>
            </div>
            <div class='popup_block_scroll'>
                <div class='title_section_g'>
                    <div class='text_blue'>Оставьте заявку,</div>
                    мы вам перезвоним
                </div>
                <form  data-action="{{ route('callOrderPopup') }}">
                    <input class='input_type' placeholder='Ваше имя' required='' type='text' name="name">
                    <input class='input_type maska_phone' placeholder='+_ (___) ___-__-__' required='' type='text' name="phone">
                    <input class='btn_style_n btn_style_n-blue-hover btn_style_n-big active button_type' type='submit'
                           value='Отправить заявку' data-type="repairs">
                </form>
                <p>
                    Нажимая на кнопку "Отправить заявку",
                    <a class='open_text_popup_call' href='#'>я даю согласие на обработку своих персональных данных.</a>
                </p>
                <div class='all_text_scrolling'>
                    <div class='text_area_popup'>
                        <span>ПОЛИТИКА ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ</span>
                        <p>
                            Дата размещения на Сайте «30» июня 2016 года
                            <br>
                            Настоящее Пользовательское соглашение является публичным документом администратора сайта prorabneva.ru
                            (далее – Администратор) и определяет порядок использования посетителями (далее - Посетитель) сайта
                            prorabneva.ru, принадлежащего Администратору, и обработки, хранения и иного использования информации,
                            получаемой Администратором от Посетителя на сайте Администратора. Администратор сайта может изменить в
                            любой момент данное Пользовательское соглашение без уведомления Посетителя сайта.
                        </p>
                        <span>ТЕРМИНЫ И ОПРЕДЕЛЕНИЯ</span>
                        <ul>
                            <li>a) Данные – иные данные о Пользователе (не входящие в понятие персональных данных).</li>
                            <li>
                                b) Законодательство – действующее законодательство Российской Федерации.
                                <br>
                                Оператор (Администратор сайта) – Прораб НЕВА, самостоятельно или совместно с другими лицами
                                организующее и (или) осуществляющее обработку персональных данных, а также определяющее цели
                                обработки персональных данных, состав персональных данных, подлежащих обработке, действия
                                (операции), совершаемые с персональными данными.
                            </li>
                            <li>
                                c) Персональные данные – любая информация, относящаяся к прямо или косвенно определённому или
                                определяемому физическому лицу (Пользователю).
                                <br>
                                Пользователь (Посетитель) сайта – лицо, имеющее доступ к Сайту посредством сети Интернет и
                                использующее сайт.
                            </li>
                            <li>d) Предоставление персональных данных – действия, направленные на раскрытие Персональных данных
                                определённому лицу или определённому кругу лиц.
                            </li>
                            <li>e) Сайт – сайт, расположенный в сети Интернет, где пользователь оставляет персональные данные.
                            </li>
                            <li>f) Субъект персональных данных – Пользователь (физическое лицо), к которому относятся Персональные
                                данные.
                            </li>
                        </ul>
                        <ol>
                            <li>
                                <span>ОБЩИЕ ПОЛОЖЕНИЯ</span>
                                <ul>
                                    <li>1.1. Настоящая Политика в отношении обработки персональных данных разработана в соответствии
                                        с положениями Федерального закона от 27.07.2006 №152-ФЗ «О персональных данных» (с
                                        изменениями и дополнениями), другими законодательными и нормативными правовыми актами и
                                        определяет порядок работы с Персональными данными Пользователей и (или) передаваемых
                                        Пользователями и требования к обеспечению их безопасности.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span>УСЛОВИЯ ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ</span>
                                <ul>
                                    <li>2.1. Обработка Персональных данных Администратором сайта допускается при наличии согласия
                                        Пользователя на обработку его Персональных данных. Посетитель сайта, оставляя какую-либо
                                        информацию, относящуюся прямо или косвенно к определенному или определяемому физическому лицу
                                        (далее - Персональные данные), подтверждает, что ознакомился с данным Пользовательским
                                        соглашением и согласен с ним.
                                    </li>
                                    <li>2.2. Администратор сайта не раскрывает третьим лицам и не распространяет Персональные данные
                                        без согласия Пользователя, если иное не предусмотрено Законодательством.
                                    </li>
                                    <li>2.3. Посетитель сайта понимает и соглашается с тем, что предоставление Администратору
                                        какой-либо информации, не имеющей никакого отношения к целям сайта, запрещено. Такой
                                        информацией может являться информация, касающаяся состояния здоровья, интимной жизни,
                                        национальности, религии, политических, философских и иных убеждений Посетителя, а равно и
                                        информация, которая является коммерческой, банковской и иной тайной Посетителя сайта.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span>СБОР И ОБРАБОТКА ПЕРСОНАЛЬНЫХ ДАННЫХ И ИНЫХ ДАННЫХ</span>
                                <ul>
                                    <li>3.1. В отношении всех сообщаемых Персональных данных Посетитель дает Администратору полное
                                        согласие на их обработку. При этом сбор Персональных данных может осуществляться как
                                        посредством Сайта, так и в офисе Администратора сайта.
                                    </li>
                                    <li>3.2. Оператор обрабатывает Персональные данные в следующих целях:</li>
                                    <li>4.2.1. осуществления деятельности, предусмотренной̆ действующим законодательством РФ</li>
                                    <li>3.2.2. выполнения обязательств Оператора перед Пользователем по оказанию услуг;</li>
                                    <li>3.2.3. для связи с Пользователями в случае необходимости, в том числе для направления
                                        уведомлений, информации и запросов, связанных с оказанием услуг, а также обработки
                                        заявлений, запросов и заявок Пользователей;
                                    </li>
                                    <li>3.2.4. для улучшение качества услуг, оказываемых Оператором;</li>
                                    <li>4.2.5. для продвижения услуг на рынке путем осуществления прямых контактов с
                                        Пользователями;
                                    </li>
                                    <li>3.2.6. для проведения статистических и иных исследований на основе обезличенных
                                        персональных данных.
                                    </li>
                                    <li>3.3. Посетитель в соответствии с ч. 1 ст. 18 Федерального закона «О рекламе» дает
                                        Администратору свое согласие на получение сообщений рекламного характера по указанным
                                        контактным данным.
                                    </li>
                                    <li>3.4. Посетитель самостоятельно несёт ответственность за нарушение законодательства при
                                        использовании сайта Администратора.
                                    </li>
                                    <li>3.5. Администратор не несет никакой ответственности в случае нарушения законодательства
                                        Посетителем, в том числе, не гарантирует, что содержимое сайта соответствует целям Посетителя
                                        сайта.
                                    </li>
                                    <li>3.6. Посетитель сайта несет самостоятельно ответственность в случае, если были нарушены
                                        права и законные интересы третьих лиц, при использовании сайта Администратора, Посетителем.
                                    </li>
                                    <li>3.7. Администратор вправе запретить использование сайта Посетителю, если на то есть законные
                                        основания.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span>ПРАВА СУБЪЕКТОВ ПЕРСОНАЛЬНЫХ ДАННЫХ</span>
                                <ul>
                                    <li>4.1. Пользователь имеет право на получение информации, касающейся обработки его Персональных
                                        данных/Данных. Пользователь вправе требовать от Оператора уточнения его Персональных данных,
                                        их блокирования или уничтожения в случае, если Персональные данные являются неполными,
                                        устаревшими, неточными, незаконно полученными или не являются необходимыми для заявленной
                                        цели обработки, а также принимать предусмотренные законом меры по защите своих прав.
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id='popup_call_thank_you'>
        <div class='all_popup'>
            <div class='close'>
                <img src='{{ asset('frontend/images/close_icon.png') }}' alt='Прораб Нева'>
            </div>
            <div class='popup_block'>
                <div class='title_popup'>Спасибо</div>
                <div class='text'>Благодарим Вас за обращение в нашу компанию! В ближайшее время мы с Вами свяжемся.</div>
                <div class='img'>
                    <img src='{{ asset('frontend/images/popup_img_1.png') }}' alt='Прораб Нева'>
                </div>
            </div>
        </div>
    </div>
    <!-- / -------------------- -->
    <section class="back_to_top active"></section>




@endsection
